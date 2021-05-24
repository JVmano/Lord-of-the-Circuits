<?php
//incluir este arquivo em todas as páginas com o arquivo de db
    include("auth_session.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>HTML - Aula 1</title>
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

        Começaremos agora a dificuldade média do nosso curso de HTML, onde será ensinado como utilizar CSS e ainda outras funcionalidades para que você aprenda ainda mais a desenvolver páginas web. <br><br>

        CSS: CSS é chamado de linguagem Cascading Style Sheet e é usado para estilizar elementos escritos em uma linguagem de marcação como HTML. É com o CSS que você fará a parte de estilização do seu site. <br><br>      

        Como vimos anteriormente, podemos adicionar cores de fundo, mudar cor da fonte, adicionar imagem de fundo ao nosso site, centralizar conteúdo, etc. Mas existem formas muito práticas de se fazer isso e muito mais em seu site, utilizando o CSS, que não é tão difícil de se entender, vamos lá. <br><br>

        Você basicamente terá que declarar dentro da tag style a parte do site que você deseja estilizar e depois o código da estilização que deseja fazer, com a sintaxe correta, vamos a um exemplo, onde todo o conteúdo dentro da tag body ficará centralizado. <br><br>

        <img src="./src/images/content_jedi1.png" alt="content_jedi1" class="img-fluid" width="300"> <br><br>

        Perceba o que foi feito, tudo que estiver dentro de body, terá seu texto alinhado ao centro, sempre utilizando as chaves e o ponto e vírgula para encerrar o comando. Você pode ainda adicionar diversos outros comandos para serem inseridos dentro das tags body da sua página. <br><br>

        <img src="./src/images/content_jedi2.png" alt="content_jedi2" class="img-fluid" width="300"> <br><br>

        Estas são algumas propriedades para você configurar o background do seu site, vamos explicar cada um deles: <br><br>

        background-image: url("foto.jpg"); - Serve para definir a sua imagem de fundo, onde está escrito “foto.png” é onde deve ficar o nome e o formato da imagem que você escolheu, lembrando que ela deve estar salva na mesma pasta de seu arquivo para funcionar. <br><br>

        Não se deve deixar seu site sem skin, lembre-se, skin dá mais dano. <br><br>

        <iframe src="https://giphy.com/embed/cjGdkeC8Fgnf9I0wv8" width="480" height="270" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/leagueoflegends-cjGdkeC8Fgnf9I0wv8">via GIPHY</a></p> <br><br>

        background-repeat: no-repeat; - Algumas imagens são pequenas demais para a tela de um monitor, esta função fará com que a imagem não fique se repetindo para preencher o espaço inteiro da sua tela. <br><br>

        background-size: 100%; - Serve para fazer com que sua imagem de fundo ocupe 100% da tela, mas você pode ajustar para qualquer outra porcentagem de acordo com seu gosto. <br><br>

        background-attachment: fixed; - determina se aquela posição da imagem é fixa ou se irá rolar ao abaixar a tela com o scroll, neste caso foi escolhido fixed, ou seja, a imagem de fundo ficará fixa mesmo ao rolar o scroll do mouse (para rolar com o scroll, seria background-attachment: scroll;). <br><br>

        Estas são apenas algumas das funcionalidades de configuração de background no css, você pode fazer vários testes com várias imagens, mas recomendamos escolher imagens grandes, para não perder resolução ao ajustar ao tamanho dos monitores.

        É desta forma que o CSS funciona, você declara a parte que deseja estilizar e dentro das chaves {} você declara o que deseja fazer, seja mudar cor de fundo, mudar cor da fonte, centralizar texto, tipo de fonte, enfim, existem infinitas possibilidades com o CSS, algumas funções serão inclusive abordadas nas próximas aulas, como as tags div, para você criar divisões em seu site, caso queira modificar apenas alguma parte em específico dentro da tag body sem alterar o resto, dentre outras funções. <br><br>

        Com isto, encerramos nossa primeira aula do módulo Jedi do nosso curso.

        <br><br><br><br>
        </p>

    </div>
    
    <a href="jedi_pg1.php">
        <button type="button" class="nes-btn is-warning next-btn">PRÓXIMO</button>
    </a>

    <a href="jedi_home.php">
        <button type="button" class="nes-btn is-success back-btn">ANTERIOR</button>    
    </a>

    <!-- scripts bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>