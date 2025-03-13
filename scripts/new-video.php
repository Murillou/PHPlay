<?php

use Phplay\Mvc\Model\Video;
use Phplay\Mvc\Repository\VideoRepository;

require '../config/connection-bd.php';

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

$repositoryVideo = new VideoRepository($pdo);

if ($repositoryVideo->addVideo(new Video($url, $title)) === false) {
  header('Location: /?sucesso=0');
} else {
  header('Location: /?sucesso=1');
}

