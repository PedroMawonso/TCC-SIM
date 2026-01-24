<?php 

    $nome = $_POST["username"] ?? null;
    $senha = $_POST["pass"] ?? null;

    if($nome || $senha){
        echo(" <h1> Olá $nome Bem-vindo a página de verificação provisório</h1>");
        echo(" <h2>Sua Password: $senha </h2>");
    }
    else{
        echo("Faça o seu Login para continuar!!");
    }    

?>

<a href="../Public_/Pagina_inicial.html">Página Inicial</a>