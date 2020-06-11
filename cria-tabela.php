<?php

require_once 'vendor/autoload.php';

use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;

/** @var PDO $pdo */
$pdo = ConnectionCreator::createConnection();

$sucesso = $pdo->exec("
CREATE TABLE students (
    id INTEGER PRIMARY KEY,
    name TEXT,
    birth_date TEXT);
");

echo $sucesso;
