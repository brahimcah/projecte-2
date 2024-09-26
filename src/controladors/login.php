<?php

function ctrlLogin($peticio, $resposta, $contenidor){
    
    $users = $contenidor->users();

    $name = $peticio->get(INPUT_POST, "username");
    $password = md5($peticio->get(INPUT_POST, "password"));
    

    
    $user = $users->getUser($name);
    //var_dump($user);
    //die;
    if($user === false) {
        $resposta->setSession("logat", false);
        $resposta->redirect("location: index.php");
        
    } else {
        if($password === $user["password"]) {
            $resposta->setSession("logat", true);
            $resposta->setSession("user", $user);
            $resposta->redirect("location: index.php?r=home");
            
        } else {
            $resposta->setSession("logat", false);
            $resposta->redirect("location: index.php");
            
        }        
    }
    return $resposta;

}