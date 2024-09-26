<?php

function ctrlUpdatePerfil($peticio, $resposta, $contenidor){
    $users = $contenidor->users();
    $user = $peticio->getRaw("SESSION", "user");
    $username = $user["username"];
    $new = $peticio->get(INPUT_POST, "new"); //$post["title"];
    $originvalue = $peticio->get(INPUT_POST, "originvalue"); // $post["content"];
    if($originvalue=="password"){
        $new=md5($new);
    }
    
    $users->updateUser($originvalue,$new,$username);
    $resposta->redirect("location: index.php?r=perfil");

    return $resposta;
}