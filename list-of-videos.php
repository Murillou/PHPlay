<?php

use Phplay\Mvc\Repository\VideoRepository;

require __DIR__ . '/config/connection-bd.php';
$repositoryVideo = new VideoRepository($pdo);
$dataVideos = $repositoryVideo->getAllVideos();
?>

<?php require_once 'header-html.php'; ?>

    <ul class="videos__container" alt="Vídeos PHP">
      <?php foreach($dataVideos as $video) :?>
      <li class="videos__item">
        <iframe
          width="100%"
          height="75%"
          src="<?= $video->url ?>"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          referrerpolicy="strict-origin-when-cross-origin"
          allowfullscreen
        ></iframe>
        <div class="video-description">
          <img src="./img/logo.png" alt="logo canal alura" />
          <h3><?= $video->title ?></h3>
          <div class="acoes-video">
          <a href="/update-video?id=<?= $video->id; ?>">Editar</a>
          <a href="/delete-video?id=<?= $video->id; ?>">Excluir</a>
          </div>
        </div>
      </li>
      <?php endforeach ?>
    </ul>

<?php require_once 'footer-html.php'; ?>
