<?php

namespace Phplay\Mvc\Controller;

use Phplay\Mvc\Model\Video;
use Phplay\Mvc\Repository\VideoRepository;

class NewVideoController implements Controller
{
    public function __construct(private VideoRepository $videoRepository)
    {

    }

    public function processRequest(): void
    {
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

      $success = $this->videoRepository->addVideo(new Video($url, $title));
      if ( $success === false) {
          header('Location: /?sucesso=0');
      } else {
          header('Location: /?sucesso=1');
      }

    }
}