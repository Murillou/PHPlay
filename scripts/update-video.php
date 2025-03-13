<?php

use Phplay\Mvc\Model\Video;
use Phplay\Mvc\Repository\VideoRepository;

require '../config/connection-bd.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if ($id === false || $id === null) {
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

$video = new Video($url, $title);
$video->setId($id);

$repositoryVideo = new VideoRepository($pdo);

if ($repositoryVideo->updateVideo($video) === false) {
  header('Location: /?sucesso=0');
} else {
  header('Location: /?sucesso=1');
}