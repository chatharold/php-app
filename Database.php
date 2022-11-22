<?php


try {	
	$pdo = new PDO("mysql:host=127.0.0.1;dbname=todo_db", "root", "");
} catch(PDOException $e) {
	die($e->getMessage());
}

// query
$query = $pdo->prepare("select * from todos");

$query->execute();

$todos = $query->fetchAll(PDO::FETCH_ASSOC);

