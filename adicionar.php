<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Novo Cliente</title>
</head>
<body class="center">
    <div class="row">
        <div class="col">
            <h2>Novo Cliente</h2>
            <form action="php_action/create.php" method="POST">
                <div>
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" placeholder="Digite o nome" class="submit"><br>
                </div>
                <div>
                    <label for="sobrenome">Sobrenome:</label>
                    <input type="text" name="sobrenome" placeholder="Digite o sobrenome" class="submit"><br>
                </div>
                <div>
                    <label for="email">E mail:</label>
                    <input type="email" name="email" placeholder="Digite o email" class="submit"><br>
                </div>
                <div>
                    <label for="idade">Idade:</label>
                    <input type="number" name="idade" placeholder="Digite a idade" class="submit"><br>
                </div>

                <button type="submit" name="btn-cadastrar" class="botaoCadastro btnMar1">Cadastrar</button> <br><br><br><br>
                <a href="index.php">Lista de Clientes</a>
            </form>
        </div>
    </div>
</body>
</html>