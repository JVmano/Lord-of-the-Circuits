<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
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
    <!-- Nav bar -->
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="index.php">
            <img src="./src/images/logo.png" alt="logo" width="9%">
        </a>
    </nav>
    <!-- Nav bar./ -->
<?php
    require('db.php');
    // Quando o formulario é enviado, verifica as informações digitadas e depois insere.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form box'>
                  <h3>Registro realizado com sucesso!</h3><br/>
                  <p class='link'>Clique aqui para<a href='login.php'>entrar</a></p>
                  </div>";
        } else {
            echo "<div class='form box'>
                  <h3>Campos obrigatórios requeridos</h3><br/>
                  <p class='link'>Clique aqui para se <a href='registration.php'>cadastrar</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form box" action="" method="post">
        <h1 class="login-title">Cadastro de conta</h1>
        <input type="text" name="username" placeholder="Nome de usuário" required />
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Senha">
        <input type="submit" name="submit" value="Criar uma conta">
        <a href="login.php">
            <input type="button" value="Entrar" class="register-button">
        </a>
    </form>
<?php
    }
?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>