<?php

function ctrlEntries($entries){

    $list = $entries->list(1);

    include "../../src/vistes/entries.php";
}