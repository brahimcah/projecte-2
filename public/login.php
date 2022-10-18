<?php

    //Comprobem que les dades que s'han enviat no estiguin en blanc
    if(trim($_POST['username'])== null || trim($_POST['password']) == null){
        /**
         * En el cas de que estiguin en blanc el que fara es enviar un missatge de JS
         * i renviara el navegador a la pagina principal el qual tindra que tornara intruduir les dades
        */
        echo "<script>alert('Hi ha algun camp vuit, torna a revisar')</script>";
        header("Refresh:0 , url =  index.html");
        exit();

    }
    else{

         require_once "./Database/Database.php";
         $username = mysqli_real_escape_string($conn,$_POST['username']);
         $password = mysqli_real_escape_string($conn,md5($_POST['password']));
         $sql = "SELECT username,password FROM users WHERE username ='". $username ."' and password = '".$password."'";
         $query = mysqli_query($conn,$sql);
         $result = mysqli_fetch_array($query , MYSQLI_ASSOC);
        
         echo $result;
        
         if(!$result){
             //En el cas de que el resultat sigui incorrecte, traura un missatge en pantalla
             // I et tornara en el menu de inici
             echo "<script>alert('Usuari o Contrasenya Inválida')</script>";
             header("Refresh:0 , url = logout.php");
             exit();


         }else{

             //Busquem quin tipus de permis te el usuari
             $per = "SELECT permis FROM users WHERE username ='". $username ."'";
             $quer = mysqli_query($conn,$per);
             while($rows=mysqli_fetch_array($quer)){
                $permi = $rows[0];
               
            }
            
            /**
             * Tipo de usuario segons la registre permis
             * 0 - Admin | 1 - Perroquer | 2 - Client
             */

            if($permi == 0){
                $_SESSION['username'] = $result['username'];
                header("Location: .\admin");
                session_write_close();
            }elseif ($permi == 1) {
                session_start();
                $_SESSION['username'] = $result['username'];
                header("Location: .\shop");
                session_write_close();
            }elseif($permi == 2){
                session_start();
                $_SESSION['username'] = $result['username'];
                header("Location: .\client");
                session_write_close();
            }
            
            echo "TOT OK";
             
        }
    }
    mysqli_close($conn);
?>