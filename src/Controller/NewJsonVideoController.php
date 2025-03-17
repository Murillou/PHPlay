<?php

namespace Phplay\Mvc\Controller;

use Phplay\Mvc\Model\Video;
use Phplay\Mvc\Repository\VideoRepository;

class NewJsonVideoController implements Controller
{
    public function __construct(private VideoRepository $videoRepository)
    {
    }

    public function processRequest(): void
    {
        $request = file_get_contents('php://input');
        $dataVideo = json_decode($request, true);
        $video = new Video($dataVideo['url'], $dataVideo['title']);
        $this->videoRepository->addVideo($video);

        http_response_code(201);
    }
}
