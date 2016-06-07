<?php 
require_once (BLOG_ADMIN_DIR. '/database/db-config.php');

try {
	$conn = new PDO(
		'mysql:host=' . DBHOST . ';dbname=' . DBNAME, DBUSER, DBPASS
	);
	
} catch (PDOException $e) {
	echo "ERRO". $e-> getMessage() . "<br />";
	die();
}

function getConnection(){
	global $conn;
	
	return $conn;
}