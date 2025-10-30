<?php
    header('Context-Type: application/json charset= UTF-8');
    header('Access-Control-Allow-Origin:*');

    $metodo = $_SERVER['REQUEST_METHOD'];
    $chave = json_decode(file_get_contents("php://input"),true);
    switch ($metodo) {
        case 'GET':
            informarDoc($_GET['info']);
            break;
        case 'POST':
            verificandoChave($chave);
            break;
        case 'PUT':

            break;
        case 'DELETE':

            break;
        default:

            break;
    }

    function informarDoc($valor){
        switch($valor){
            case 'sim':
                echo json_encode("Tenta passar o codigo andre_e_bonito na chave");
                break;
            case 'não':
                echo json_encode("Tenta passar o codigo entra123 na chave");    
                break;
            default:
                echo json_encode("ok então");
        }

    }


    function verificandoChave($valor){
        
        if($valor==="entra123"){
            echo json_encode("<a href=https://github.com/AndreVictordmr>Descubra tudo que você deseja aqui");
        }else if($valor==="andre_e_bonito"){
            echo json_encode("Valeu… eu acho. 😑");
        }
        else{
            echo json_encode("Não podia estar mais errado");
        }

    }
