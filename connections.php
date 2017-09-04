<?php
	//一度だけ読み込む
	require_once('config.php');

	//DB接続設定
	function connectPdo() {
		try {
			return new PDO(DSN, DB_USER, DB_PASSWORD);
		}catch (PDOException $e){
			echo $e->getMeddage();
			exit;
		}
	}

	//作成処理
	function insertDb($data) {
		$dbh = connectPdo();
		$sql = 'INSERT INTO todos (todo) VALUES (:todo)';
		$stmt = $dbh->prepare($sql);
		$stmt->bindParam(':todo', $data, PDO::PARAM_STR);
		$stmt->execute();
	}
?>