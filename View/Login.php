<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Style/style.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script defer src="../ScriptsJS/Animacao.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Sistema de Inscrição e Matricula</title>
</head>

    <body class="flex flex-col font-[Poppins] items-center py-4 sm:py-6 min-h-screen bg-[#002A50] transition-opacity duration-700 opacity-100 px-2">
    <!-- Logotipo da Instituição -->
    <img src="./Acess/Luiza-Andaluz-Logo.png" alt="Logo" class="w-16 h-16 sm:w-20 sm:h-20 lg:w-24 lg:h-24 object-contain mb-4">

   <!--  <b class="text-3xl lg:text-4xl mb-4 text-[#F5EDF9]">S.I.M</b> -->

   <!--Importanto a funcao de mostrar e ocultar senha-->
    <script src="../ScriptsJS/script.js"></script>

   <!--Essa parte deve aparecer quando houver erro no acesso ao sistema-->
    <div class=" pl-15 pr-15 p-10 rounded-2xl items-center text-center hidden space-y-5 text-4xl flex-col
                bg-[#051B2F] text-white">
        <img src="./Acess/warning.png" alt="Aviso" class="w-20 h-20">
        <h1>Erro ao Entrar no sistema</h1>
        <h2 class="text-2xl text-center">Email ou senha incorreto</h2>
    </div>
    
    <!-- início do formulário -->
    <form id="loginForm" method="post" action="../Controller/logar.php" class="space-y-4 sm:space-y-6 w-full max-w-xs sm:max-w-md rounded-2xl p-4 sm:p-6 lg:p-8 bg-[#051B2F]">

        <h1 class="text-center text-lg sm:text-xl lg:text-2xl font-extrabold text-[#F5EDF9] mb-4 sm:mb-6">Login IMTLA</h1>
        <!-- essa é a parte do input username -->

        <div class="flex flex-col gap-1 sm:gap-2 relative">
            <label for="user" class="text-[#F5EDF9] text-sm sm:text-base">Email</label>
            <input type="email" id="user" name="email" placeholder="Username@gmail" required 
                class="w-full px-3 sm:px-4 py-2 border-b text-white outline-none text-sm sm:text-base">
            <i class="bi bi-person text-xl sm:text-2xl absolute right-4 sm:right-8 top-8 sm:top-9 text-gray-500"></i>
        </div>

        <!-- essa parte é da senha -->
        <div class="flex flex-col gap-1 sm:gap-2 relative">
            <label for="senha" class="text-sm font-medium text-[#F5EDF9]">Senha</label>
            <input type="password" id="senha" name="senha" placeholder="*********" required
                class="w-full px-3 sm:px-4 py-2 border-b text-white outline-none text-sm sm:text-base">
            <i class="bi bi-eye-slash text-xl sm:text-2xl absolute right-4 sm:right-8 top-8 sm:top-9 cursor-pointer text-gray-500" 
                id="btpass" onclick="mostrarsenha()"></i>
        </div>

        <!-- link esqueceu a senha-->
        <a href="#" class="text-[#9823f8] ml-2 sm:ml-4 text-xs sm:text-sm">Esqueceu a senha</a>
        <!-- este bloco é do botão -->
        <div class="flex justify-center">
            <input  type="submit"  class="bg-[#117E0E] text-[#F5EDF9] px-4 py-2 sm:py-3 mt-6 sm:mt-10 w-full rounded-xl cursor-pointer text-sm sm:text-base font-bold shadow-lg hover:bg-[#0c5c09] transition" value="ENTRAR">
        </div>
        <!-- essa é a parte do link -->
         <div class="flex justify-center">
            
        </div>
    </form>
    <!-- Fim do formulário -->
     
</body>
</html>