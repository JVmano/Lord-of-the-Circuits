<?php
//incluir este arquivo em todas as páginas com o arquivo de db
    include("auth_session.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>HTML - Aula 2</title>
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

        Nesta aula veremos o conceito das tags divs e como criar classes nelas para utilizar dentro do CSS depois, modificando apenas uma parte em específico dentro do corpo de sua página. <br><br>

        Tag &lt;div&gt;&lt;/div&gt; : Serve para separar um conteúdo a fim de estilizá-lo separadamente dos outros conteúdos da página, você declara a uma classe e a utiliza no CSS depois, assim: <br><br>

        <img src="./src/images/content_jedi3.png" alt="content_padawan3" class="img-fluid" width="400"> <br><br>

        Perceba que dentro de body tem uma div com uma classe chamada exemplo, dentro possui um pequeno conteúdo de texto do tamanho h2. <br><br>

        Para modificar apenas aquilo que está dentro da div, você precisa declarar a classe dentro das tags style do CSS, ao invés de body, como feito anteriormente. Veja o exemplo: <br><br>

        <img src="./src/images/content_jedi4.png" alt="content_padawan4" class="img-fluid" width="400"> <br><br>

        Veja que a classe exemplo foi declarara com um ponto na frente (.exemplo) e dentro dela as estilizações de borda foram aplicadas, ou seja, todo o conteúdo desta div ficará com a borda da forma como foi informado no CSS. <br><br>

        O herói usa de uma mascára para proteger sua identidade, porém é inegável que eles ficam mais 'estilosos' [estilo? css? estilização? não? tá bom...] assim como um html com CSS! <br><br>

        <iframe src="https://giphy.com/embed/hW4pOhW4dK7JI7hFno" width="480" height="200" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/SpiderVerseMovie-spiderman-spiderverse-spider-verse-hW4pOhW4dK7JI7hFno">via GIPHY</a></p> <br><br>

        Todo o conteúdo que estiver fora desta div e não utilizar esta classe, não terá as alterações aplicadas: <br><br>

        <img src="./src/images/content_jedi5.png" alt="content_padawan5" class="img-fluid" width="600"> <br><br>

        Veja o exemplo no navegador: <br><br>

        <img src="./src/images/content_jedi6.png" alt="content_padawan6" class="img-fluid" width="600"> <br><br>

        Lembrando que essas alterações foram feitas nas bordas, mas poderiam ser feitas quaisquer outras alterações, na cor ou no tamanho da fonte, na cor de fundo da div ou até outras alterações na borda, por exemplo, como já dito, existem muitas possibilidades com o CSS. <br><br>

        Esta foi a segunda aula da dificuldade Jedi em HTML, na próxima aula aprenderemos a criar um arquivo separado para fazer a estilização CSS, ao invés de usar a tag style, pois existe uma boa vantagem em se fazer isso, como veremos na próxima aula. <br><br>

        <br><br><br><br>
        </p>

    </div>
    
    <a href="jedi_pg2.php">
        <button type="button" class="nes-btn is-warning next-btn">PRÓXIMO</button>
    </a>

    <a href="html_jedi_index.php">
        <button type="button" class="nes-btn is-success back-btn">ANTERIOR</button>    
    </a>

    <!-- scripts bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>