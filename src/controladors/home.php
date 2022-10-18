<?php

function ctrlHome($entries,$username){
    $list = $entries->list($username);//crida func list de obj entries

    include "../../src/vistes/home.php";//carrega vista
}