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
?>