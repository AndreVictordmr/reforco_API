<?php

    $usuario = simplexml_load_file('dados.xml');

    echo '<h1> Dados do usuário </h1>';

    echo "<h3> Nome: </h3>". $usuario->usuario[0]->nome;
    echo "<h1> Altura: </h3>". $usuario->usuario[0]->altura;
    echo "<h1> Hobbies: </h3>". $usuario->usuario[0]->hobbies->hobbie[0] .",". $usuario->usuario[0]->hobbies->hobbie[1];