<?php

function ctrlRegist($peticio, $resposta, $contenidor){
    $resposta->setTemplate("register.php");
    
    return $resposta;
}