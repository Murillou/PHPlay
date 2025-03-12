<?php

  require '../config/connection-bd.php';

$id = $_GET['id'];
$sqlQuery = 'DELETE FROM videos WHERE id = :id';
$stmt = $pdo->prepare($sqlQuery);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);

if ($stmt->execute() === false) {
  header('Location: /?sucesso=0');
  exit();
} else {
  header('Location: /?sucesso=1');
  exit();
}