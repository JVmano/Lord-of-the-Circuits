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

        Neste nível, você verá algumas funcionalidades que temos em HTML, como criação de formulários e layout responsivo, por exemplo. Não é nada de outro mundo, mas exige um pouco de conhecimento prévio em HTML para que você possa entender bem o que será passado nessas aulas, caso não tenha passado pelas outras dificuldades do curso e não esteja entendendo, recomendamos dar uma olhada e voltar aqui mais tarde. O maior segredo para entender e evoluir em HTML é treinar, pense em um tema de seu gosto e crie um site, não tem a necessidade de publicar, crie apenas para testar, desta forma você vai evoluir muito mais rápido. <br><br>

        Formulário em HTML: Para criá-lo, você vai precisar utilizar a tag form, com a seguinte configuração: <br><br>

        [Cadastrando pessoas em algum lugar?] <br><br>
        <iframe src="https://giphy.com/embed/rxjw6cazKb4pW" width="480" height="260" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/funimation-smile-rxjw6cazKb4pW">via GIPHY</a></p> <br><br>


        <img src="./src/images/content_mestre1.png" alt="content_mestre1" class="img-fluid" width="600"> <br><br>

        Tudo que ficar dentro desta tag form, será parte de seu formulário, vamos preenchê-lo com os campos que cadastros e formulários geralmente possuem: <br><br>

        <img src="./src/images/content_mestre2.png" alt="content_mestre2" class="img-fluid" width="600"> <br><br>

        As tags input servem para criar um campo, você pode criar campos de diversos tipos, como text, password e submit, que seria o botão para enviar as informações. O campo password protegerá a senha do usuário quando ele digitá-la e o campo texto serve para textos normais como nome e e-mail. O resultado será semelhante a esse: <br><br>

        <img src="./src/images/content_mestre3.png" alt="content_mestre3" class="img-fluid" width="600"> <br><br>

        *Não recomendamos o uso da tag br para dar espaços entre linhas, apenas para criar uma quebra de linha, pois existem formas de fazer isso pelo CSS sem poluir muito seu arquivo HTML, mas neste caso utilizamos apenas para simplificar. <br><br>

        Desta forma é criado um formulário em HTML, existem ainda outras funções que você pode utilizar em criações de formulários: <br><br>

        &lt;input type="checkbox" name="caixa"&gt;opção 1 : Cria uma caixa para o usuário marcar as opções que ele desejar, coloque o texto que desejar no lugar de “opção 1” <br><br>

        &lt;input type="radio" name="caixa"&gt;opção 1: Esta tag cria uma caixa para o usuário escolher apenas uma das opções disponíveis, mas para isso, a parte name=”” deve ser igual para todas as input do tipo radio. <br><br>

        Existem ainda muitos outros input type com as mais diversas funções, porém estas são as mais utilizadas. Com isto, terminamos a aula 1 da nossa dificuldade mestre do curso HTML, nos vemos na próxima!

        <br><br><br><br>
        </p>

    </div>
    
    <a href="mestre_pg1.php">
        <button type="button" class="nes-btn is-warning next-btn">PRÓXIMO</button>
    </a>

    <a href="index.php">
        <button type="button" class="nes-btn is-success back-btn">ANTERIOR</button>    
    </a>

    <!-- scripts bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>