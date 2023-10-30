<?php 

    //Criar Conexão de Banco de Dados
    try {
        $pdo = new PDO('mysql:host=localhost; dbname=sistema_satisfacao', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Conexão bem sucedida";
    } catch (PDOException $e) {
        echo "Erro de Conexão";
    }


?>