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

        Para poder programar em HTML ou em alguma linguagem de programação, é necessário antes a instalação de um editor de texto na internet, para que possamos escrever as linhas de código, recomenda-se editores como o Sublime text, Visual Studio Code, Notepad++, etc. Após a instalação do editor de texto de sua preferência, podemos dar início as aulas de HTML.
        <br><br>
        Para começar a escrever os códigos, é muito importante você salvar o arquivo com um nome, sempre seguido de .html, por exemplo arquivo.html, para que o seu computador possa saber qual o formato do arquivo na hora de executà-lo.
        Você pode abrir este arquivo tanto com o navegador, para visualizá-lo, como com o seu editor de texto, para poder editá-lo.
        <br><br>
        Html significa Hypertext Markup Language (linguagem de marcação de Hipertexto) e serve basicamente para desenvolver sites web. Lembrando que HTML não é uma linguagem de programação, mas sim uma linguagem de interpretação, pois não possui uma lógica, apenas comandos para serem interpretados.
        <br><br>
        Toda página HTML possui uma estrutura básica padrão, que é formada basicamente por tags, que servem para diferentes propósitos. Toda tag precisa ser iniciada e depois fechada, dentro de uma tag, podemos ter outra tag, assim por diante, toda tag deve ser encerrada com uma barra (/) antes de seu nome, assim:

        <!-- HTML generated using hilite.me -->
        <div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;">
            <pre style="margin: 0; line-height: 125%">
                <span style="color: #1e90ff; font-weight: bold">&lt;html&gt;&lt;/html&gt;
                </span>
            </pre>
        </div>
        <br><br>

        A estrutura padrão do HTML é formada por um conjunto de tags, cada uma tem sua função dentro do site, como veremos a seguir: <br>

        <img src="./src/images/content_padawan1.png" alt="content_padawan1" class="img-fluid" width="300"><br><br>

        Tente imaginar por exemplo, em uma ficha de Dungeons & Dragons, para começar a escrever sobre seu personagem, você precisará de uma base que é esta ficha, que nada mais é que um modelo base de início, base está que no html está definida com essas tags! <br><br>
        
        Estas tags são as principais em qualquer página HTML, perceba que dentro das tags <html></html> temos outras tags, como a tag <head> e a tag <body> vamos falar um pouco sobre todas elas:
        <br><br>
            
        &lt;!DOCTYPE html&gt; : É uma declaração para informar ao navegador qual é a versão do HTML utilizada no arquivo. 
        <br><br>
        
        &lt;html&gt;&lt;/html&gt;: São dentro dessas tags que você irá colocar todo o conteúdo de uma página HTML, seja ele visível ao usuário ou não. <br>
        &lt;head&gt;&lt;/head&gt;:Aqui ficará tudo aquilo que não aparecerá ao usuário dentro da página html e também a tag <br>
        &lt;title&gt;&lt;/title&gt;: que serve para exibir um título na página, por exemplo:<br>
        <br><br>
        &lt;title&gt;AULA 1&lt;/title&gt; O resultado será esse:
        <br>

        <img src="./src/images/title.png" alt="title_logo" class="img-fluid">
        <br><br>

        Perceba que o título que você digitou nas tags <title></title> foi exibido na parte de cima da página. <br><br>

        &lt;body&gt;&lt;/body&gt;: É o corpo da sua página, nesta tag ficará todo o conteúdo visível do site para o usuário, como os textos e as imagens, veja o exemplo: <br><br>

        &lt;body&gt; <br>
            Olá mundo! <br>
        &lt;/body&gt;
        <br><br>

        Ficará desta forma na página: <br>

        <img src="./src/images/content_padawan2.png" alt="content_padawan2" class="img-fluid" width="600"> <br><br>

        Perceba que esta é a mesma mensagem digitada dentro das tags &lt;body&gt;&lt;/body&gt;, funciona com qualquer mensagem, pode testar! <br><br>

        Esta é a aula 1, sobre as tags básicas de html e suas funções, na próxima aula veremos uma tag muito importante para o bom funcionamento do seu site e algumas tags interessantes de se conhecer quando se está começando a desenvolver em HTML.

        <br><br><br><br>
        </p>

    </div>
    <a href="html_pg2.php">
        <button type="button" class="nes-btn is-warning next-btn">PRÓXIMO</button>
    </a>

    <a href="padawan_home.php">
        <button type="button" class="nes-btn is-success back-btn">ANTERIOR</button>    
    </a>

    <!-- scripts bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>