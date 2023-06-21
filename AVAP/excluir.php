<?php           
    if (!empty($_GET['id'])) {
        
        include_once('config.php');

        $id = $_GET['id'];

        $resultado = $conexao->execute_query('SELECT * FROM noticias WHERE id = ?', [$id]);

        if ($resultado->num_rows > 0) {

            $resultado = $conexao->execute_query('DELETE FROM noticias WHERE id = ?', [$id]);
        }

        $conexao->close();
    } 
    header('Location: criar.php');
?>