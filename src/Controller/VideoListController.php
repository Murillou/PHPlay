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
        $dataVideos = $this->videoRepository->getAllVideos();
        require_once __DIR__ . '/../../header-html.php'; 

        ?>

        <ul class="videos__container" alt="Vídeos PHP">
            <?php foreach($dataVideos as $video) : ?>
            <li class="videos__item">
                <iframe
                    width="100%"
                    height="75%"
                    src="<?= htmlspecialchars($video->url, ENT_QUOTES, 'UTF-8') ?>"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen
                ></iframe>
                <div class="video-description">
                    <img src="./img/logo.png" alt="logo canal alura" />
                    <h3><?= htmlspecialchars($video->title, ENT_QUOTES, 'UTF-8') ?></h3>
                    <div class="acoes-video">
                        <a href="/update-video?id=<?= $video->id; ?>">Editar</a>
                        <a href="/delete-video?id=<?= $video->id; ?>">Excluir</a>
                    </div>
                </div>
            </li>
            <?php endforeach ?>
        </ul>

        <?php 
        require_once __DIR__ . '/../../footer-html.php';
    }
}