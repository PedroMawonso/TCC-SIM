<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carregando</title>
    <link rel="stylesheet" href="./Style/style.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .trans{
            animation: loading 1s linear infinite;
        }
        @keyframes loading{
            0%{
                transform: rotate(0deg);
            }
            100%{
                transform: rotate(360deg);
            }
        }
    </style>
</head> 
<body class="w-full min-h-screen flex items-center justify-center">
    <span class="trans w-[60px] h-[60px] bg-transparent block rounded-[50%] 
            border-12 border-cyan-700 border-t-12 border-t-transparent">
    </span>
    <script>
        const params = new URLSearchParams(window.location.search)
        const nextpage = params.get("next") || "Login.php" // Este caminho e acessivel mas pode ser alterado

        setTimeout(() => {
            window.location.href= nextpage
        }, 1500)
    </script>
</body>
</html>