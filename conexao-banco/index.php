<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário de Cadastro</title>
</head>
<body>
    <h1>(C)RUD</h1>
    <a href="index.php">Adicionar</a>
    <a href="buscar.php">Buscar</a>
    <a href="delete.php">Deletar</a><br/><br/>
    <form action="create_cliente.php" method="post">
        <label for="cpf">CPF: </label>
        <input type="text" id="cpf" name="cpf" maxlength="11" style="margin-left: 127px" required><br/>
        <label for="nome">Nome: </label>
        <input type="text" id="nome" name="nome" style="margin-left: 110px" required><br/>
        <label for="email">Email: </label>
        <input type="email" id="email" name="email" style="margin-left: 114px" required><br/>
        <label for="data_nasc">Data de Nascimento: </label>
        <input type="date" id="data_nasc" name="data_nasc" style="margin-left: 4px" required><br/>
        <button type="submit" style="margin-top: 10px">Enviar</button>
    </form>
</body>
</html>