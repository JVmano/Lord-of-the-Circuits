<?php
//incluir este arquivo em todas as páginas com o arquivo de db
    include("auth_session.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP - Aula 2</title>
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

        Nesta aula veremos como funciona a estrutura de repetição while, como utilizá-la e sua sintaxe. <br><br>

        O while é a estrutura de repetição mais simples do PHP. Com ele informamos que um bloco de código deve ser repetido enquanto a condição informada dentro dos parênteses for verdadeira. Vamos ao exemplo mais básico: <br><br>

        <img src="./src/images/content_mestreTrue_php1.png" alt="content_mestreTrue_php1" class="img-fluid" width="300"> <br><br>

        Explicando o código: Basicamente uma variável chamada $i foi criada e recebeu o valor 1. Logo depois, a estrutura while (enquanto) é aberta e a condição é passada dentro dos parênteses (se a variável $i for menor e igual a 10) e caso ela continue sendo verdadeira, o comando continuará a ser executado várias e várias vezes, até que a condição dentro dos parênteses se torne falsa. <br><br>

        Neste caso, o programa vai printar na tela (através do echo) o valor da variável, já que ela é menor do que 10. Temos ainda uma função muito importante já mencionada na lista de sinais de do PHP, a de incremento (++). Isto significa que toda vez que a variável for printada na tela, ela receberá um incremento em seu valor, ou seja, ela aparecerá na tela como 1, receberá um incremento e aparecerá ao lado com 2 e assim por diante, até a condição se tornar falsa, no caso a variável receber um incremento e se tornar maior do que 10. <br><br>

        Esta é uma coisa importante que precisamos pensar ao utilizarmos o while, pois se não estipularmos um limite para ele, a repetição se tornará eterna, indo “ao infinito e além”. Por este motivo adicionamos um incremento, senão o valor da variável $i seria sempre 1 e o número 1 se repetiria em sua tela milhares de vezes, nunca encontrando um fim para o comando. <br><br>

        Se você não tomar cuidado, a repetição do comando se tornará eterna, assim como o Genjutsu do Itachi... ["Pobre" Kabuto...] <br><br>

        <iframe src="https://giphy.com/embed/SUlfJOJLzrlcc" width="480" height="360" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/itachi-SUlfJOJLzrlcc">via GIPHY</a></p> <br><br>

        Do/While: Quase a mesma coisa que o while, mas a condição está no final, portando é garantido que o bloco seja executado ao menos uma vez. Exemplo: <br><br>

        <img src="./src/images/content_mestreTrue_php2.png" alt="content_mestreTrue_php2" class="img-fluid" width="300"> <br><br>

        Você pode utilizar este comando quando quer repetir o seu comando pelo menos uma vez, mas a finalidade é praticamente a mesma do while. <br><br>

        Nesta aula, você viu como funciona a estrutura de repetição while e do/while, a sua lógica em si não é difícil, mas requer um pouco de estudo. <br><br>

        Estamos na reta final do nosso curso em PHP, nossa última aula vai falar sobre o comando switch case, que pode ser utilizado para diversas finalidades dentro da programação, mas esta aula vai ficando por aqui, até mais! <br><br>

        <br><br><br><br>
        </p>

    </div>
    
    <a href="php_mestreTrue_pg2.php">
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