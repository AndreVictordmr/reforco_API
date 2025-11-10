<?php

    $arquivos = simplexml_load_file('https://www.w3schools.com/xml/cd_catalog.xml');

    echo '<h1> Lista de CD </h1>';
    foreach($arquivos as $cd){
        echo "<p> Titulo: ".$cd->TITLE."</p>";
        echo "<p> Artista: ".$cd->ARTIST."</p>";
        echo "<p> Pais de Origem: ".$cd->COUNTRY."</p>";
        echo "<p> Estudio: ".$cd->COMPANY."</p>";
        echo "<p> Preço: $".$cd->PRICE."</p>";
        echo "<p> Ano de lançameto: ".$cd->YEAR."</p>";
        echo "<br>";
    }