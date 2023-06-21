<?php
        session_start();
        print_r($_REQUEST);
        print_r('<br>');
            if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
                include_once('config.php');
                $email = $_POST['email'];
                $senha = $_POST['senha'];

                $buscar = "SELECT * FROM usuarios WHERE email = '$email'";
                $resultado = $conexao->query($buscar);
                $senha_banco = $resultado->fetch_assoc()['senha'];

                if(mysqli_num_rows($resultado) == 1 && password_verify($senha, $senha_banco)){
                    $_SESSION['email'] = $email;
                    $_SESSION['senha'] = $senha;
                    echo "Login encontrado";
                    header('Location: criar.php');
                } else {
                    unset($_SESSION['email']);
                    unset($_SESSION['senha']);
                    header('Location: login.php');
                    echo "Login e/ou Senha inválidos";
                }
                $conexao->close();
            } else {
                echo "um ou mais espaços não preenchidos";
            }
            ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Login</title>
    </head>
    <body>

</body>