<?php
require_once __DIR__ . '/header-html.php'; ?>

<main class="container">
    <form class="container__formulario" enctype="multipart/form-data" method="post">
        <h2 class="formulario__titulo">Envie um vídeo!</h2>
            <div class="formulario__campo">
                <label class="campo__etiqueta" for="url">Link embed</label>
                <input name="url" class="campo__escrita" required value="<?= $video?->url; ?>"
                    placeholder="Por exemplo: https://www.youtube.com/embed/FAY1K2aUg5g" id='url' />
            </div>


            <div class="formulario__campo">
                <label class="campo__etiqueta" for="titulo">Titulo do vídeo</label>
                <input name="title" class="campo__escrita" required placeholder="Neste campo, dê o nome do vídeo" 
                    value="<?= $video?->title; ?>" id='titulo' />
            </div>


            <div class="formulario__campo">
                <label class="campo__etiqueta" for="image">Imagem do vídeo</label>
                <input type="file" accept="image/*" name="image" class="" id='image' />
            </div>

            <input class="formulario__botao" type="submit" value="Enviar" />
    </form>
</main>

<?php
require_once __DIR__ . '/footer-html.php';
