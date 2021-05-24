<?php
//incluir este arquivo em todas as páginas com o arquivo de db
    include("auth_session.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <!-- Especificação de caractere -->
    <meta charset="utf-8">

    <!-- Disponibilização de responsividade -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <!-- Códigos de estilo principais -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./src/style.css" />

    <!-- Script de ativação do Font Aweasome -->
    <script src="https://kit.fontawesome.com/c32b55f064.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Nav bar -->
    <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="index.php">
        <img src="./src/images/logo.png" alt="logo" width="9%">
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

    <div class="container home">
        <!-- <p>Hey, <?php echo $_SESSION['username']; ?>!</p> -->
        <div class="explain">
            <p>
            Este Lord of Circuits! Ele é uma plataforma de ensino de programação que utiliza de metáforas e contextos Geeks para aprimorar o método de aprendizagem, aliado à uma melhor ambientação e linguagem para o estudante. Nossos níveis de dificuldade são Padawan que seria o nível básica para aqueles que estão começando no ramo, Jedi com conteúdos intermediários, visando individúos que já tenham algumas noções e Mestre, conhecedores do ramo que gostariam de avaliar e entender conceitos mais complexos.
            </p>
        </div>
        <div class="home_header">
            <p>ESCOLHA SEU NÍVEL</p>
        </div>
        <div class="home_classes row text-center">
            <div class="col-sm">
                <a href="padawan_home.php">
                    <img src="./src/images/padawan.png" class="img-fluid" alt="padawan" width="60%">
                    <p>Padawan</p>
                </a>
            </div>
            <div class="col-sm">
                <a href="jedi_home.php">
                    <img src="./src/images/jedi.png" class="img-fluid" alt="jedi" width="60%">
                    <p>Jedi</p>
                </a>
            </div>
            <div class="col-sm">
                <a href="mestre_home.php">
                    <img src="./src/images/mestre.png" class="img-fluid" alt="mestre" width="60%">
                    <p>Mestre</p> 
                </a>
            </div>
        </div>
        
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>
