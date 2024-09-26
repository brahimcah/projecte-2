<?php

function ctrlRegist($peticio, $resposta, $contenidor){

    $error = $peticio->get("SESSION", "error");
    
    $resposta->set("error", $error);

    $resposta->setTemplate("register.php");
    
    return $resposta;
}