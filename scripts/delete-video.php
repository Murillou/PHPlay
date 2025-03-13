<?php

use Phplay\Mvc\Repository\VideoRepository;

require '../config/connection-bd.php';

$id = $_GET['id'];
$repositoryVideo = new VideoRepository($pdo);

if ($repositoryVideo->deleteVideo($id) === false) {
  header('Location: /?sucesso=0');
  exit();
} else {
  header('Location: /?sucesso=1');
  exit();
}