<?php
//asociative array with dv info
include "../src/config.php";

//include emeset
include "../src/Emeset/Contenidor.php";
include "../src/Emeset/Peticio.php";
include "../src/Emeset/Resposta.php";

//includes ctr space
include "../src/controladors/home.php";
include "../src/controladors/log.php";
include "../src/controladors/login.php";
include "../src/controladors/regist.php";
include "../src/controladors/register.php";
include "../src/controladors/perfil.php";
include "../src/controladors/updateperfil.php";

//include models
include "../src/models/entries.php";
include "../src/models/users.php";
//include middleware
include "../src/middleware/isAuth.php";

$contenidor = new \Emeset\Contenidor($config);

$peticio = $contenidor->peticio();
$resposta = $contenidor->resposta();

//$entries = new entries($config);
$r = $_REQUEST["r"];
//$username="demo";//get by post from the previos index?

if($r == "") {//on an unexistent r sent to home page
  $resposta = ctrlLog($peticio, $resposta, $contenidor);
}elseif($r ==="home"){
  //ctrlHome($entries,$username);//so homepage shows some db info, here we are sending it
  $resposta = isAuth($peticio, $resposta, $contenidor,"ctrlHome");
}elseif($r ==="login"){
  $resposta = ctrlLogin($peticio, $resposta, $contenidor);
}elseif($r ==="regist"){
  $resposta = ctrlRegist($peticio, $resposta, $contenidor);
}elseif($r ==="register"){
  $resposta = ctrlRegister($peticio, $resposta, $contenidor);
}elseif($r ==="perfil"){
  $resposta = isAuth($peticio, $resposta, $contenidor,"ctrlPerfil");
}elseif($r ==="updateperfil"){
  $resposta = isAuth($peticio, $resposta, $contenidor,"ctrlUpdatePerfil");
}
//var_dump($resposta);
//die;

$resposta->resposta();