<?php

$host = 'localhost';
$db = 'wad_database';
$user = 'root';
$password = 'bsis2';

$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
	$pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

	if ($pdo) {
		echo "Connected to the $db database successfully!";
	}
} catch (PDOException $e) {
	echo $e->getMessage();
}

