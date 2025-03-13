<?php

namespace Phplay\Mvc\Controller;

use Phplay\Mvc\Model\Video;
use Phplay\Mvc\Repository\VideoRepository;

class UpdateVideoController implements Controller
{
    public function __construct(private VideoRepository $videoRepository)
    {

    }

    public function processRequest(): void
    {
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

      $success = $this->videoRepository->updateVideo($video);

      if ($success === false) {
        header('Location: /?sucesso=0');
      } else {
        header('Location: /?sucesso=1');
      }
      
    }


}