<?php
    //CABEÇALHO
    header("Content-Type: application/json"); // Define o tipo de resposta

    $metodo = $_SERVER['REQUEST_METHOD'];

   
    $usuarios = [
      ["id" => 1, "nome" => "Maria Souza", "email" => "maria@email.com"],
      ["id" => 2, "nome" => "João Silva", "email" => "joao@email.com"]
     ];

    switch ($metodo) {
        case 'GET':
            //echo "AQUI AÇÕES DO MÉTODO GET";
            echo json_encode($usuarios);
            break;
    
        case 'POST':
            //echo "AQUI AÇÕES DO MÉTODO POST";
            $dados = json_decode(file_get_contents('php://input'),true);
            //print_r($dados);
            $novoUsuario = [
                "id" => $dados ["id"],
                "nome" => $dados ["nome"],
                "email" => $dados ["email"]
            ];
            
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


    // Converte para JSON e retorna
    //echo json_encode($usuarios);
?>