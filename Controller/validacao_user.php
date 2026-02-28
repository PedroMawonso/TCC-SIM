<?php
    require '../Configuration/conexao.php';

    if (isset($_SESSION['idUser'])){
        require_once '../model/UsusarioClass.php';
        $user = new Ususario();

        $userLogado = $user->Logado($_SESSION['idUser']);
        
        $nomeuser = $userLogado['username'];
    }
    else{
        header('Location: ../View/Login.php');
    }
?>