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

        Nesta aula vamos conhecer mais algumas tags importantes para uma página em html e algumas tags para você começar a treinar! <br><br>

        Tag &lt;meta charset=”utf-8”&gt;: Esta tag é uma das poucas tags que não precisa ser fechada e será colocada dentro das tags &lt;head&gt;&lt;/head&gt;, pois não será uma informação exibida para o usuário, serve apenas para seu navegador entender o padrão de caracteres que deverá ser utilizado em sua página, sem esta tag, seu navegador pode não reconhecer alguns caracteres especiais ou acentos. <br><br>

        Basicamente a ideia do meta charset seria um tradutor, tal como a Ahura do Star trek, ela traduz outras linguas para a tripulação, tal como a tag meta charset traduz caracteres especiais para que possam ser lidos pelo usuário. <br><br>

        Veja o exemplo a seguir: <br>

        <img src="./src/images/content_padawan3.png" alt="content_padawan3" class="img-fluid" width="300"> <br><br>

        Tags interessantes para testar: <br><br>

        &lt;img src=””&gt; : esta tag irá exibir uma imagem de sua escolha na página, o nome e o formato devem ser informados dentro das aspas e devem ser exatamente igual ao nome que você deu ao arquivo da imagem. Lembrando também que a imagem que será utilizada deve estar na mesma pasta do seu arquivo, ou não funcionará. <br><br>

        Exemplo: <br><br>

        <img src="./src/images/content_padawan4.png" alt="content_padawan4" class="img-fluid" width="300"> <br><br>

        O resultado será a imagem que você escolheu sendo exibida na página html: <br><br>

        Perceba que a imagem foi exibida, porém ficou muito desajustada em relação ao tamanho da página, isto ocorre pois o tamanho original da imagem é muito grande, mas existe uma forma de ajustar altura e largura em pixels dentro da tag img, assim: <br><br>

        <img src="./src/images/content_padawan5.png" alt="content_padawan5" class="img-fluid" width="600"> <br><br>

        Apos salvar as modificações com as teclas de atalho ctrl+s e atualizar a página de seu navegador, você verá que o tamanho da foto foi alterado. Você pode testar diversas alturas e tamanhos, basta modificar os números dentro de width e height (largura e altura). <br><br>

        <img src="./src/images/content_padawan6.png" alt="content_padawan6" class="img-fluid" width="600"> <br><br>

        Outras tags que podem ser utilizadas dentro da tag &lt;body&gt;&lt;/body&gt; <br><br>

        Tag &lt;center&gt;&lt;/center&gt;: Essas tags servem para centralizar um conteúdo de um site, como uma foto ou texto, por exemplo: <br><br>

        &lt;center&gt;&lt;img src=”foto.jpg”&gt;&lt;/center&gt; <br><br>

        Isto fará com que a foto que você cercou com as tags center fique centralizada. <br>
        Pode também ser utilizada em textos: <br><br>

        &lt;center&gt;Olá mundo!&lt;/center&gt; <br><br>

        Tag &lt;i&gt;&lt;/i&gt;: serve para deixar qualquer texto dentro em itálico. <br><br>

        Tag &lt;b&gt;&lt;/b&gt;:serve para deixar qualquer texto dentro em negrito. <br><br>

        Tags &lt;h1&gt;&lt;/h1&gt;, &lt;h2&gt;&lt;/h2&gt;...: essas tags vão até h6 e é uma das formas de definir o tamanho da fonte dos textos, sendo que h1 é a maior e vai diminuindo até chegar em h6, a menor fonte, por exemplo: <br><br>

        &lt;h1&gt; este texto ficará maior &lt;/h1&gt; <br><br>
        &lt;h3&gt; este texto ficará um pouco menor que h1 e h2 &lt;/h3&gt; &lt; <br><br>
        &lt;h5&gt; este texto ficará um pouco menor que h1, h2, h3 e h4 &lt;/h5&gt; <br><br>
        &lt;h6&gt; este texto é o menor que todos os outros &lt;/h6&gt; &lt; <br><br>

        Definir imagem ou cor de fundo do site: <br><br>

        Uma das formas de mudar o fundo do seu site é pela tag body, assim: <br><br>

        <img src="./src/images/content_padawan7.png" alt="content_padawan7" class="img-fluid" width="300"> <br><br>

        Você verá que o fundo do site vai trocar para a imagem que você escolheu <br><br>

        Para alterar a cor de fundo o processo é parecido, porém não utilizaremos background e sim bgcolor, seguido da cor desejada escrita em inglês assim: <br><br>

        <img src="./src/images/content_padawan8.png" alt="content_padawan8" class="img-fluid" width="300"> <br><br>

        Neste caso a cor de fundo será azul (blue), existe também uma tabela de cores em html com vários códigos de cores, basta pesquisar por “tabela hexadecimal de cores” no google e escolher um código correspondente a uma cor, pois não são todas as cores que funcionam se escritas em inglês. <br>
        Depois disso, basta escrever o código no lugar do nome da cor, por exemplo: <br><br>

        &lt;body bgcolor=”#00BFFF”&gt;

        Existem uma infinidade de tags HTML que podem ser utilizadas para os mais diversos propósitos, algumas delas vão ser inclusive abordadas mais pra frente nas aulas, então com isso, temos o final da aula 2.

        <br><br><br><br>
        </p>

    </div>
    <a href="html_pg3.php">
        <button type="button" class="nes-btn is-warning next-btn">PRÓXIMO</button>
    </a>

    <a href="html_index.php">
        <button type="button" class="nes-btn is-success back-btn">ANTERIOR</button>    
    </a>

    <!-- scripts bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>