<?php

require 'functions.php';

try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=php pdo', 'root', '');
} catch (PDOException $e) {
    die($e->getMessage());
}

$statement = $pdo->prepare("SELECT * FROM `todos`");

$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_OBJ);



dd($tasks[0]->description);

require 'index.view.php';
