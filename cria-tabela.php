<?php

$caminhoBanco = __DIR__ . DIRECTORY_SEPARATOR . 'banco.sqlite';

$pdo = new PDO("sqlite:{$caminhoBanco}");

$sucesso = $pdo->exec("
CREATE TABLE students (
    id INTEGER PRIMARY KEY,
    name TEXT,
    birth_date TEXT);
");

echo $sucesso;
