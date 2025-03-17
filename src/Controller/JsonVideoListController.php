<?php

namespace Phplay\Mvc\Controller;

use Phplay\Mvc\Model\Video;
use Phplay\Mvc\Repository\VideoRepository;

class JsonVideoListController implements Controller
{
    public function __construct(private VideoRepository $videoRepository)
    {

    }
    public function processRequest(): void
    {
      $videoList = array_map(function (Video $video) {
        return [
          'url' => $video->url,
          'title' => $video->title,
          'file_path' => '/img/upload/' . $video->getFilePath()
        ];

      }, $this->videoRepository->getAllVideos());
      echo json_encode($videoList);
    }
}