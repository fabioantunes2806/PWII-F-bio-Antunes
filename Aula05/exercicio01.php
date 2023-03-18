<?php

//declarando o vetor
$vetor = Array();

//atribuindo os valores
$vetor[0] = 1;
$vetor[1] = 2;
$vetor[2] = 3;
$vetor[3] = 4;
$vetor[4] = 5;
$vetor[5] = 6;
$vetor[6] = 7;
$vetor[7] = 8;
$vetor[8] = 9;
$vetor[9] = 10;


//exibindo o vetor e fazendo somar números pares

//Exibindo o vetor completo
for($i=0; $i<7; $i+=2){
    echo $vetor[$i] . "<br />";
}




//exibindo o vetor e fazendo somar números pares
/*$soma = 0;
$total = 0;

for($i=0; $i<10; $i+=2){

    $total = $soma + $i;
    echo "<p>$soma + $vetor[$i] é igual a: $total . </p>";
    $soma = $total;
}*/

/*
$soma = 0;
        $total = 0;
        for($i=0; $i<=100; $i++){
            
            $total = $soma + $i;
            echo "<p>$soma + $i é igual a: $total</p>";
            $soma = $total; 
        }*/