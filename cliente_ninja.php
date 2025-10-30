<?php
    $url = "http://localhost/reforco_api/api_ninja.php";

    $chaveNinja = [
        'codigo'=>'ABCDE1234',
        'nome'=>"Gustavo"
    ];

    $estruturaHttp=[
        'http'=>[
            'method'=>"POST",
            'header'=>"Content-Type: application/json\r\n",
            'content'=>json_encode($chaveNinja)
        ]
    ];

    $contexto = stream_context_create($estruturaHttp);

    $resposta = file_get_contents($url,false,$contexto);

    echo $resposta;