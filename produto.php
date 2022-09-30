<?php
    require_once 'php_action/db_connect.php';
    $sql = "SELECT  * FROM produtos";
    $resultado = mysqli_query($connect,$sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sistema de Cadastro de Produtos</title>
</head>
<body class="center">
    <div class="principal">

        <h2>Produtos</h2>
        
        <form action="adicionar-produto.php" method="POST">
        <table>
            <thead>
                <th>Nome:</th>
                <th>Descrição:</th>
                
            </thead>
            <?php 
            while ($dados = mysqli_fetch_array($resultado)) {

           
             ?>
            <tbody>
                <tr>
                    <td><?php echo $dados['nome'];  ?></td>
                    <td><?php echo $dados['descricao']; ?></td>
                    <td><a href="editar-produto.php?id=<?php echo $dados['id'];?>"></a></td>
                </tr>
            </tbody>
            <?php 

            
        }
        ?>
        </table>
        <br><hr>
            <input type="submit" value="Adicionar Produto" id="botao" name="botao" class="botao btnMar1" href="adicionar.php">
        </form>
    </div>
</body>
</html>