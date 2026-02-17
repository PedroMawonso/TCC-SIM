<?php

    session_start();
    
    $localhost = "localhost";
    $username = "root";
    $senha = "";
    $banco = "db_inscricao_maticula";
    global $pdo;

    try
    {
        // Conexao com banco de dados
         $pdo = new PDO('mysql:host='.$localhost.'; dbname='.$banco, $username, $senha);
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(Exception $e)
    {
        //Caso houver erro cai nesse escopo
        echo "ERROR: ".$e->getMessage();
        exit;
    }
?>