<?php 
    include("conexao.php");
    
    if(isset($_POST['email']) || isset($_POST['senha']))
    {
        $email = $mysqli->real_escape_string($_POST['email']);     
        $senha = $mysqli->real_escape_string($_POST['senha']); 

        $sql_code = "SELECT * FROM tb_usuario WHERE BINARY email = '$email' AND BINARY senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execucao do codigo SQL: " . $mysqli->error);
        $quantidade = $sql_query->num_rows;
        if($quantidade == 1){
            $usuario = $sql_query->fetch_assoc();
            if (!isset($_SESSION)){
                session_start();
            }
            $_SESSION['id_usuario'] = $usuario['id_usuario'];
            $_SESSION['username'] = $usuario['username'];
            header("Location: ../Public_/Pagina_inicial.php");
        }
        else{
            header("Location: ../Public_/Page_error.php");
        }
    }
?>



  