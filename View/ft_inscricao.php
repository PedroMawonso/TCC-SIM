<?php
require_once '../Configuration/conexao.php';

$cursoSelecionado = isset($_GET['curso']) ? $_GET['curso'] : '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim($_POST['nome'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $telefone = trim($_POST['telefone'] ?? '');
    $curso = trim($_POST['curso'] ?? '');
    $mensagem = trim($_POST['mensagem'] ?? '');

    if ($nome && $email && $telefone && $curso) {
        global $pdo;
        $sql = "INSERT INTO tb_inscricoes (nome, email, telefone, curso, mensagem) VALUES (:nome, :email, :telefone, :curso, :mensagem)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':telefone', $telefone);
        $stmt->bindValue(':curso', $curso);
        $stmt->bindValue(':mensagem', $mensagem);
        if ($stmt->execute()) {
            echo '<div style="padding:2em;text-align:center;color:green;font-weight:bold;">Inscrição enviada com sucesso!</div>';
        } else {
            echo '<div style="padding:2em;text-align:center;color:red;font-weight:bold;">Erro ao enviar inscrição.</div>';
        }
    } else {
        echo '<div style="padding:2em;text-align:center;color:red;font-weight:bold;">Preencha todos os campos obrigatórios.</div>';
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrição - IMTLA</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
        <div class="flex items-center justify-center min-h-screen bg-gradient-to-br from-[#051B2F] to-[#002A50] px-2 sm:px-4">
            <div class="w-full max-w-md md:max-w-lg lg:max-w-xl bg-[#002A50]/90 rounded-2xl p-4 sm:p-8 shadow-2xl">
                <h2 class="text-2xl sm:text-3xl font-bold mb-6 sm:mb-8 text-center text-white tracking-wide">Formulário de Inscrição</h2>
                <form method="post" class="space-y-4 sm:space-y-6">
                    <div class="relative">
                        <input type="text" name="nome" placeholder="Nome completo" required class="w-full pl-12 pr-4 py-2 sm:py-3 rounded-xl bg-[#051B2F] text-white placeholder:text-gray-400 shadow focus:ring-2 focus:ring-[#23f8a2] outline-none text-sm sm:text-base">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2">
                            <img src="Acess/user.svg" alt="user" class="w-5 h-5 sm:w-6 sm:h-6 opacity-80">
                        </span>
                    </div>
                    <div class="relative">
                        <input type="email" name="email" placeholder="Email" required class="w-full pl-12 pr-4 py-2 sm:py-3 rounded-xl bg-[#051B2F] text-white placeholder:text-gray-400 shadow focus:ring-2 focus:ring-[#23f8a2] outline-none text-sm sm:text-base">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2">
                            <img src="Acess/email.svg" alt="email" class="w-5 h-5 sm:w-6 sm:h-6 text-white opacity-80">
                        </span>
                    </div>
                    <div class="relative">
                        <input type="tel" name="telefone" placeholder="Telefone" required class="w-full pl-12 pr-4 py-2 sm:py-3 rounded-xl bg-[#051B2F] text-white placeholder:text-gray-400 shadow focus:ring-2 focus:ring-[#23f8a2] outline-none text-sm sm:text-base">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2">
                            <img src="Acess/phone.svg" alt="phone" class="w-5 h-5 sm:w-6 sm:h-6 opacity-80">
                                    </span>
                                </div>
                    <div class="relative">
                        <select name="curso" required class="w-full pl-12 pr-4 py-2 sm:py-3 rounded-xl bg-[#051B2F] text-white shadow focus:ring-2 focus:ring-[#23f8a2] outline-none text-sm sm:text-base">
                            <option value="">Selecione o curso</option>
                            <option value="Informatica">Informática</option>
                            <option value="Eletricidade">Eletricidade</option>
                        </select>
                        <span class="absolute left-4 top-1/2 -translate-y-1/2">
                            <img src="Acess/course.svg" alt="course" class="w-5 h-5 sm:w-6 sm:h-6 opacity-80">
                        </span>
                    </div>
                    <div class="relative">
                        <textarea name="mensagem" placeholder="Mensagem (opcional)" class="w-full pl-12 pr-4 py-2 sm:py-3 rounded-xl bg-[#051B2F] text-white placeholder:text-gray-400 shadow focus:ring-2 focus:ring-[#23f8a2] outline-none text-sm sm:text-base"></textarea>
                        <span class="absolute left-4 top-4 sm:top-6">
                            <img src="Acess/message.svg" alt="message" class="w-5 h-5 sm:w-6 sm:h-6 opacity-80">
                        </span>
                    </div>
                    <button type="submit" class="bg-gradient-to-r from-[#117E0E] to-[#23f8a2] text-white font-bold py-2 sm:py-3 px-6 sm:px-8 rounded-xl w-full mt-2 sm:mt-4 shadow-lg hover:from-[#0c5c09] transition text-sm sm:text-base">Enviar inscrição</button>
                </form>
            </div>
        </div>