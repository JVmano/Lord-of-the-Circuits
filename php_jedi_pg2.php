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

        Nesta aula vamos abordar um conceito completamente diferente do que foi passado até agora em nossas aulas de PHP. Vamos falar sobre a estrutura condicional if/else, como utilizá-la e sua sintaxe correta. <br><br>

        O que é if/else? <br><br>

        É uma função em programação que indica quais instruções o sistema deve processar caso as condições informadas sejam atendidas. Assim, o sistema testa se uma condição é verdadeira e então executa o bloco de comandos de acordo com o que for pedido. <br><br>

        O Robocop por exemplo, em sua essência é programado para trazer justiça para bandidos, porém SE ele avistar algum cidadão inocente, seu instinto não mostrará ela como ameaça. <br><br>

        <iframe src="https://giphy.com/embed/phyIS65F35Sco" width="480" height="396" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/hoppip-hoppip-good-ol-500kb-days-phyIS65F35Sco">via GIPHY</a></p> <br><br>

        Nesta aula veremos apenas uma breve introdução desta função, já que existem algumas outras coisas que devem ser observadas antes de irmos mais adiante neste conteúdo. Abaixo temos um exemplo da estrutura if/else e de sua sintaxe, sendo que a forma que ela funciona será explicada logo depois. <br><br>

        <img src="./src/images/content_jedi_php4.png" alt="content_jedi_php3" class="img-fluid" width="300"> <br><br>

        Veja que foi criada uma variável chamada $numero e que ela recebeu o valor 2. Logo abaixo foi criada a estrutura if, entre os parênteses está a condição: Se a variável $numero for igual a 2, ele fará o que está dentro das chaves, neste caso o comando echo dizendo que o número é igual a 2. <br><br>

        Logo abaixo temos o else, que será ativado caso as condições acima não sejam verdadeiras (neste caso, se a variável $numero não fosse igual a 2). Caso este comando seja ativado, ele fará oque está dentro das chaves abaixo, neste caso, vai inserir uma mensagem dizendo que o número não é igual a 2. <br><br>

        Este comando é muito útil para tomar ações caso algo aconteça ou não em seu projeto e é também a estrutura condicional mais básica e conhecida em linguagem de programação, pois a sua lógica é utilizada em diversas outras linguagens, com apenas mudanças de sintaxe. <br><br>

        Esta foi a última aula de nossa dificuldade intermediária em PHP, agora é sua vez de treinar o if/else! Você pode fazer diversas outras coisas além de exibir mensagens, pode somar caso as informações sejam verdadeiras e subtrair caso contrário, vai da sua criatividade!

        <br><br><br><br>
        </p>

    </div>
    
    <a href="fim.php">
        <button type="button" class="nes-btn is-warning next-btn">PRÓXIMO</button>
    </a>

    <a href="php_jedi_pg1.php">
        <button type="button" class="nes-btn is-success back-btn">ANTERIOR</button>    
    </a>

    <!-- scripts bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>