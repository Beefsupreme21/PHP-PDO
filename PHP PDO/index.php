<?php

require 'Task.php';

// PDO = PHP Data Object
try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=test-data', 'root', '');
} catch (PDOException $e) {
    die($e->getMessage());
}

$statement = $pdo->prepare("SELECT * FROM `test-table`;");

$statement->execute();

$results = $statement->fetchAll(PDO::FETCH_CLASS, 'Employees');



echo '<pre>';
var_dump($results[0]->Username);
echo '</pre>';

require 'index.view.php';
