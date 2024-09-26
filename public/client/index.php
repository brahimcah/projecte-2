<?php
//asociative array with dv info
include "../../src/config.php";

//include emeset
include "../../src/Emeset/Contenidor.php";
include "../../src/Emeset/Peticio.php";
include "../../src/Emeset/Resposta.php";

//includes ctr space
include "../../src/controladors/home.php";

//include models
include "../../src/models/entries.php";
include "../../src/models/users.php";
//include middleware
include "../../src/middleware/isAuth.php";

$contenidor = new \Emeset\Contenidor($config);

$peticio = $contenidor->peticio();
$resposta = $contenidor->resposta();

//$entries = new entries($config);
$r = $_REQUEST["r"];
$username="demo";//get by post from the previos index?

if($r == "") {//on an unexistent r sent to home page
  //ctrlHome($entries,$username);//so homepage shows some db info, here we are sending it
  $resposta = CtrlHome($peticio, $resposta, $contenidor);
}