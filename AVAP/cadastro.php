<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Cadastro</title>
    </head>
    <body>
        <form method="post">

            <label for="email">E-mail: </label>
            <input type="email" name="email" required>
            <br>

            <label for="senha">Senha: </label>
            <input type="text" name="senha" required>
            <br>

            <input type="submit" name="enviar" value="Enviar" class="btn btn-danger">
        </form>

        <?php
            if (isset($_POST['enviar'])) {

                include_once('config.php');

                
                $email = $_POST['email'];
                $senha = password_hash($_POST['senha'],PASSWORD_DEFAULT);

                $inserir = "INSERT INTO usuarios(email, senha)
                VALUES ('$email','$senha')";

                if ($conexao->query($inserir) === true) {
                    echo "Cadastro efetuado com sucesso!";
                }

                $conexao->close();
                
            }
        ?>
    </body>
</html>