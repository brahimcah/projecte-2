<?php

include "../../src/config.php";

//includes ctr space
include "../../src/controladors/home.php";

//include models
include "../../src/models/entries.php";

$entries = new entries($config);
$r = $_REQUEST["r"];
if($r == "") {
    ctrlHome();
}