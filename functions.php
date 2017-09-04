<?php
	require('connections.php');

	function create($data) {
		insertDb($data['todo']);
	}
?>