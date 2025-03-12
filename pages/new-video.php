<?php

  require '../config/connection-bd.php';

$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL);
if ($url === false) {
  header('Location: ../index.php?sucesso=0');
  exit();
}
$title = filter_input(INPUT_POST, 'title');
if ($title === false) {
  header('Location: ../index.php?sucesso=0');
  exit();
}

$sqlQuery = 'INSERT INTO videos (url, title) VALUES (:url, :title);';
$stmt = $pdo->prepare($sqlQuery);
$stmt->bindValue(':url', $url, PDO::PARAM_STR);
$stmt->bindValue(':title', $title, PDO::PARAM_STR);

if ($stmt->execute() ===false) {
  header('Location: ../index.php?sucesso=0');
} else {
  header('Location: ../index.php?sucesso=1');
}
