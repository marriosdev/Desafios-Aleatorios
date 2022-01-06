<?php

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