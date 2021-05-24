<?php
//incluir este arquivo em todas as páginas com o arquivo de db
    include("auth_session.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP - Aula 1</title>
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
        
        <h2>Aula 1</h2>
        <p>

        Este é o último nível de dificuldade de nosso conteúdo em PHP, lembrando que não é nada de outro mundo, mas se você caiu de paraquedas aqui e não possui um conhecimento prévio em PHP ou linguagem de programação, muito menos em HTML, recomendamos que volte e veja nossas outras aulas, mas se você já aprendeu tudo até o momento, é hora de aprender mais, lembre-se que “um verdadeiro mestre, é um eterno aprendiz”. <br><br>

        Vamos utilizar esta aula para falando um pouco sobre os conectores lógicos em programação (and, or, xor e not). Neste momento pode ficar um pouco confuso, mas daremos alguns exemplos logo depois. <br><br>

        AND: O Operador E ou AND resulta em um valor verdadeiro se os dois valores inseridos na operação forem verdadeiros. <br><br>

        OR: Este operador OU ou OR resulta em um valor verdadeiro caso uma das duas condições de entrada da operação forem verdadeiras, caso contrário o resultado será falso e o comando não será executado. <br><br>

        XOR: Também chamado de OU exclusivo é uma variação do operador OR, ele resultará em verdadeiro se apenas um dos valores de entrada for verdadeiro, caso contrário o resultado será falso e os comandos não serão exibidos. <br><br>

        NOT: Sua função é basicamente inverter o valor informado, se antes ele era verdadeiro, agora será falso e o contrário também vale. <br><br>

        Vamos agora a um exemplo utilizando o if/else: <br><br>

        <img src="./src/images/content_jedi_php5.png" alt="content_jedi_php5" class="img-fluid" width="600"> <br><br>

        Perceba que utilizamos o operador lógico “and” dentro do if, ou seja, caso o valor inserido fosse maior ou menor que 10, ele executaria o comando abaixo, que no caso é exibir a mensagem informando. Como o valor dentro da variável recebeu 2, ele se encaixa nestas condições, o comando será executado normalmente. Mas caso o valor da variável fosse menor do que zero ou maior do que 10, não se encaixaria nas condições e então o bloco de comandos do else seria executado. <br><br>

        Cada operador lógico possui sua condição para ser verdadeiro ou não, outra dica é que se você substituir o and por &&, or por || e not por !, o resultado será o mesmo, são apenas símbolos do PHP que servem para representar estes conectores lógicos! <br><br>

        Esses sinais são um método simples e rápido de descrever uma condição, são em suma uma segunda língua para passar uma mensagem, os aliens do filme A Chegada, porque sua forma de expressão é também por sinais! <br><br>

        <iframe src="https://giphy.com/embed/3oriOeYGl5MKFtb2FO" width="480" height="206" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/3oriOeYGl5MKFtb2FO">via GIPHY</a></p> <br><br>

        Com isto temos o fim da nossa primeira aula da dificuldade mestre em PHP! Na próxima aula veremos um pouco sobre o comando while, que funciona parecido com o if/else, mas possui outro propósito, nos vemos na próxima!

        <br><br><br><br>
        </p>

    </div>
    
    <a href="php_mestreTrue_pg1.php">
        <button type="button" class="nes-btn is-warning next-btn">PRÓXIMO</button>
    </a>

    <a href="mestre_home.php">
        <button type="button" class="nes-btn is-success back-btn">ANTERIOR</button>    
    </a>

    <!-- scripts bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>