<?php
    $url = "http://localhost/reforco_api/api_ninja.php";

    $chaveNinja = [
        'id'=>'23',
    ];

    $estruturaHttp=[
        'http'=>[
            'method'=>"DELETE",
            'header'=>"Content-Type: application/json\r\n",
            'content'=>json_encode($chaveNinja)
        ]
    ];

    $contexto = stream_context_create($estruturaHttp);

    $resposta = file_get_contents($url,false,$contexto);

    echo $resposta;