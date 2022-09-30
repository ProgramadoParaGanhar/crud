<?php 
    require_once 'php_action/db_connect.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM clientes
                WHERE id = $id";
                $resultado = mysqli_query($connect, $sql);
                $dados = mysqli_fetch_array($resultado);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
</head>
<body>
    <h3>Atualizar Cliente</h3>

    <form action="php_action/update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $dados['sobrenome']; ?>">
                <div>
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" placeholder="Digite o nome" class="submit" value="<?php echo $dados['nome']; ?>"><br>
                </div>
                <div>
                    <label for="sobrenome">Sobrenome:</label>
                    <input type="text" name="sobrenome" placeholder="Digite o sobrenome" class="submit" ><br>
                </div>
                <div>
                    <label for="email">E mail:</label>
                    <input type="email" name="email" placeholder="Digite o email" class="submit" value="<?php echo $dados['email'];   ?>"><br>
                </div>
                <div>
                    <label for="idade">Idade:</label>
                    <input type="number" name="idade" placeholder="Digite a idade" class="submit" value="<?php echo $dados['idade'];   ?>"><br>
                </div>

                <button type="submit" name="btn-atualizar" class="botaoCadastro btnMar1">Atualizar</button> <br><br><br><br>
                <a href="index.php">Lista de Clientes</a>
            </form>
</body>
</html>