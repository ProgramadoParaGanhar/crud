<?php
    // Apenas para modo estruturado:
    require_once 'db_connect.php'; // Como se estivesse importando o db_connect, para podermos trabalhar com as variáveis de conexão

    if (isset($_POST['btn-cadastrar'])) {
        $nome = mysqli_escape_string($connect,$_POST['nome']);
        $descricao = mysqli_escape_string($connect,$_POST['descricao']);
        $sql = "INSERT INTO produtos(nome,descricao) 
                VALUES ('$nome','$descricao')"; 
            // Vamos como inserir as informações dentro do banco de dados na mão, aqui, nosso programa vai inserir elas para nós
        if (mysqli_query($connect,$sql)) {
            echo "Cadastrado com sucesso!";
        }else{
            echo "Erro ao cadastrar";
        }
    }
?>