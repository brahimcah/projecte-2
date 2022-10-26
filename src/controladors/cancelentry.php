<?php

function ctrlCancelEntry($peticio, $resposta, $contenidor){
    $entries = $contenidor->entries();
    $identry = $peticio->get(INPUT_POST, "identry");

    $entries->cancelEntry($identry);
    $resposta->redirect("location: index.php?r=home");

    return $resposta;
}