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

        Nesta aula vamos aprender como utilizar os dados fornecidos em um formulário para exibir uma informação na tela, é mais fácil do que parece, desde que se tenha o conhecimento necessário em HTML. <br><br>

        Para entender a lógica, o conteúdo que for digitado no campo do formulário será armazenado em uma variável PHP, para depois ser exibido na tela com o comando “echo”: <br><br>

        <img src="./src/images/content_jedi_php2.png" alt="content_jedi_php2" class="img-fluid" width="600"> <br><br>

        Veja que foram criados dois inputs no formulário, um para receber o conteúdo e o outro para enviar, o campo name=”” é muito importante, pois ele deve ser declarado novamente lá embaixo, para que o PHP saiba qual conteúdo ele deve armazenar na variável, assim como está marcado na imagem acima. <br><br>

        Entendendo o $_POST[“”]; <br><br>

        É basicamente o método que será utilizado para armazenar a variável, assim que o usuário escrever o conteúdo e enviar a informação, aquilo que ele escreveu no campo (que nesse caso é o input nomeado number) será automaticamente armazenado na variável $numero, pois é ela quem recebera pelo método post. <br><br>

        Imagine o echo como as Corujas do Harry Potter, elas pegam a informação com o bruxo e enviam para o destinatário, que no caso é o usuário. <br><br>

        <iframe src="https://giphy.com/embed/11dM7nEQzT1Idy" width="480" height="262" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/harrypotter-hedwig-11dM7nEQzT1Idy">via GIPHY</a></p> <br><br>

        Por último, a variável $numero será exibida na tela com o comando “echo” e será o mesmo número que o usuário digitou. <br><br>

        error_reporting(0): Não é necessário para o funcionamento do código, é apenas uma função do PHP para não reportar erros antes do usuário digitar um valor, enquanto os campos ainda estiverem em branco, você pode utilizá-la ou não. <br><br>

        Agora é a sua vez de testar tudo isso, você pode pedir para duas variáveis armazenarem dois campos diferentes e depois criar uma terceira variável que some ou subtraia o valor das duas primeiras, assim por diante, como já dito, são milhares de possibilidades. Esta é uma função bem legal do PHP, desta forma você começa a entender como as informações de usuários podem ser salvas e utilizadas depois, neste caso, utilizamos o comando “echo” apenas para mostrar o valor na tela, mas poderíamos ter feito muitas coisas! <br><br>

        Com isto, temos o fim da nossa segunda aula do nível Jedi, lembre-se de sempre treinar muito o que foi passado para fixar o conteúdo, a próxima aula será sobre a estrutura condicional if/else e será a última aula da nossa dificuldade intermediária em PHP!

        <br><br><br><br>
        </p>

    </div>
    
    <a href="php_jedi_pg2.php">
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