<?php
    //CABEÇALHO
    header("Content-Type: application/json"); // Define o tipo de resposta

    //CONTEÚDO
    $usuarios = [
        ["id" => 1, "nome" => "Maria Souza", "email" => "maria@email.com"],
        ["id" => 2, "nome" => "João Silva", "email" => "joao@email.com"]
    ];

    // Converte para JSON e retorna
    echo json_encode($usuarios);
?>