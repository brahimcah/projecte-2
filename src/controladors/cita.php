<?php

function ctrlCita($peticio, $resposta, $contenidor){
    $resposta->setTemplate("cita.php");

    return $resposta;
}