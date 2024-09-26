<?php

function ctrlRegister($peticio, $resposta, $contenidor){
    
    $users = $contenidor->users();
    $username = $peticio->get(INPUT_POST, "username");
    $password = $peticio->get(INPUT_POST, "password");
    $cfpassword = $peticio->get(INPUT_POST, "cfpassword");
    $name = $peticio->get(INPUT_POST, "name");
    $surename = $peticio->get(INPUT_POST, "surename");
    $phone = $peticio->get(INPUT_POST, "telefon");
    $user = $users->getUser($username);
    //print_r(count($user));
    //var_dump($user);
    if(!$user){
        if($password===$cfpassword){
            $users->insertUser($username,$password,$name,$surename,$phone);

            $resposta->redirect("location: index.php");
        }else{
            $resposta->redirect("location: index.php?r=regist");
            $misatgeError ="Les contraseñes no coincideixen";
            $resposta->setSession("error", $misatgeError);
        }
    }else{

        $resposta->redirect("location: index.php?r=regist");
        $misatgeError ="El nom d' usuari ja esta en us";
        $resposta->setSession("error", $misatgeError);
        
    }
    return $resposta;
}