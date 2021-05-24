<?php
//incluir este arquivo em todas as páginas com o arquivo de db
    include("auth_session.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>HTML - Aula 3</title>
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

        Nesta aula aprenderemos a criar um arquivo externo CSS para criar a estilização de seu site. Mas enfim, qual a vantagem de se criar um arquivo externo sendo que podemos fazer tudo dentro das tags style na própria página em HTML? <br><br>
        Quando temos poucas alterações e classes no CSS do site, podemos encontrar tudo com muita facilidade, mas e quando o site possui centenas de linhas de códigos e muito conteúdo? É nesta hora que você pode começar a se perder dentro do próprio site, daí vem a necessidade de se criar um arquivo externo que ajuda a organizar melhor seu trabalho. <br><br>

        Este arquivo deve ter seu nome seguido de .css e ser salvo na mesma pasta de seu arquivo html. O arquivo pode se chamar estilo.css, por exemplo. <br><br>

        <img src="./src/images/content_jedi7.png" alt="content_padawan7" class="img-fluid" width="600"> <br><br>

        Agora, todo o conteúdo que ficaria dentro das tags style, ficarão neste arquivo e você pode modificá-lo separadamente de sua página HTML. <br><br>

        <img src="./src/images/content_jedi8.png" alt="content_padawan8" class="img-fluid" width="600"> <br><br>

        Este é o mesmo conteúdo de estilização de bordas utilizado na aula passada, porém agora está todo dentro estilo.css, nosso novo arquivo criado. Repare que não utilizamos as tags style aqui, pois já declaramos que o arquivo é CSS na hora de nomeá-lo. <br><br>

        Por último e muito importante, temos que fazer a conexão deste arquivo no seu arquivo HTML, não se preocupe, é muito simples: <br><br>


        <img src="./src/images/content_jedi9.png" alt="content_padawan6" class="img-fluid" width="600"> <br><br>

        Esta tag é responsável por puxar tudo aquilo que está no arquivo CSS e trazer para a sua página HTML, lembrando que dentro de href=””, você colocará o nome que você escolheu para o arquivo, neste caso, estilo.css. <br><br>

        Depois da conexão, o html sempre puxará o estilo do css para a página, tal como um bruxo puxa as almas dos vivos e mortos como sua fonte de poder [muahaha]. <br><br>

        <iframe src="https://giphy.com/embed/psmk2jPQD9SehTG3bE" width="480" height="203" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/warcraft-world-of-warcraft-psmk2jPQD9SehTG3bE">via GIPHY</a></p> <br><br>

        Desta forma você consegue trabalhar com arquivos separados e organizar muito melhor o seu código, diminuindo a possibilidade de você se perder em meio a tantas linhas de códigos. <br><br>

        Encerramos aqui a dificuldade Jedi do nosso curso HTML, esta parte foi toda focada em CSS, pois ela é muito importante dentro de uma página web, sem ela, sua página fica pouco agradável aos olhos do usuário. Lembrando que a sua criatividade pode levar muito longe na hora de estilizar um site, existem muitos conteúdos sobre CSS que você pode utilizar em seus sites e deixá-los muito bem organizados, o segredo é ser criativo!

        <br><br><br><br>
        </p>

    </div>
    
    <a href="jedi_home.php">
        <button type="button" class="nes-btn is-warning next-btn">PRÓXIMO</button>
    </a>

    <a href="jedi_pg1.php">
        <button type="button" class="nes-btn is-success back-btn">ANTERIOR</button>    
    </a>

    <!-- scripts bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>