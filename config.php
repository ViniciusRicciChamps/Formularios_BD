<?php

    //variaveis para conexão com o banco de dados
    $dbHost = 'Localhost';
    $dbUserName = 'root';
    $dbPassword = '';
    $dbName = 'formulario_cadastro';

    //variavel de conexao orientado a objetos
    $conexao_BD = new mysqli($dbHost, $dbUserName, $dbPassword, $dbName);

    /*
    //testa a conexão
    if ($conexao_BD -> connect_errno) {
        echo "Erro"; // se der erro
    }else{
        echo "Conexão efetuada com sucesso"; // se deu certo
    }
    */
?>