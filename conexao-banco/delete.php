<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deletar Cliente</title>
</head>
<body>
    <h1>CRU(D)</h1>
    <a href="index.php">Adicionar</a>
    <a href="buscar.php">Buscar</a>
    <a href="delete.php">Deletar</a><br/><br/>
    <form action="delete_cliente.php" method="post">
        <label for="cpf">CPF: </label>
        <input type="text" id="cpf" name="cpf" maxlength="11" required><br/>
        <button type="submit" style="margin-top: 10px">Enviar</button>
    </form>
</body>
</html>