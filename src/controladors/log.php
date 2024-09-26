<?php

function ctrlLog($peticio, $resposta, $contenidor){

    $resposta->setTemplate("log.php");
    
    return $resposta;
}