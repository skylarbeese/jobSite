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
/*
$stmt = $pdo->query('SELECT * FROM job_listed');

while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
echo $row['j_title'];
}

while($row = $stmt->fetch()){
    echo $row->j_title;
    echo $row->cat_id;
    }

*/

require_once 'insert.php';

$crud = new In($pdo);

