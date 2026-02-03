
<?php 
    include("conexao.php");
    
    if(isset($_POST['email']) || isset($_POST['senha']))
    {
        $email = $mysqli->real_escape_string($_POST['email']);     
        $senha = $mysqli->real_escape_string($_POST['senha']); 

        $sql_code = "SELECT * FROM tb_usuario WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execucao do codigo SQL: " . $mysqli->error);
        $quantidade = $sql_query->num_rows;

        if($quantidade == 1){
            $usuario = $sql_query->fetch_assoc();
            if (!isset($_SESSION)){
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];
            header("Location: ../Public_/Pagina_inicial.html");
        }
        else{
            header("Location: ../Public_/Page_error.html");
        }
    }
?>

<?php 
    if(!isset($_SESSION)){
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ola <?php echo $_SESSION['nome']; ?> </h1>
</body>
</html>

  