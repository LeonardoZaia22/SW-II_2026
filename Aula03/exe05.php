<?php 
// TRABALHANDO COM ARRAYS


function mostra_array($vetor){
   foreach($vetor as $valor){
       echo $valor . "<br>";
   }
   echo "<hr>";

}

$numeros = [1, 2, 3, 4, 5];
$numeros2 = [10, 20, 30, 40, 50];
$nomes = ["Neymar", "da", "Silva", "Santos", "Júnior"];

echo mostra_array($numeros);
echo mostra_array($numeros2);
echo mostra_array($nomes);




?>