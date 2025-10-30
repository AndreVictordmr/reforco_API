<?php


    //Requisiçao utilizando o metodo POST para enviar dados

    $url = "http://localhost/reforco_api/comidasAPI.php";

    //Montar a estrutura de dados que eu desejo enviar, ARRAY associativo

    $novaComida=[
        'dobradinha'=>[
            'ingredientes'=>"Bucho de bode, arroz e feijão",
            'modo de preparo'=>"pega o buxo, assa ele, tempere..."
        ]
        
    ];

    //Montar o esqueleto da requisiçao HTTP para POST

    $opcoes = [
        'http'=>[
            'method'=>"POST",
            'header'=>"Content-Type: application/json\r\n",
            'content'=>json_encode($novaComida)
        ]
    ];

    //Trasformar o array opçoes em uma estrutura de url
    $context = stream_context_create($opcoes);

    //Realizar a requisiçao POST
    $respota = file_get_contents($url,false,$context);

    echo $respota;