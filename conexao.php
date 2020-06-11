<?php

$caminhoBanco = __DIR__ . DIRECTORY_SEPARATOR . 'banco.sqlite';

$pdo = new PDO("sqlite:{$caminhoBanco}");

echo "conectei";
