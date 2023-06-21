<?php
    $dbHost = 'localhost';
    $dbUsuario = 'root';
    $dbSenha = '';
    $dbNome = 'jornal';

    $conexao = new mysqli($dbHost, $dbUsuario, $dbSenha, $dbNome);

    if ($conexao->connect_errno) {
        echo "Deu errado";
    }
?>