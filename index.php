<?php
  require './config/connection-bd.php';

  $stmt = $pdo->query('SELECT * FROM videos;');
  $dataVideos = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/reset.css" />
    <link rel="stylesheet" href="./css/styles.css" />
    <link rel="stylesheet" href="./css/flexbox.css" />
    <title>PHPlay</title>
    <link rel="shortcut icon" href="./img/icon-aba.png" type="image/x-icon" />
  </head>

  <body>
    <header>
      <nav class="header">
        <h1>PHPlay</h1>

        <div class="header__icons">
          <a href="./pages/send-video.php" class="header__videos"
            >Enviar vídeo</a
          >
          <a href="./pages/login.php" class="header__sair">Sair</a>
        </div>
      </nav>
    </header>

    <ul class="videos__container" alt="Vídeos PHP">
      <?php foreach($dataVideos as $video) :?>
      <li class="videos__item">
        <iframe
          width="100%"
          height="75%"
          src="<?= $video['url'] ?>"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          referrerpolicy="strict-origin-when-cross-origin"
          allowfullscreen
        ></iframe>
        <div class="video-description">
          <img src="./img/logo.png" alt="logo canal alura" />
          <h3><?= $video['title'] ?></h3>
          <div class="acoes-video">
            <a href="./pages/send-video.php">Editar</a>
            <a href="./pages/delete-video.php?id=<?= $video['id']; ?>">Excluir</a>
          </div>
        </div>
      </li>
      <?php endforeach ?>
    </ul>
  </body>
</html>