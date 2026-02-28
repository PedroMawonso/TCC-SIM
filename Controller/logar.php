<?php

    if (isset($_POST['email']) && isset($_POST['senha']))
    {
        require '../Configuration/conexao.php';
        require '../model/UsusarioClass.php';

        $user = new Ususario();
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
        if ($user->login($email, $senha) == true){
            if(isset($_SESSION['idUser'])){
                header('Location: ../View/Pagina_inicial.php');
            }
            else{
                 header('Location: ../View/Page_error.php');
            }
        }
        else{
            header('Location: ../View/Page_error.php');

        }
    }
?>
