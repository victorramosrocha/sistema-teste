<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSB - Sistema de Saúde Bugado</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        div#user-area {
            padding: 10px;
        }

        div#user-area > a {
            color: black;
            text-decoration: none;
        }

        div#user-area > a:hover {
            color: blue;
        }

        h1 {
            margin-bottom: 0;
        }
        
        h2 {
            margin-top: 5px;
        }
        
        #sintoma {
            width: 350px;
            font-size: 1.5em;
            padding: 0;
        }

    </style>
</head>
<body>
    <div id="user-area">
        <a href="#">Login</a>
        <a href="cadastro.php">Cadastro</a>
    </div>
    <img src="saude_img.png" alt="logotipo de sistema de saude">
    <h1>SSB</h1>
    <h2>Sistema de diagnóstico rápido</h2>
    <p>Por favor, Insira o sintoma no campo abaixo:</p>
    <textarea name="sintoma" id="sintoma"></textarea>
    <button id="btdiagnostico" style="margin: 30px;">Diagnóstico</button>
    <div class="diagnostico"></div>

    <script>
        let btdiagnostico = document.querySelector("#btdiagnostico");
        let divdiagnostico = document.querySelector(".diagnostico")
        let textarea = document.querySelector("#sintoma")

        btdiagnostico.addEventListener("click", () => {
            // Verificamos o valor dentro da função de clique
            if (textarea.value !== "") { 
                divdiagnostico.innerHTML = "O sintoma já existe! Por favor, selecione outro usuário.";
                divdiagnostico.style.color = "red";
            } else {
                divdiagnostico.innerHTML = "Insira um sintoma no campo acima!";
            }
        });
    </script>
</body>
</html>