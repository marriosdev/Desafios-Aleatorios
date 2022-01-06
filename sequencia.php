<?php

//Funcao de testes
function testes($array, $resultadoEsperado)
{
    $resultado = SequenciaCrescente($array);
    if ($resultado === $resultadoEsperado) {
        echo "Passou! \n";
    } else {
        echo "Nao passou! \n";
    }
}

function  SequenciaCrescente($array)
{
    $sequencial = false;

    for ($i = 0; $i < count($array); $i++) {
        $lista = $array;
        array_splice($lista, $i, 1);
        $listaOriginal = $lista;
        sort($lista);

        $contador = 0;
        $indice = '';
        for ($c = 0; $c < count($lista); $c++) {
            if ($lista[$c] == $listaOriginal[$c]) {
                if(isset($lista[$c+1])) {
                    if($listaOriginal[$c] != $listaOriginal[$c+1]){
                        $contador++;
                    }
                }else{
                    $contador++;
                }
            } 
        }
        if ($contador == count($lista)) {
            $sequencial = true;
        }
    }
    return $sequencial;
}

testes([1, 3, 2, 1],  false);
testes([1, 3, 2],  true);
testes([1, 2, 1, 2],  false);
testes([3, 6, 5, 8, 10, 20, 15], false);
testes([1, 1, 2, 3, 4, 4], false);
testes([1, 4, 10, 4, 2], false);
testes([10, 1, 2, 3, 4, 5], true);
testes([0, -2, 5, 6], true);
testes([1, 2, 3, 4, 5, 3, 5, 6], false);
testes([40, 50, 60, 10, 20, 30], false);
testes([1, 1], true);
testes([1, 2, 5, 3, 5], true);
testes([1, 2, 5, 5, 5], false);
testes([10, 1, 2, 3, 4, 5, 6, 1], false);
testes([1, 2, 3, 4, 3, 6], true);
testes([1, 2, 3, 4, 99, 5, 6], true);
testes([123, -17, -5, 1, 2, 3, 12, 43, 45], true);
testes([3, 5, 67, 98, 3], true);
