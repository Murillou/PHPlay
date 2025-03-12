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
          <a href="./pages/send-video.html" class="header__videos"
            >Enviar vídeo</a
          >
          <a href="./pages/login.html" class="header__sair">Sair</a>
        </div>
      </nav>
    </header>

    <ul class="videos__container" alt="Vídeos PHP">
      <li class="videos__item">
        <iframe
          width="100%"
          height="75%"
          src="https://www.youtube.com/embed/MaDrzr4fAcE?si=m9UC_tLn7QrbPKI_"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          referrerpolicy="strict-origin-when-cross-origin"
          allowfullscreen
        ></iframe>
        <div class="video-description">
          <img src="./img/logo.png" alt="logo canal alura" />
          <h3>O futuro do PHP em 2024: Vale a pena aprender?</h3>
          <div class="acoes-video">
            <a href="./pages/send-video.html">Editar</a>
            <a href="./pages/send-video.html">Excluir</a>
          </div>
        </div>
      </li>
      <li class="videos__item">
        <iframe
          width="100%"
          height="75%"
          src="https://www.youtube.com/embed/NhUFUfzZowM?si=xcMqvJWUevLLDmY9"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          referrerpolicy="strict-origin-when-cross-origin"
          allowfullscreen
        ></iframe>
        <div class="video-description">
          <img src="./img/logo.png" alt="logo canal alura" />
          <h3>APRENDA PHP EM 10 MINUTOS</h3>
          <div class="acoes-video">
            <a href="./pages/send-video.html">Editar</a>
            <a href="./pages/send-video.html">Excluir</a>
          </div>
        </div>
      </li>
      <li class="videos__item">
        <iframe
          width="100%"
          height="75%"
          src="https://www.youtube.com/embed/6vEspHqjrkI?si=sJaFyI7dSFb5V9ah"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          referrerpolicy="strict-origin-when-cross-origin"
          allowfullscreen
        ></iframe>
        <div class="video-description">
          <img src="./img/logo.png" alt="logo canal alura" />
          <h3>Como o PHP funciona? - Conheça o OPcache</h3>
          <div class="acoes-video">
            <a href="./pages/send-video.html">Editar</a>
            <a href="./pages/send-video.html">Excluir</a>
          </div>
        </div>
      </li>
      <li class="videos__item">
        <iframe
          width="100%"
          height="75%"
          src="https://www.youtube.com/embed/nRcBvB0F_pE?si=zG9fgc1XIhYF9o_i"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          referrerpolicy="strict-origin-when-cross-origin"
          allowfullscreen
        ></iframe>
        <div class="video-description">
          <img src="./img/logo.png" alt="logo canal alura" />
          <h3>Aprendendo PHP do ZERO (material para iniciantes)</h3>
          <div class="acoes-video">
            <a href="./pages/send-video.html">Editar</a>
            <a href="./pages/send-video.html">Excluir</a>
          </div>
        </div>
      </li>
    </ul>
  </body>
</html>
