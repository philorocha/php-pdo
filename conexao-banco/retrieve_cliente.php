<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário de Cadastro</title>
</head>
<body>
    <?php
        $cpf = $_POST['cpf'];
    
        $dsn = "mysql:host=localhost;dbname=mydb";
        $usuario = "root";
        $senha = "felipe87";
        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        );
    
        try
        {
            /* Abrindo conexão com banco de dados */
            $db = new PDO($dsn, $usuario, $senha, $options);
            $stmt = $db->prepare("SELECT cpf, nome, email, data_nasc FROM cliente WHERE cpf=:cpf");
            $stmt->bindValue(':cpf', $cpf);
            $stmt->execute();
    
            $res = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$res) {
                echo 'Nenhum cliente encontrado!';
            } else {
    ?>

    <h1>(C)RUD</h1>
    <a href="index.php">Adicionar</a>
    <a href="buscar.php">Buscar</a>
    <a href="delete.php">Deletar</a><br/><br/>
    <form action="update_cliente.php" method="post">
        <label for="cpf">CPF: </label>
        <input type="text" id="cpf" name="cpf" maxlength="11" style="margin-left: 127px" value="<?=$res['cpf']?>" readonly required><br/>
        <label for="nome">Nome: </label>
        <input type="text" id="nome" name="nome" style="margin-left: 110px" value="<?=$res['nome']?>" required><br/>
        <label for="email">Email: </label>
        <input type="email" id="email" name="email" style="margin-left: 114px" value="<?=$res['email']?>" required><br/>
        <label for="data_nasc">Data de Nascimento: </label>
        <input type="date" id="data_nasc" name="data_nasc" style="margin-left: 4px" value="<?=$res['data_nasc']?>" required><br/>
        <button type="submit" style="margin-top: 10px">Enviar</button>
    </form>

    <?php 
        }
    } catch(PDOException $ex) {
        echo $ex->getMessage();
    }
    ?>
</body>
</html>