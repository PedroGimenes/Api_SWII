<?php
    //CABEÇALHO
    header("Content-Type: application/json"); // Define o tipo de resposta

    $metodo = $_SERVER['REQUEST_METHOD'];

    //echo "Método da requisição: ".$metodo;

    switch ($metodo) {
        case 'GET':
            echo "AQUI AÇÕES DO MÉTODO GET";
            break;
    
        case 'POST':
            echo "AQUI AÇÕES DO MÉTODO POST";
            break;

        case 'PUT':
            echo "AQUI AÇÕES DO MÉTODO PUT";
            break;
        
        case 'DELETE':
            echo "AQUI AÇÕES DO MÉTODO DELETE";
            break;    
        
    
        default:
            echo "MÉTODO NÃO ENCONTRADO!";
            break;
    }

    
    //CONTEÚDO
    // $usuarios = [
    //     ["id" => 1, "nome" => "Maria Souza", "email" => "maria@email.com"],
    //     ["id" => 2, "nome" => "João Silva", "email" => "joao@email.com"]
    // ];

    // Converte para JSON e retorna
    //echo json_encode($usuarios);
?>