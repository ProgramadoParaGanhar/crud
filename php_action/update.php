<?php 
    require_once 'db_connect.php';
    
    if (isset($_POST['btn-atualizar'])) {
        $id         =  $_POST ['id'];
        $nome       =  $_POST ['nome'];
        $sobrenome  =  $_POST ['sobrenome'];
        $email      =  $_POST ['email'];
        $idade      =  $_POST ['idade'];

        $sql = "UPDATE clientes 

        SET nome ='$nome', sobrenome = '$sobrenome', email = '$email', idade = ' $idade' 
        WHERE id ='$id'";

        if(mysqli_query($connect, $sql)){
            echo "Atualizado com sucesso!";

        }else{
            echo "Erro ao atualizar";
        }

    }

?>