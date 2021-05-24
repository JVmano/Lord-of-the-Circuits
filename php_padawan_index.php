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

        Para começar as aulas de PHP, é extremamente importante que você tenha um bom conhecimento em HTML, pois grande parte das aplicações e PHP são feitas em páginas web, se você não é familiarizado com HTML, recomendamos que dê uma olhada em nossas aulas sobre este tema e depois venha aprender PHP! <br><br>

        Assim como em HTML, PHP também necessita de um editor de texto para poder escrever os códigos, depois de baixar um editor de texto como Visual Studio Code ou Sublime Text, por exemplo, poderemos iniciar as aulas. <br><br>

        Cada linguagem de programação possui funções diferentes, sendo utilizadas para diferentes propósitos, PHP é uma linguagem muito utilizada para criar a parte de BackEnd dos sites web. Logicamente esta não é a única funcionalidade da linguagem, mas para simplificar, vamos começar por aí. <br><br>

        Para que o navegador reconheça esta linguagem, você precisará baixar um programa que possua os principais servidores de código aberto, no nosso caso, utilizaremos o XAMPP, mas existem diversos outros programas que fazem papel semelhante. Para baixar o XAMPP, basta pesquisar por ele no google e baixar pelo site oficial, https://www.apachefriends.org/pt_br/index.html.

        Após baixar e instalar, você poderá executar o programa. A tela inicial do XAMPP é essa (pode mudar um pouco de acordo com a versão). <br><br>

        A roupa do Homem Formiga coordena suas formigas para qualquer tipo de ação, igualmente o xampp interpreta os comandos do PHP. <br><br>

        <iframe src="https://giphy.com/embed/NJHGdgh1igI6s" width="480" height="284" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/marveledit-ant-man-mcuedit-NJHGdgh1igI6s">via GIPHY</a></p> <br><br>

        <img src="./src/images/content_mestre_php1.png" alt="content_mestre_php1" class="img-fluid" width="600"> <br><br>

        Para que sua página em PHP funcione, você precisa ativar o servidor Apache, para isto, basta clicar em Start. Ao clicar, a opção Admin poderá ser selecionada, ela é basicamente o seu localhost, onde todos os seus arquivos PHP serão salvos. <br><br>

        Mas e para criar uma página PHP? Bom, para isto, você precisará abrir o seu editor de texto e salvar com a extensão PHP (arquivo.php, por exemplo, deixando de usar o .html). Mas para funcionar corretamente, você deve salvar na pasta correta, procure pela pasta xampp dentro do seu computador, dentro dela, terá uma pasta chamada htdocs. É dentro desta pasta que você vai salvar todos os seus arquivos PHP. <br><br>

        Para abrir o arquivo, você pode clicar na opção Admin do seu XAMPP com o Apache iniciado, como feito anteriormente, você verá que o arquivo salvo na pasta htdocs estará em seu localhost. Porém o arquivo obviamente ainda estará em branco, pois nada foi alterado até o momento. <br><br>

        Esta foi a aula 1, onde instalamos o XAMPP e criamos nosso primeiro arquivo PHP, na próxima aula aprenderemos sobre variáveis e como declará-las.

        <br><br><br><br>
        </p>

    </div>
    
    <a href="php_padawan_pg1.php">
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