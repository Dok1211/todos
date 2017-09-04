<?php
	//一度だけ読み込む
	require_once('config.php');

	//DB接続設定
	function connectPdo() {
		try {
			return new PDO(DSN, DB_USER, DB_PASSWORD);
		}catch {
			echo $e->getMeddage();
			exit;
		}
	}
?>