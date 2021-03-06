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
        $stmt = $db->prepare("INSERT INTO cliente (cpf, nome, email, data_nasc) VALUES (:cpf, :nome, :email, :data_nasc)");
        $stmt->bindValue(':cpf', $cpf);
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':data_nasc', $data_nasc);
        $stmt->execute();

        echo 'Cliente adicionado com sucesso!';
    } catch(PDOException $ex) {
        echo $ex->getMessage();
    }

    