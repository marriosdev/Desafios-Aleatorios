<?php

/**
 * @param int $ano 
 * @return int $seculo
 */
function SeculoAno($ano) 
{
    $seculo = ($ano % 100) == 0 ? $seculo = $ano / 100: intval($ano / 100) + 1;
    return intval($seculo);
}