<?php 
    require './config/connection-bd.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$video = [
    'url' => '',
    'title' => ''
];

if ($id !== false && $id !== null) {
    $stmt = $pdo->prepare('SELECT * FROM videos WHERE id = :id;');
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $video = $stmt->fetch();
} 



?>
<?php require_once 'header-html.php'; ?>

    <main class="container">
        <form class="container__formulario"
        action="<?= $id ? "/scripts/update-video.php?id=$id" : '/scripts/new-video.php'; ?>"
        method="post">
            <h2 class="formulario__titulo">Envie um vídeo!</h3>
                <div class="formulario__campo">
                    <label class="campo__etiqueta" for="url">Link embed</label>
                    <input name="url" class="campo__escrita" required value="<?= $video['url']; ?>"
                        placeholder="Por exemplo: https://www.youtube.com/embed/FAY1K2aUg5g" id='url' />
                </div>


                <div class="formulario__campo">
                    <label class="campo__etiqueta" for="titulo">Titulo do vídeo</label>
                    <input name="title" class="campo__escrita" required placeholder="Neste campo, dê o nome do vídeo" 
                        value="<?= $video['title']; ?>" id='titulo' />
                </div>

                <input class="formulario__botao" type="submit" value="Enviar" />
        </form>
    </main>

<?php require_once 'footer-html.php'; ?>
