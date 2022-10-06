<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "projecte2";
    $conn = new mysqli($host , $user, $pass, $dbname);
    mysqli_query($conn , "SET character_set_result=utf8");
    if($conn->connect_error){
        header("Refresh:0 , url = regist.html");
        exit();
    }
?>