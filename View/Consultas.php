<?php 
    session_start();

    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    
    if(!isset($_SESSION['idUser'])){
        header("Location: Login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Style/style.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script defer src="../ScriptsJS/Animacao.js"></script>
    <title>Sistema de Inscrição e Matricula</title>
</head>
<body class="font-[Poppins] min-h-screen flex flex-col bg-gray-300 
    h- transition-opacity duration-700 opacity-100">
  <!-- barra superior -->
   <header class="bg-[#002A50] fixed w-full top-0 left-0 z-50
        items-center text-white py-5 pl-15 flex" >
      
        <!--   Essa é a parte da logo da Instituição -->
        <div class="flex md:flex-row items-center gap-6">
            <img src="./Acess/Luiza-Andaluz-Logo.png" alt="logo" class="w-10 h-10 lg:w-15 lg:h-15">
            <span class="text-sm lg:text-2xl font-bold">IMTLA</span>
        </div>

        <!--   Essa é parte da imagem do user -->
        <div class="w-10 h-10 lg:w-15 lg:h-15 lg:right-70 bg-gray-400 rounded-full overflow-hidden absolute right-50 ">
            <img src="./Acess/homem-de-negocios.png" alt="logo_homem" class="w-full h-full object-cover">
        </div>
        <div class="flex items-center">
            <span id="user_in" class="text-white absolute lg:right-30 right-10 font-semibold">
                <?php echo $_SESSION['User']; ?></span>
        </div>
   </header>
   <!-- Fim barra superior -->
    
   <!-- Inicio menu -->
    <main class="flex flex-col lg:flex-row lg:h-screen">
        <aside id="sidebar" class="w-44 sm:w-52 md:w-56 lg:w-64 bg-[#002A50] text-amber-50 h-60 lg:h-screen fixed top-0 left-0 flex flex-col pt-16 sm:pt-24 transition-all duration-300 -translate-x-full opacity-0 text-xs sm:text-sm md:text-base lg:text-[16px] lg:translate-x-0 lg:opacity-100 lg:static lg:flex lg:pt-36 z-40">

            <nav class="flex flex-col gap-5">
                <a href="Transicao.php?next=Pagina_inicial.php" class="flex items-center w-full 
                        gap-6 hover:bg-[#021e36c7] duration-500 hover:duration-500 rounded px-4 py-3">
                    <img src="Acess/house_18511239.png" alt="Home" class="w-8 h-8">
                    <span>Dashboard</span>
                </a>

                <a href="Transicao.php?next=inscricao.php" class="flex items-center w-full gap-6 hover:bg-[#021e36c7] duration-500 hover:duration-500 rounded px-4 py-3">
                    <img src="Acess/curriculo.png" alt="Home" class="w-8 h-8">
                    <span>Inscrição</span>
                </a>

                 <a href="Transicao.php?next=Consultas.php" class="flex items-center w-full gap-6 bg-[#021322c7] rounded px-4 py-3">
                    <img src="Acess/documento.png" alt="Home" class="w-8 h-8">
                    <span>Consultas</span>
                </a>

                 <a href="Transicao.php?next=Alunos.php" class="flex items-center w-full gap-6 hover:bg-[#021e36c7] 
                        duration-500 hover:duration-500  rounded px-4 py-3">
                    <img src="Acess/aluna (1).png" alt="Home" class="w-8 h-8">
                    <span>Alunos</span>
                </a>

                 <a href="Transicao.php?next=Relatorios.php" class="flex items-center w-full gap-6 hover:bg-[#021e36c7] 
                        duration-500 hover:duration-500  rounded px-4 py-3">
                    <img src="Acess/estatistica.png" alt="Home" class="w-8 h-8">
                    <span>Relatórios</span>
                </a> 
                
                  <a href="Transicao.php?next=Login.php" class="flex items-center w-full gap-6 hover:bg-[#021e36c7] 
                        duration-500 hover:duration-500  rounded px-4 py-3 link">
                    <img src="Acess/log-out.png" alt="Home" class="w-8 h-8">
                    <span>Log out</span>
                </a>
            </nav>
        </aside>
        <!--Inicio do Conteudo principal-->
        <div class="flex-1 px-2 sm:px-4 py-8 mt-16 sm:mt-20 lg:ml-64 min-w-0 bg-gray-300 transition-all duration-300">
            <h1 class="text-black text-lg sm:text-xl lg:text-2xl font-bold mb-4">Consulta dos Resultados dos Testes</h1>
            <!--Os Cards -->
            <div class="">
                <!-- Conteúdo de consulta pode ser adicionado aqui -->
            </div>
        </div>
        <!--Fim do Conteudo principal-->
    </main>
    <!--Fim da Barra de menu -->
    
    <img class="fixed bottom-6 right-2 w-8 h-8 sm:w-10 sm:h-10 cursor-pointer lg:hidden z-50" src="./Acess/menu (1).png" alt="menu" onclick="mostrar_menu()">
    <!--Início do Rodapé-->
    <footer class="bg-[#002A50] text-white py-2 fixed bottom-0 left-0 z-50 w-full">
        <div class="flex items-center justify-center">
            <span class="text-xs sm:text-sm">©2026-Elite Finalistas Todos os direitos reservados</span>
        </div>
    </footer>
    <!--Fim do Rodapé-->
</body>
</html>