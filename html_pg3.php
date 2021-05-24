<?php
//incluir este arquivo em todas as páginas com o arquivo de db
    include("auth_session.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>HTML - Aula 3</title>
    <!-- Especificação de caractere -->
    <meta charset="utf-8">

    <!-- Disponibilização de responsividade -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <!-- NES.css -->
    <link href="https://unpkg.com/nes.css/css/nes-core.min.css" rel="stylesheet" />

    <!-- Bootstrap.css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Arquivo de estilização principal -->
    <link rel="stylesheet" href="./src/style.css" />

    <!-- Script de ativação do Font Aweasome -->
    <script src="https://kit.fontawesome.com/c32b55f064.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Nav bar -->
    <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="index.php">
        <img src="./src/images/logo.png" alt="logo" width="150px">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
        </ul>

        <ul class="navbar-nav my-2 my-sm-0 perfil">
            <li class="nav-item active">
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <span style="color: yellow;">
                        <i class="far fa-user-circle fa-3x"></i>
                    </span>
                    </a>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="#"><?php echo $_SESSION['username']; ?></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="./logout.php">Sair</a>
                    </div>
                </li>
            </li>
        </ul>
    </div>
    </nav>
    <!-- Nav bar./ -->

    <div class="container content">
        
        <h2>Aula 3</h2>
        <p>

        Nesta aula aprenderemos sobre identação e mais algumas tags interessantes de HTML. <br><br>

        Identação: Basicamente é uma forma de organizar melhor o código escrito no seu projeto, onde as tags ficam uma dentro da outra respeitando sua ordem de criação por exemplo: <br><br>

        <img src="./src/images/content_padawan9.png" alt="content_padawan3" class="img-fluid" width="300"> <br><br>

        Perceba que tudo que está dentro da tag head está mais para a direita, da mesma forma que tudo que está na tag body. A tag center está mais à direita, dentro da tag center encontramos um pequeno conteúdo na tag h2, que ficará todo centralizado, desta forma o código ficará muito mais organizado e fácil de entender para quem quer que o veja. Vale lembrar que a identação não altera em nada o conteúdo visualizado no site em si, serve apenas para organizar melhor seu trabalho. <br><br>

        Sempre idente bem seus códigos, tal como normalmente temos que organizar nosso inventário no Resident Evil 4, as vezes pode ser confuso mas se algo deve funcionar, tem que ser organizado primeiro... <br><br>

        <iframe src="https://giphy.com/embed/lbAgIgQ6Dytkk" width="470" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/resident-evil-4-lbAgIgQ6Dytkk">via GIPHY</a></p> <br><br>

        Outras tags importantes para HTML: <br><br>

        &lt;html lang=”pt-br&gt;: Esta fica dentro da tag html, serve para indicar que o conteúdo HTML está sendo escrito em um determinado idioma, neste caso em português do Brasil, assim: <br><br>

        <img src="./src/images/content_padawan10.png" alt="content_padawan3" class="img-fluid" width="300"> <br><br>

        &lt;p&gt;&lt;/p&gt;: Serve para marcar o início de um parágrafo, sendo que o texto fica dentro destas tags. <br><br>
        
        &lt;br&gt; esta tag geralmente fica no final de um texto e serve como quebra de linha, muito importante para organizar seus textos. <br><br>

        &lt;font color=”blue”>Este texto ficará azul</font>: Esta tag altera a cor da sua fonte, neste caso para azul. <br><br>

        &lt;a href="arquivo2.html"&gt;Clique aqui para acessar outro conteúdo!&lt;/a&gt;: Esta tag permite que você crie um “botão” para outras páginas que você tenha criado dentro do seu site, basta que você coloque o nome da página que você quer que o botão direcione e dar um nome ao botão, neste caso foi “Clique aqui para acessar outro conteúdo!”. <br><br>
        
        Caso queira direcionar para um link de outro site da internet, basta trocar o nome do arquivo dentro de href=”” pelo link do site que deseja direcionar. <br><br>

        &lt;style&gt;&lt;style&gt;: Esta tag é muito importante numa página HTML, pois é dentro dela que é feita a estilização do seu site, geralmente fica dentro das tags head do seu código, utilizando a linguagem CSS, assim: <br><br>

        <img src="./src/images/content_padawan11.png" alt="content_padawan3" class="img-fluid" width="300"> <br><br>

        Veremos como ela funciona no próximo modo de dificuldade, pois já começamos a progredir um pouco de dificuldade neste curso, desta forma, encerramos aqui nossa dificuldade básica em HTML. <br><br>

        <br><br><br><br>
        </p>

    </div>
    <a href="fim.php">
        <button type="button" class="nes-btn is-warning next-btn">PRÓXIMO</button>
    </a>

    <a href="html_pg2.php">
        <button type="button" class="nes-btn is-success back-btn">ANTERIOR</button>    
    </a>

    <!-- scripts bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>