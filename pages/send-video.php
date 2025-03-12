<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/form-style.css">
    <link rel="stylesheet" href="../css/flexbox.css">
    <title>PHPlay</title>
    <link rel="shortcut icon" href="../img/icon-aba.png" type="image/x-icon" />
</head>

<body>
    <header>
        <nav class="header">
            <a class="logo" href="../index.html">        
              <h1>PHPlay</h1>
            </a>

            <div class="header__icons">
                <a href="./send-video.html" class="header__videos"></a>
                <a href="../pages/login.html" class="header__sair">Sair</a>
            </div>
        </nav>
    </header>

    <main class="container">
        <form class="container__formulario" action="new-video.php" method="post">
            <h2 class="formulario__titulo">Envie um vídeo!</h3>
                <div class="formulario__campo">
                    <label class="campo__etiqueta" for="url">Link embed</label>
                    <input name="url" class="campo__escrita" required
                        placeholder="Por exemplo: https://www.youtube.com/embed/FAY1K2aUg5g" id='url' />
                </div>


                <div class="formulario__campo">
                    <label class="campo__etiqueta" for="titulo">Titulo do vídeo</label>
                    <input name="title" class="campo__escrita" required placeholder="Neste campo, dê o nome do vídeo"
                        id='titulo' />
                </div>

                <input class="formulario__botao" type="submit" value="Enviar" />
        </form>
    </main>
</body>
</html>