<?php

//Declaração do vetor
$vetor = Array();

//Atribuição dos valores de um vetor
$vetor[0] = 20;
$vetor[1] = 50;
$vetor[2] = 5;
$vetor[3] = 92;
$vetor[4] = 42;
$vetor[5] = 52;
$vetor[6] = 12;

echo "O tamanho do vetor é: " .count($vetor) . "<br />";


//Exibindo o vetor completo
for($i=0; $i<7; $i++){
    echo $vetor[$i] . "<br />";
}

