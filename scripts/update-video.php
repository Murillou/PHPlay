<?php

require '../config/connection-bd.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if ($id === false) {
    header('Location: /?sucesso=0');
    exit();
}

$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL);
if ($url === false) {
    header('Location: /?sucesso=0');
    exit();
}
$title = filter_input(INPUT_POST, 'title');
if ($title === false) {
    header('Location: /?sucesso=0');
    exit();
}


$sqlQuery = 'UPDATE videos SET url = :url, title = :title WHERE id = :id';
$stmt = $pdo->prepare($sqlQuery);
$stmt->bindValue(':url', $url, PDO::PARAM_STR);
$stmt->bindValue(':title', $title, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);


if ($stmt->execute() === false) {
  header('Location: /?sucesso=0');
} else {
  header('Location: /?sucesso=1');
}