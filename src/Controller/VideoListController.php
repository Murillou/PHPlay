<?php

namespace Phplay\Mvc\Controller;

use Phplay\Mvc\Repository\VideoRepository;
class VideoListController extends ControllerWithHtml implements Controller
{
    public function __construct(private VideoRepository $videoRepository)
    {
    }

    public function processRequest(): void
    {
        $dataVideos = $this->videoRepository->getAllVideos();
        echo $this->renderTemplate(
            'video-list',
            ['dataVideo' => $dataVideos]
        );
    }
}
