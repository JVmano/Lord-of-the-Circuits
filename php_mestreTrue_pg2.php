<?php
//incluir este arquivo em todas as páginas com o arquivo de db
    include("auth_session.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP - Aula 3</title>
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

        Nesta última aula de PHP iremos falar sobre o comando switch case, falta pouco! <br><br>

        Explicando o Switch case: Você escolhe uma variável, caso ela receba um valor, você pode dar um comando, caso receba outro valor, você pode dar outro comando, assim por diante, vamos a um exemplo: <br><br>

        <img src="./src/images/content_mestreTrue_php3.png" alt="content_mestreTrue_php3" class="img-fluid" width="300"> <br><br>

        Switch Case é sempre uma escolha, você apenas programa qual será o resultado dessa escolha, igual quando você precisa escolher entre a armadura mais forte ou mais bonita...[morra com estilo] <br><br>

        <div style='position:relative; padding-bottom:calc(56.25% + 44px)'><iframe src='https://gfycat.com/ifr/ColdAmusingBudgie' frameborder='0' scrolling='no' width='100%' height='100%' style='position:absolute;top:0;left:0;' allowfullscreen></iframe></div><p> <a href="https://gfycat.com/coldamusingbudgie">via Gfycat</a></p> <br><br>

        Declaramos a variável $numero e atribuímos o valor 1 para ela, depois abrimos a estrutura com “switch” e o nome da variável que você quer escolher para esta operação dentro dos parênteses, neste caso, a variável $numero. Depois, dentro das chaves vamos a cada caso (case): caso valor de $numero seja 0, ele vai executar o comando abaixo, no caso a mensagem dizendo que o número é 0, em seguida temos o comando “break”, que serve para encerrar este caso, abaixo temos outros dois casos. O comando que será executado será o segundo case (o case 1), pois o valor de $numero foi definido como igual a 1, então a mensagem que aparecerá será “O numero é 1”. É desta forma que funciona o comando switch case! <br><br>

        Temos ainda uma outra opção possível, caso o valor da variável não atenda nenhum dos casos mostrados. <br><br>

        <img src="./src/images/content_mestreTrue_php4.png" alt="content_mestreTrue_php4" class="img-fluid" width="300"> <br><br>

        Este exemplo é quase igual ao anterior, com a diferença de que desta vez temos o comando default, que será utilizado caso nenhuma das outras opções seja verdadeira, por exemplo, se o valor da variável $numero fosse 10, não se encaixaria em nenhuma das 3 opções acima, então ele mostraria a mensagem “o número não é 0, 1 ou 2”. <br><br>

        Esta foi a nossa última aula do curso PHP, esperamos que você tenha conseguido compreender as aulas e acompanhar, depois de muito treino toda pessoa pode aprender a programar, mas lembre-se, “com grandes poderes, vêm grandes responsabilidades”, utilize o recurso da programação para coisas positivas, que podem lhe ajudar ou ajudar outras pessoas, a linguagem PHP é apenas o começo de uma longa jornada, existem diversas linguagens e funções a serem aprendidas. Dito isso, boa sorte em sua carreira!

        <br><br><br><br>
        </p>

    </div>
    
    <a href="fim.php">
        <button type="button" class="nes-btn is-warning next-btn">PRÓXIMO</button>
    </a>

    <a href="hp_mestreTrue_pg1.php">
        <button type="button" class="nes-btn is-success back-btn">ANTERIOR</button>    
    </a>

    <!-- scripts bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>