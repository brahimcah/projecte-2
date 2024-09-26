<?php
    $host = "localhost";
    $user = "test";
    $pass = "test";
    $dbname = "projecte2";
    $conn = new mysqli($host , $user, $pass, $dbname);
    mysqli_query($conn , "SET character_set_result=utf8");
    if($conn->connect_error){
        echo "<script>alert('problema conexion base datos')</script>";
        header("Refresh:0 , url = regist.html");
        exit();
    }
?>