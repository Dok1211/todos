<?php
	require('connections.php');

	//新規作成
	function create($data) {
		insertDb($data['todo']);
	}

	//全件取得
	function index() {
		return $todos = selectAll();
	}

	//更新
	function update($data) {
		updateDb($data['id'], $data['todo']);
	}

	//詳細の取得
	function detail($id) {
		return getSelectData($id);
	}

	function checkReferer() {
		$httpArr = parse_url($_SERVER['HTTP_REFERER']);
		return $res = transition($httpArr['path']);
	}

	function transition($path) {
		$data = $_POST;
		if ($path === '/index.php' && $data['type'] === 'delete') {
			deleteData($data['id']);
			return 'index.php';
		}elseif ($path === '/new.php') {
			create($data);
		}elseif ($path === '/edit.php') {
			update($data);
		}
	}

	function deleteData($id) {
		deleteDb($id);
	}
?>