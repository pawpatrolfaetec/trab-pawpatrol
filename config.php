<?php

    $dbHost = 'Localhost:3307';
    $dbUsername = 'root';
    $dbPassword = 'Ikaro08leticia28ikle13';
    $dbName = 'trab-pawpatrol';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    /*if($conexao->connect_errno){
        echo "erro";
    }
    else{
        echo "Conexão efetuada com sucesso";
    }*/
?>