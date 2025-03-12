<?php

  require '../config/connection-bd.php';

$id = $_GET['id'];
$sqlQuery = 'DELETE FROM videos WHERE id = :id';
$stmt = $pdo->prepare($sqlQuery);
$stmt->bindValue(':id', $id, PDO::PARAM_STR);
$stmt->execute();

if ($stmt->execute() === false) {
  header('Location: ../index.php?sucesso=0');
} else {
  header('Location: ../index.php?sucesso=1');
}