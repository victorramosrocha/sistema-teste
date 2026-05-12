<?php 
include_once "conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];

    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (user_name, pass) 
            VALUES ('$name', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "Cadastro realizado!";
    } else {
        echo "Erro ao cadastrar.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
            box-sizing: border-box;
        }

        body {
            display: flex;
            flex-flow: column nowrap;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #c1c1c1;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        input {
            border-radius: 10px;
            padding: 10px;
            margin: 10px;
        }
        
    </style>
</head>
<body>
    <form action="#" method="POST">
        <input type="text" name="name" id="name" placeholder="Usuário" required  minlength=4 maxlength=20>
        <input type="password" name="password" id="password" placeholder="Senha" required minlength=4 maxlength=8>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>