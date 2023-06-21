<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Login</title>
        <style>
        body {text-align: center;
            background-color: #B8DEF5;
            margin: 100px;}
        h1 {text-align:center;}
        h3 {margin:30px;}
        </style>
    </head>
    <body>
    <?php
    session_start();

    include_once('config.php');

    $id = $_GET['id'];

    $resultado = $conexao->execute_query('SELECT * FROM noticias WHERE id =?',[$id]);
    ($dados = mysqli_fetch_assoc($resultado)); 
    echo "<div class = 'div1'>" ;   
    echo "<h1>" . $dados['titulo'] . '<h1>';
    echo "<h3>" . $dados['noticia'] . '<h3>';
    echo "</div>";
    echo "<a href='index.php'><button>voltar</a></button>";
    
    $conexao->close();
    ?>
</body>