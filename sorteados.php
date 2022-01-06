<?php

// Lista de numeros sorteados 
$sorteados = [];

// Sorteando os numeros
while(true){
    array_push($sorteados, rand(1, 9));
    if(count($sorteados) == 20){
        break;
    }
}

$naoRepetidos = [];

for ($i = 0; $i < count($sorteados); $i++) { 
    $contador = 0;
    for ($c=0; $c < count($sorteados); $c++) { 
        if($sorteados[$i] == $sorteados[$c]) {
            $contador++;
        }
    }
    if($contador == 1) {
        array_push($naoRepetidos, $sorteados[$i]);
    }
}

echo "Array sorteado = ";
foreach($sorteados as $item) {
    echo "[{$item}]";
}
echo "\nOs números que não se repetem são: ";
foreach($naoRepetidos as $item) {
    echo "[{$item}]";
}