<?php

  require '../config/connection-bd.php';

$sqlQuery = 'INSERT INTO videos (url, title) VALUES (:url, :title);';

$stmt = $pdo->prepare($sqlQuery);
$stmt->bindValue(':url', $_POST['url'], PDO::PARAM_STR);
$stmt->bindValue(':title', $_POST['title'], PDO::PARAM_STR);

if ($stmt->execute() ===false) {
  header('Location: ../index.php?sucesso=0');
} else {
  header('Location: ../index.php?sucesso=1');
}
