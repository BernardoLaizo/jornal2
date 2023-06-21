<?php
    if (isset($_POST['atualizar'])) {

        include_once('config.php');
        
        $id = $_POST['id'];
        $titulo = $_POST['titulo'];
        $data = $_POST['data'];
        $resumo = $_POST['resumo'];
        $noticia = $_POST['noticia'];


        $atualizar = "UPDATE noticias SET 
                    titulo = ?, 
                    data = ?, 
                    resumo = ?, 
                    noticia = ?, 

                    WHERE id = ?";

        
        $resultado = $conexao->execute_query($atualizar, [$titulo, $data, $resumo, $noticia, $id]);   
                    
        $conexao->close();
    }
    header('Location: criar.php');
?>