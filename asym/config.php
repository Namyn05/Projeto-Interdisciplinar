<?php

    $dbHost = 'LocalHost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario-aula';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

//     if($conexao->connect_errno)
//     {
//         echo "Erro";
//     }
//     else
//     {
//         echo "Conexão Efetuada com Sucesso";
//    }
?>