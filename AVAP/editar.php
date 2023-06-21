<?php           
    if (!empty($_GET['id'])) {
        include_once('config.php');

        $id = $_GET['id'];

        $resultado = $conexao->execute_query('SELECT * FROM noticias WHERE id = ?', [$id]);

        if ($resultado->num_rows > 0) {
            while ($dados = $resultado->fetch_assoc()) {
                $titulo = $dados['titulo'];
                $data = $dados['data'];
                $resumo = $dados['resumo'];
                $noticia = $dados['noticia'];
            }

        } else {
            header('Location: criar.php');
        }

        $conexao->close();
        
    } else {
        header('Location: criar.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Edição de Cadastro</title>
        <style>
            body {
                text-align: center;
                background-color: #B8DEF5;
                margin: 100px;
            }
            .btn {
                margin: 20px 5px;
                width: 85px;
                height: 40px;
            }
            label {
                width: 80px;
                font-weight: bold;
                text-align: left;
            }
            input {
                width: 200px;
                border-radius: 10px;
                height: 40px;
                margin-top: 10px;
            }
            legend {
                font-size: 25px;
            }
        </style>
    </head>
    <body>
        <form action="salvar-edicao.php" method="post">
            <fieldset class="container">
                <legend>Edição de Noticia</legend>
            
                <label for="titulo">titulo: </label>
                <input type="text" name="titulo" id="titulo" value="<?php echo $titulo ?>" required>
                <br>

                <label for="data">Data: </label>
                <input type="date" name="data" id="data" value="<?php echo $data ?>" required>
                <br>

                <label for="resumo">Resumo: </label>
                <input type="text" name="resumo" id="resumo" value="<?php echo $resumo ?>" required>
                <br>

                <label for="noticia">Noticia: </label>
                <input type="text" name="noticia" id="noticia" value="<?php echo $noticia ?>" required>
                <br>

                <input type="hidden" name="id" value="<?php echo $id ?>">

                <input type="submit" name="atualizar" value="Atualizar" class="btn btn-success">
                <a href="criar.php" class="btn btn-danger">Cancelar</a>
            </fieldset>
        </form>
    </body>
</html>