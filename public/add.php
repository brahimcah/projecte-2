<?php

require_once "./Database/Database.php";
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, md5($_POST['password']));
$sql = "SELECT username FROM users WHERE username ='" . $username . "'";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_array($query, MYSQLI_ASSOC);
//En cas que la consulta que realitzem tingui algun registre ens saltara una alerta i ens redirigira a la pagina incial.
if ($result) {
    echo "<script>alert('Usuari actualment está fet servir')</script>";
    header("Refresh:0 , url = regist.html");
    exit();
}else{
    // En aquest cas no ens ha retornat ningun registre el qual podrem procedri a comprobar les dades que ens han eviat
    
    
    // Ara estem comprobat si les dades que ens ha arribat no estiguin vuides i eliminarem els espais amb el "trim()"
if ($_POST['username'] != null && $_POST['password'] != null && $_POST['name'] != null && $_POST['cfpassword'] != null && $_POST['cfpassword'] == $_POST['password']) {
    $sql = "INSERT INTO users (username,password,name,surname,telefon,permis) VALUES ('" . trim($_POST['username']) . "','" . trim(md5($_POST['password'])) . "','" . trim($_POST['name']) . "','" . trim($_POST['cognom']) . "','" . trim($_POST['telefon']) . "','" . trim(2) . "')";
    if ($conn->query($sql)) {
        //En el cas de que la sript sql s'hagi processat correctament li sortira al usuari una alerta de JS i li enviarem en el login
        echo "<script>alert('Registre completat exitosament')</script>";
        header("Refresh:0 , url = index.html");
        exit();
    } else {
        //En cas contrari li sortira una alerta indicat que no s'ha completat el registre y li enviara a la pàgina incial
        echo "<script>alert('Registre incomplet')</script>";
        header("Refresh:0 , url = regist.html");
        exit();
    }
} else {
    // 2n. Comprobar que ninguna de les dades intruduides estiguin buides se et tornara la pagina de registre

    echo "<script>alert('Algun camp del formulari esta incorrecte ')</script>";
    header("Refresh:0 , url = regist.html");
    exit();
}
    mysqli_close($conn);
}
