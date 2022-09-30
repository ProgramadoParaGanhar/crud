<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Novo Produto</title>
</head>
<body class="center">
    <div class="row">
        <div class="col">
            <h2>Novo Produto</h2>
            <form action="php_action/create-produto.php" method="POST">
                <div>
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" placeholder="Digite o nome" class="submit"><br>
                </div>
                <div>
                    <label for="descricao">Descrição:</label>
                    <input type="text" name="descricao" placeholder="Digite a descrição" class="submit"><br>
                </div>
                
                <button type="submit" name="btn-cadastrar" class="botaoCadastro btnMar1">Cadastrar</button> <br><br><br><br>
                <a href="index.php">Lista de Clientes</a>
                <a href="produto.php">Lista de Produtos</a>
            </form>
        </div>
    </div>
</body>
</html>