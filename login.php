<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <!-- Especificação de caractere -->
    <meta charset="utf-8">

    <!-- Disponibilização de responsividade -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <!-- Códigos de estilo principais -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./src/style.css" />
</head>
<body>
<?php
    require('db.php');
    session_start();
    // quando o formulario é enviado, é realizado uma checagem para verificar as informações
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redireciona o usuário para a tela principal
            header("Location: index.php");
        } else {
            echo "<div class='form box'>
                  <h3>Nome de usuário ou senha incorretos</h3><br/>
                  <p class='link'>Clique <a href='login.php'>aqui</a> e tente novamente.</p>
                  <iframe src='https://giphy.com/embed/enZ3A3ihJiUgw' width='480' height='223' frameBorder='0' class='giphy-embed' allowFullScreen></iframe><p><a href='https://giphy.com/gifs/shrug-shrugging-smile-enZ3A3ihJiUgw'></a></p>
                  </div>";
        }
    } else {
?>
    <form class="form box" method="post" name="login">
        <img src="./src/images/logo.png" alt="logo" width="65%">
        <input type="text" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit"/>
        <a href="registration.php">
            <input type="button" class="register-button" value="Criar uma conta">
        </a>
  </form>
<?php
    }
?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>