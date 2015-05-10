<?php

require_once 'medoo.min.php';

function get_db_connection() {
	$database = new medoo([
		'database_type' => 'mysql',
		'database_name' => 'web_attacks',
		'server' => 'localhost',
		'username' => 'webattacker',
		'password' => 'pass@123',
		'charset' => 'utf8'
	]);
	return $database;
}

?>
