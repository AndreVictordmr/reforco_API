<?php
    $api_key = 'AIzaSyAqKMAaUzEVBDJ53LK3svbcW20RkDdJW00';
    $url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent?key=$api_key";

    $content =[
        'contents'=>[
            'parts'=>[
                'text'=>"Me explique o funcionamento do um motor"
            ]
        ]
    ];
    $estrutura=[
        'http'=>[
            'header'=>"Content-Type: application/json\r\n"."x-goog-api-key: $api_key\r\n",
            'method'=>"POST",
            'content'=>json_encode($content)
        ]
    ];

    $enviar=stream_context_create($estrutura);

    $resposta= file_get_contents($url,false,$enviar);
    $resposta_json=json_decode($resposta,true);
    
    if(isset($resposta_json['candidates'][0]['content']['parts'][0]['text'])){
        
        echo '##Explicação do motor:\n<br>';
        echo $resposta_json['candidates'][0]['content']['parts'][0]['text'];
    }else{
        echo 'Erro: Não foi possível obter o texto da resposta. Verifique sua chave de API ou as permissões.';
    }