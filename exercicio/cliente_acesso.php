<?php
    $url = "http://localhost/reforco_api/exercicio/api_secreta.php?info=sim";
    $respota = file_get_contents($url);
    


       
            
            $mensagem=trim($_POST['chave']);
            $conect =[
                'http'=>[
                    'header'=>"Content-type: application/json charset= UTF-8\r\n",
                    'method'=>"POST",
                    'content'=>json_encode($mensagem)
                ]
            ];

            $content =stream_context_create($conect);

            $resposta = file_get_contents($url,false, $content);
            echo "<h2>Resposta do chefe</h2>";
            echo "<p>$resposta</p>";
       
        ?>
    </body>
</html>