<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . DIRECTORY_SEPARATOR . 'banco.sqlite';

$pdo = new PDO("sqlite:{$databasePath}");

/** @var Student $student */
$student = new Student(null, 'Charles', new DateTimeImmutable('1997-10-15'));

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES ('{$student->name()}', '{$student->birthDate()->format('Y-m-d')}')";

var_dump($pdo->exec($sqlInsert));