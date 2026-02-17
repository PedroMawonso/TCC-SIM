<?php

class Ususario{

    public function login($email, $senha){
        global $pdo;

        $sql = "SELECT * FROM tb_usuario WHERE email = :email AND senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("email", $email); 
        $sql->bindValue("senha", md5($senha));
        $sql->execute();

        if ($sql->rowCount() > 0){
            $dado = $sql->fetch();
            $_SESSION['idUser'] = $dado['id_usuario'];
            $_SESSION['User'] = $dado['username'];
            return true; 
        }
        else{
            return false;
        }
    }
}
?>