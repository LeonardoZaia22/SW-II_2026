<?php

    $n1 = 4;
    $n2 = 6;
    $n3 = 8;
    $media = ($n1 + $n2 + $n3) / 3;
    if ($media>= 5) {
        echo "Aprovado com média: $media";



    } else 
        if ($media<4) {
            echo "Reprovado com média: $media";
        } else {
        echo "Recuperação";
    }


    echo "<hr>";

    $dia = 7 ;
    switch ($dia) {
        case 1:
            echo "domingo";
            break;
        case 2:
            echo "segunda";
            break;
        case 3:
            echo "terça";
            break;
        case 4:
            echo "quarta";
            break;
        case 5:
            echo "quinta";
            break;
        case 6:
            echo "sexta";
            break;
        case 7:
            echo "sábado";
            break;
        default:
            echo "Dia inválido";
    }

    echo "<hr>";

    for ($i = 0; $i < 10; $i++) {
        echo "$i - ";
    }

    echo "<hr>";

    $a = 1;
    while ($a < 10) {
        echo "$a - ";
        $a++;
    }

      echo "<hr>";

    $b = 1;
    do {
        echo "$b - ";
        $b++;
    } while ($b < 10);

    echo "<hr>";

    $frutas = ["maçã", "banana", "laranja"];
    foreach ($frutas as $fruta) {
        echo "o nome é: $fruta <br  >";
    }
    