<?php

function Primo($inicial, $final)
{ 
    for ($i = $inicial; $i < $final; $i++) { 
        $primo = true;
        for ($c=2; $c < $i; $c++) { 
            if($i % $c == 0){
                $primo = false; 
            }
        }
        if($primo){
            echo $i . " ";
        }
    }
}
