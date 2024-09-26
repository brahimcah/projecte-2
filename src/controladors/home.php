<?php

function ctrlHome($peticio, $resposta, $contenidor){
    //$list = $entries->list($username);//crida func list de obj entries
    //include "../src/vistes/home.php";//carrega vista

    $entries = $contenidor->entries();

    $user = $peticio->getRaw("SESSION", "user");


    $list = $entries->list($user["username"]);

    //print_r($_SESSION);
    //print_r($user);
    //print_r($list);
    //die;
    $resposta->set("list", $list);

    $resposta->setTemplate("home.php");

    return $resposta;
}