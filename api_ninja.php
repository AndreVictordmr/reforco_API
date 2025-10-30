<?php

    header('Context-Type: application/json charset= UTF-8');
    header('Access-Control-Allow-Origin:*');

    $metodo=$_SERVER['REQUEST_METHOD'];

    switch($metodo){
        case 'GET':
                echo json_encode('metodo Get utilizado');
            break;
        case 'POST':
                verificarCodigoSegreto();
            break;
        case 'PUT':
        
            break;
        case 'DELETE':
        
            break;
        default:

            break;

    }

    function verificarCodigoSegreto(){
        $chaveacesso=json_decode(file_get_contents("php://input"),true);

        if($chaveacesso['codigo']==="ABCDE1234")
            echo json_encode($chaveacesso['nome'].' a menssagem secreta é: Não existe menssagem secreta');
        else
            echo json_encode('Chave de acesso negada');
        
    }