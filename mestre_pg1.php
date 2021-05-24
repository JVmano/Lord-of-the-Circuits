<?php
//incluir este arquivo em todas as páginas com o arquivo de db
    include("auth_session.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>HTML - Aula 2</title>
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
        
        <h2>Aula 2</h2>
        <p>

        Nesta aula, veremos um pouco de layout responsivo e uma das maneiras de utilizá-lo. <br><br>

        Layout responsivo: Basicamente é o layout auto ajustável da sua página web, ou seja, sua página se ajusta a diferentes tamanhos de telas de monitores ou celulares, para ajudar na visualização do usuário em diferentes dispositivos. Uma das maneiras de utilizá-lo no CSS é usando o @media, assim: <br><br>

        É responsividade, não responsabilidade, Tio Ben!

        <iframe src="https://giphy.com/embed/MCZ39lz83o5lC" width="480" height="257" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/MCZ39lz83o5lC">via GIPHY</a></p> <br><br>

        <img src="./src/images/content_mestre4.png" alt="content_mestre4" class="img-fluid" width="400"> <br><br>

        Explicando o código: Para qualquer mídia de tela (screen) e (and) com o tamanho mínimo de 300 pixels, ele aplicará todas as alterações inseridas dentro das chaves {}. <br>
        Por exemplo: <br><br>

        <img src="./src/images/content_mestre5.png" alt="content_mestre5" class="img-fluid" width="400"> <br><br>

        Para qualquer tela com tamanho superior a 300 pixels, serão aplicadas as alterações descritas acima, o corpo da página ficara com o fundo preto e as tags img (as imagens do site) ficarão com altura e largura de 150 pixels. <br><br>

        Mas existe uma forma de especificar melhor o tamanho entre as telas: <br><br>

        <img src="./src/images/content_mestre6.png" alt="content_mestre6" class="img-fluid" width="400"> <br><br>

        Isto significa que qualquer mídia de tela com tamanho mínimo de 300 pixels e máximo de 600 pixels terá as mudanças aplicadas. Com isto, você pode aplicar diferentes mudanças para diferentes tamanhos de telas, para poder ajustar melhor a visualização do usuário. <br><br>

        Esta é uma das maneiras de se utilizar o layout responsivo em seu site, é muito importante saber sobre este assunto, pois os usuários podem acessar seu site de um celular, assim como podem acessar de um computador ou tablet. <br>

        Com isto, temos o fim da nossa segunda aula de HTML do nível mestre. Na próxima aula veremos uma ferramenta muito interessante, que é o Bootstrap, que pode lhe ajudar a ganhar um precioso tempo na hora de criar seus sites. <br><br>

        <br><br><br><br>
        </p>

    </div>
    
    <a href="fim.php">
        <button type="button" class="nes-btn is-warning next-btn">PRÓXIMO</button>
    </a>

    <a href="html_mestre_index.php">
        <button type="button" class="nes-btn is-success back-btn">ANTERIOR</button>    
    </a>

    <!-- scripts bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>