<?php

$host = "localhost";
$root = "root";
$password = "";
$dbname = "job_listing";

$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
try {
$pdo = new PDO($dsn, $root, $password);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
   throw new PDOException($e->getMessage());
}


require_once 'insert.php';
require_once 'update.php';
require_once 'signup.inc.php';
$crud = new In($pdo);
$crud1 = new Up($pdo);
$crud2 = new Sign($pdo);

