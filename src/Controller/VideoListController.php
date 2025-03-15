<?php

namespace Phplay\Mvc\Controller;

use Phplay\Mvc\Repository\VideoRepository;
class VideoListController implements Controller
{
    public function __construct(private VideoRepository $videoRepository)
    {
    }

    public function processRequest(): void
    {
        session_start();
        if (!array_key_exists('logado', $_SESSION)){
            header('Location: /login');
            return;
        }

        $dataVideos = $this->videoRepository->getAllVideos();
        require_once __DIR__ . "/../../Views/video-list.php";
    }
}