<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Pagina Inicial</title>

    <style>
body { background-image: linear-gradient(180deg, #B8DEF5,white);

    }
.div1{position:relative;
margin-top: 20px;
margin-bottom: 20px;
width: 85%;
left:5%;
right:5%;
top: 10%;
down: 10%;
background-color: #f8f9fa;
border: solid black 2px;}

h1 {
    text-align:center;
  color: #333;
  font-size: 32px;
  margin-bottom: 20px;
  margin-top: 20px;
}
#titu{font-size:60px;}
h4 {margin-left:20px;
    margin-bottom: 20px;}
.btn {
  display: inline-block;
  font-size: 18px;
  border: none;
  border-radius: 5px;
  border-color:black;
  text-decoration: none;
  background-color: #5CDEF5;
  cursor: pointer;
  left:53%;
  position:relative;
}
 #btn1 {position:absolute;
  left:40%;}
.btn-primary {
  background-color: #007bff;
}

.btn-secondary {
  background-color: #6c757d;
}
</style>
</head>
    <body>
        <h1 id = 'titu'>Pagina Inicial</h1>
        <a href='cadastro.php'><button class='btn'>Adicionar login</button></a>
        <a href='login.php'><button class='btn' id = 'btn1'>Administrar Noticias</button></a>
    </body>
    <?php
    session_start();

    include_once('config.php');

    $resultado = $conexao->execute_query('SELECT * FROM noticias ORDER BY id ASC');
    while($dados = mysqli_fetch_assoc($resultado)) {
    echo "<div class = 'div1'>" ;   
    echo "<h1>" . $dados['titulo'] . '<h1>';
    echo '<h4>' . $dados['data'] . '<h4>';
    echo '<p>' . $dados['resumo'] . '<p>';
    echo "<a href='noticia.php?id=$dados[id]'>Clique para ver mais</a>";
    echo "</div>";
    }
    
    $conexao->close();
    ?>
</html>