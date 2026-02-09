<?php
    $localhost = "localhost";
    $user = "root";
    $senha = "";
    $banco = "db_inscricao_maticula";

    //conexao com o
    $mysqli = new mysqli($localhost, $user, $senha, $banco);
   if ($mysqli->error){
        die("Falha ao conectarr ao banco de dados: ". $mysqli->error);
   }
    //echo "Existe " .$sql->rowCount(). " Registro";
?>