<?php

    $url = "http://localhost/reforco_api/exercicio/api_elogio.php";


?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>De a sua opiniao sobre a comida</h1>
        <form action="" method="POST">
            <select name="mensagem">
                <option value=""></option>
                <option value="elogio">Elogiar a comida</option>
                <option value="reclamacao">Reclamar da comida</option>
            </select>
            <button type="submit">enviar</button>
        </form>
        <?php
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $mensagem=[
                'reacao'=>$_POST['mensagem']
            ];
            $conect =[
                'http'=>[
                    'header'=>"Content-type: application/json\r\n",
                    'method'=>"POST",
                    'content'=>json_encode($mensagem)
                ]
            ];

            $content =stream_context_create($conect);

            $resposta = file_get_contents($url,false, $content);
            echo "<h2>Resposta do chefe</h2>";
            echo "<p>$resposta</p>";
        }
        ?>
    </body>
</html>
