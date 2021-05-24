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

        Assim como em HTML, o php possui uma estrutura básica onde ficará armazenado todo o seu conteúdo: <br><br>

        <img src="./src/images/content_mestre_php2.png" alt="content_mestre_php2" class="img-fluid" width="300"> <br><br>

        Dentro desta pequena estrutura, ficará todo o seu conteúdo programado em PHP! <br><br>

        Variáveis: <br><br>

        Para começar, vamos aprender como declarar uma variável na linguagem PHP. Variáveis são utilizadas o tempo todo em linguagem de programação e servem para armazenar um determinado valor, seja ele numérico ou não, podendo ter seu resultado exibido ou não para o usuário. As variáveis podem possuir qualquer nome, você é quem decide como as suas variáveis irão se chamar, apesar de existirem restrições quanto a caracteres especiais na hora de declarar os nomes. <br><br>

        Sempre imagine uma variável como algo que sempre pode mudar para qualquer outro valor ou forma, assim como a Mística que pode mudar de aparência! <br><br>

        <iframe src="https://giphy.com/embed/xT1XGEo4lt2rSEy5eo" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/xmenmovies-x-men-apocalypse-mystique-xT1XGEo4lt2rSEy5eo">via GIPHY</a></p> <br><br>

        No caso de PHP, as variáveis sempre estarão com um “$” antes de seu nome, assim: <br><br>

        <img src="./src/images/content_mestre_php3.png" alt="content_mestre_php3" class="img-fluid" width="300"> <br><br>

        Neste caso, criamos uma variável chamada numero, com o $ na frente, que faz parte da sintaxe do PHP. Esta variável $numero recebeu o valor 0, mas poderia ter recebido qualquer valor. <br><br>

        As variáveis podem armazenar valores inteiros, reais, caracteres e lógicos. Lembrando sempre de utilizar o ponto e vírgula após cada comando ser escrito, assim como em CSS, lembra? Neste caso a variável $numero pode armazenar um número qualquer, lembrando que o nome da variável foi escrito sem acento, pois não podemos utilizar caracteres especiais para declarar variáveis em PHP. <br><br>

        Tipos de variáveis: <br><br>

        Como já dito acima, existem quatro tipos de variáveis em linguagem de programação (inteiro, real, caractere e lógico). <br><br>

        Segue abaixo os tipos de dados que cada uma armazena: <br><br>

        Inteiro: Armazena valores inteiros. Ex: 1, 2, 3... <br><br>

        Real: Armazena números reais. Ex: 1.2, -1, 10... <br><br>

        Caractere: Armazena os caracteres do teclado. Ex: “João”, “Marcos”. <br><br>

        Lógico: Armazena dois valores lógicos, sendo eles verdadeiro e falso (true e false). <br><br>

        Em algumas linguagens de programação você precisa declarar o tipo da variável quer está criando, em PHP isto é feito automaticamente, assim que você atribui um valor para a variável, por exemplo: <br><br>

        <img src="./src/images/content_mestre_php4.png" alt="content_mestre_php4" class="img-fluid" width="300"> <br><br>

        Neste caso, a variável $nome recebeu ‘João’ (variáveis do tipo caractere precisam estar entre aspas, assim como na imagem). Por este motivo, o PHP já entende automaticamente que se trata de uma variável do tipo caractere. <br><br>

        Por último, vamos mostrar como exibir esta variável que você criou na tela do seu navegador, utilizando o comando “echo”. <br><br>

        O comando “echo” serve para imprimir na tela o que for escrito a seguir, desta forma: <br><br>

        <img src="./src/images/content_mestre_php5.png" alt="content_mestre_php5" class="img-fluid" width="300"> <br><br>

        A lógica acima é a seguinte: Se a variável $numero recebeu o valor 300 e você utilizou o comando “echo” para imprimir esta variável em sua tela, o valor 300 que a variável recebeu será exibido. <br><br>

        Se você abrir o arquivo pelo localhost, como vimos na aula passada, você verá que o número 300 aparecerá na tela do seu navegador. Você pode fazer vários testes, mudar o número que a variável recebe, fazer com que ela receba um valor real ou caractere, o segredo é treinar! <br><br>

        Concatenação: <br><br>

        Em programação, Concatenar é unir duas ou mais variáveis por meio de uma linguagem em uma única variável. Vamos a um exemplo utilizando o comando “echo”: <br><br>

        <img src="./src/images/content_mestre_php6.png" alt="content_mestre_php6" class="img-fluid" width="300"> <br><br>

        Perceba que criamos três variáveis, uma para receber o nome, outra para receber o sobrenome e uma última para armazenar os valores das duas anteriores, que foram separadas por um ponto “.”. Logo abaixo temos o comando “echo”, para mostrarmos a terceira variável com o conteúdo das outras duas na tela. <br><br>

        Aqui temos outro exemplo: <br><br>

        <img src="./src/images/content_mestre_php7.png" alt="content_mestre_php7" class="img-fluid" width="300"> <br><br>

        Neste caso juntamos as variáveis com outras palavras para serem exibidas na tela, separados pelo ponto e aspas duplas. A mensagem deve ser: Lucas tem 20 anos! <br><br>

        Você pode testar diversas frases desta forma, com todos os tipos de variáveis e treinar bastante esta técnica de concatenação em PHP! <br><br>

        Com isto, terminamos nossa dificuldade Padawan de PHP, vamos agora para a dificuldade Jedi, onde aprenderemos o conceito de algoritmo e muito mais! <br><br>

        <br><br><br><br>
        </p>

    </div>
    
    <a href="fim.php">
        <button type="button" class="nes-btn is-warning next-btn">PRÓXIMO</button>
    </a>

    <a href="php_padawan_index.php">
        <button type="button" class="nes-btn is-success back-btn">ANTERIOR</button>    
    </a>

    <!-- scripts bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>