<?php
    require_once 'php_action/db_connect.php';
    $sql = "SELECT * FROM clientes";
    $resultado = mysqli_query($connect,$sql);
?>
    
    <form action="adicionar.php" method="POST">
        <table border="1">
            <thead>
                <th>Nome:</th>
                <th>Sobrenome:</th>
                <th>Email:</th>
                <th>Idade:</th>
                <th>-</th>
                <th>-</th>
            </thead>
    <?php while($dados = mysqli_fetch_array($resultado)){//inicio do while
    //fim do php  ?>
            <tbody>
                <tr>
                    <td><?php echo $dados['nome']."<br>";?></td>
                    <td><?php echo $dados['sobrenome']."<br>";?></td>
                    <td><?php echo $dados['email']."<br>";?></td>
                    <td><?php echo $dados['idade']."<br>";?></td>
                    <td><a href="editar.php?id=<?php echo $dados['id']; ?>">Editar</a></td>
                    <td><a href="php_action/delete.php?id=<?php echo $dados['id']; ?>">Deletar</a></td>
                </tr>
            </tbody>
    <?php //inicio php
    }//final do while
        //fim php?>
     
        </table>
            
            <input type="submit" value="Adicionar Cliente" id="botao" name="botao" class="botao btnMar1" href="adicionar.php">
        </form>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sistema de Cadastro de Clientes</title>
</head>
<body class="center">
    <div class="principal">
        <h2>Clientes</h2>
        
        
    </div>
</body>
</html>

        
        
        