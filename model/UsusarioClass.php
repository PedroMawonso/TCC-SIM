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

    public function Logado($id){
        global $pdo;

        $array = array();
        $sql = "SELECT username FROM tb_usuario WHERE id_usuario = :id_usuario";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("id_usuario", $id);
        $sql->execute(); 
        
        if ($sql->rowCount() > 0){
            $array = $sql->fetch();
        }
        return $array;
    }
}
?>