<?php

    header('Context-Type: application/json charset= UTF-8');
    header('Access-Control-Allow-Origin:*');

    $metodo = $_SERVER['REQUEST_METHOD'];
    $mensagem = json_decode(file_get_contents("php://input"),true);
    switch ($metodo) {
        case 'GET':
            echo json_encode('metodo Get utilizado');
            break;
        case 'POST':
            checandoMensagem($mensagem);
            break;
        case 'PUT':

            break;
        case 'DELETE':

            break;
        default:

            break;
    }

    function checandoMensagem($valor) {
        if($valor['reacao'] === "elogio"){
            echo json_encode('Obrigado por escolher nosso restaurante! Sua presença faz toda diferença — esperamos te ver de novo em breve');
        }else if($valor['reacao'] === "reclamacao"){
            echo json_encode("Olha, a gente faz o possível pra agradar, mas paciência também tem limite! Respeito é bom, e aqui a gente serve com trabalho, não com mágica!"); 
        }
    }
