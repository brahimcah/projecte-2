<?php
//asociative array with dv info
include "../../src/config.php";

//includes ctr space
include "../../src/controladors/home.php";

//include models
include "../../src/models/entries.php";

$entries = new entries($config);
$r = $_REQUEST["r"];
$username="demo";//get by post from the previos index?
if($r == "") {//on an unexistent r sent to home page
    ctrlHome($entries,$username);//so homepage shows some db info, here we are sending it
}