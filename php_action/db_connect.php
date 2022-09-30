<?php
    // Faz a conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "crud";

    $connect = mysqli_connect($servername, $username, $password, $db_name);
    if (mysqli_connect_error($connect)) {
        echo "Erro na conexão: ".mysqli_connect_error();
    }
?>