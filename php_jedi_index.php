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

        Começaremos agora nossa dificuldade média do curso PHP, o que será passado a seguir não é nada de outro mundo, mas requer muita atenção, prática e muita pesquisa, dito isso, comecemos! <br><br>

        Algoritmo: Em ciência da computação, um algoritmo é uma sequência finita de ações executáveis que visam obter uma solução para um determinado tipo de problema. Em resumo, uma sequência de passos que visam chegar a um resultado lógico final. Pensando no seu dia a dia, quase tudo é um algoritmo, uma receita de bolo, por exemplo, é uma sequência de passos que visa um objetivo, que é terminar o bolo. Em programação, um algoritmo pode calcular dois números, exibir certo valor na tela, fazer uma ação enquanto algo estiver acontecendo, existem muitas possibilidades. <br><br>

        Sinais de cálculos e comparação em PHP: <br><br>

        +       Adição <br><br>
        - subtração <br><br> 
        . concatenação (como já vimos anteriormente) <br><br>
        - negativo <br><br>
        ! negação <br><br>
        ++ incremento <br><br>
        – decremento <br><br>
        * multiplicação <br><br>
        / divisão <br><br>
        % resto da divisão <br><br>
        > Maior que <br><br>
        < menor que <br><br>
        >= maior ou igual <br><br>
        <= menor ou igual <br><br>

        Alguns são mais utilizados, como os das 4 operações matemáticas básicas e os de maior e menor, por exemplo, alguns outros são mais situacionais. <br><br>

        Vamos agora a um exemplo de algoritmo que tem como objetivo final exibir a soma de dois números na tela, utilizando o operador lógico de soma (+): <br><br>

        <img src="./src/images/content_jedi_php1.png" alt="content_jedi_php1" class="img-fluid" width="600"> <br><br>

        Perceba que três variáveis foram criadas, duas para receber valores e uma terceira para receber a soma das anteriores, utilizando o sinal de adição (+), abaixo apenas utilizamos o comando “echo” para mostrar na tela uma mensagem informando que a soma de $n1 e $n2 seria igual a $n3. <br><br>

        No PHP você pode juntar múltiplas variáveis em uma única diferente, tal como o Ermac do Mortal Kombat é uma mescla de várias almas em um corpo. <br><br>

        <iframe src="https://giphy.com/embed/NQQoLnrWExPbi" width="480" height="270" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/deviantart-mk-ermac-NQQoLnrWExPbi">via GIPHY</a></p> <br><br>

        Agora você pode criar vários algoritmos para treinar, tente somar, subtrair, dividir ou multiplicar utilizando os sinais do PHP e escrever mensagens na tela com os resultados, o segredo é treinar “mil milhões” de vezes! <br><br>

        Outros conectores lógicos serão utilizados ao decorrer do curso, veremos mais alguns deles mais pra frente! <br><br>

        Desta forma encerramos a primeira aula de PHP, para continuar avançando nas aulas, recomendamos novamente que treine muito e explore as possibilidades que você tem até o momento, em determinado momento vai ficar tão prático, que você vai avançar para as próximas aulas sem nenhuma dificuldade, até a próxima! <br><br>

        <br><br><br><br>
        </p>

    </div>
    
    <a href="php_jedi_pg1.php">
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