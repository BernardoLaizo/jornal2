<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Login</title>
        <style>
            body {
                text-align: center;
                background-color: #B8DEF5;
                margin: 100px;
            }
        </style>
    </head>
    <body>
        <form action='entrar.php' method='post'>
            <label for='email'>E-mail:</label>
            <input type ='text' name='email'></input>
            <br>

            <label for='senha'>Senha:</label>
            <input type ='password' name='senha'></input>
            <br>

            <input type="submit" name="submit" value="Enviar">
        </form>

</body>
</html>