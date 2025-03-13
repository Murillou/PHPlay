<?php

use Phplay\Mvc\Controller\{
    Controller,
    DeleteVideoController,
    UpdateVideoController,
    Error404Controller,
    NewVideoController,
    VideoFormController,
    VideoListController
};
use Phplay\Mvc\Repository\VideoRepository;

require_once __DIR__ . "/../vendor/autoload.php";

require __DIR__ . '/../config/connection-bd.php';
$videoRepository = new VideoRepository($pdo);

if (!array_key_exists('REQUEST_URI', $_SERVER) || 
strpos($_SERVER['REQUEST_URI'], '/?') === 0 || $_SERVER['REQUEST_URI'] === '/') {
    $controller = new VideoListController($videoRepository);

} elseif ($_SERVER['REQUEST_URI'] === '/new-video') {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $controller = new VideoFormController($videoRepository);
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $controller = new NewVideoController($videoRepository);
    }

} elseif (strpos($_SERVER['REQUEST_URI'], '/update-video') === 0) {
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $controller = new VideoFormController($videoRepository);
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $controller = new UpdateVideoController($videoRepository);
}

} elseif (strpos($_SERVER['REQUEST_URI'], needle: '/delete-video') === 0) {
        $controller = new DeleteVideoController($videoRepository);
} else {
        $controller = new Error404Controller();
}

/** @var Controller $controller */
$controller->processRequest();