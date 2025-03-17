<?php
require_once __DIR__ . '/header-html.php';

?>

<ul class="videos__container" alt="Vídeos PHP">
    <?php foreach ($dataVideos as $video) : ?>
    <li class="videos__item">
        <?php if ($video->getFilePath() !== null) : ?>
        <a href="<?= $video->url; ?>">
            <img src="/img/upload/<?= $video->getFilePath(); ?>" alt="" style="width: 20rem; height: 14.5rem;"/>
        </a>
        <?php else : ?>
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
        <?php endif; ?>
        <div class="video-description">
            <img style='display: hidden' src="./img/logo.png" alt="logo canal alura" />
            <h3><?= htmlspecialchars($video->title, ENT_QUOTES, 'UTF-8') ?></h3>
            <div class="acoes-video">
                <a href="/update-video?id=<?= $video->id; ?>">Editar</a>
                <a href="/delete-video?id=<?= $video->id; ?>">Excluir</a>
            </div>
        </div>
    </li>
    <?php endforeach ?>
</ul>

<?php require_once __DIR__ . '/footer-html.php';