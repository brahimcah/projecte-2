<?php

function ctrlPerfil($peticio, $resposta, $contenidor){
    $users = $contenidor->users();
    $user = $peticio->getRaw("SESSION", "user");
    $list = $users->getUser($user["username"]);
    $resposta->set("list", $list);

    $resposta->setTemplate("perfil.php");

    return $resposta;
}

