<?php

    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $data_nasc = $_POST['data_nasc'];

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
        $stmt = $db->prepare("UPDATE cliente SET nome=:nome, email=:email, data_nasc=:data_nasc WHERE cpf=:cpf");
        $stmt->bindValue(':cpf', $cpf);
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':data_nasc', $data_nasc);
        $stmt->execute();

        echo 'Cliente atualizado com sucesso!';
    } catch(PDOException $ex) {
        echo $ex->getMessage();
    }

    