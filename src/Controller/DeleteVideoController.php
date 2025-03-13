<?php

namespace Phplay\Mvc\Controller;

use Phplay\Mvc\Repository\VideoRepository;

class DeleteVideoController implements Controller
{
    public function __construct(private VideoRepository $videoRepository)
    {

    }

    public function processRequest(): void
    {
      $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
      if ($id === null || $id === false ) {
        header('Location: /?sucesso=0');
        exit();
      }

      $success = $this->videoRepository->deleteVideo($id);
      if ($success === false) {
        header('Location: /?sucesso=0');
        exit();
      } else {
        header('Location: /?sucesso=1');
        exit();
      }
    }
}