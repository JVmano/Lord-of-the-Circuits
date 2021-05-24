<?php
    $con = mysqli_connect("localhost","root","8814","LoginSystem");
    // Checa a conexão
    if (mysqli_connect_errno()){
        echo "Falha ao conectar com o MySQL: " . mysqli_connect_error();
    }
?>