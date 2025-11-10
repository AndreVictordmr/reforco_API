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
            $id=$_GET['id'];
            atualizar_lista_ninjas($id);
            break;
        case 'DELETE':
            $id=json_decode(file_get_contents("php://input"),true);
            deletarNinja($id['id']);
            break;
        default:
            break;

    }
    function deletarNinja($valor){
        $lista_ninja = [
            'ninjas'=>[
                '01'=>[
                    'id'=>'01',
                    'nome'=>'Naruto uzumaki',
                    'idade'=>12
                ],
                '23'=>[
                    'id'=>'23',
                    'nome'=>'gabriel jesus',
                    'idade'=>21
                ]
            ]
        ];
        
        if($valor == $lista_ninja['ninjas']['23']['id']){
            unset($lista_ninja['ninjas']['23']);
            echo json_encode($lista_ninja['ninjas']);
        }else{
            echo json_encode('Erro: Nenhum ninja cadastrado com esse id');
        }

    }

    function atualizar_lista_ninjas($valor){
        $lista_ninja = [
            'ninjas'=>[
                '01'=>[
                    'id'=>'01',
                    'nome'=>'Naruto uzumaki',
                    'idade'=>12
                ],
                '23'=>[
                    'id'=>'23',
                    'nome'=>'gabriel jesus',
                    'idade'=>21
                ]
            ]
        ];

        if($valor==$lista_ninja['ninjas']['23']['id'] ){
            $ninja_atualizado=json_decode(file_get_contents("php://input"),true);
            $lista_ninja['ninjas']['23']['nome'] = $ninja_atualizado['nome'];
            echo json_encode($lista_ninja['ninja']['23']);
        }else{
            echo json_encode('Erro: Nenhum ninja cadastrado com esse id');
        }

    }

    function verificarCodigoSegreto(){
        $chaveacesso=json_decode(file_get_contents("php://input"),true);

        if($chaveacesso['codigo']==="ABCDE1234")
            echo json_encode($chaveacesso['nome'].' a menssagem secreta é: Não existe menssagem secreta');
        else
            echo json_encode('Chave de acesso negada');
        
    }