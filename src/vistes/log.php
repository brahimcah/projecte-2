<!DOCTYPE html>
<html>
<head>
	<title>Perroqueria Papesos</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content" >
			<form action="index.php" method="POST">
				<input type="hidden" name="r" value="login">
				<img src="img/avatar.svg">
				<h2 class="title">Benvingut</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Usuari o Mail</h5>
           		   		<input type="text" class="input" name="username" >
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Contrasenya</h5>
           		    	<input type="password" class="input" name="password" >
            	   </div>
            	</div>
            	
            	<input type="submit" class="btn" value="Login">
				<a href="index.php?r=regist">No tinc usuari...</a>
            </form>

			
			
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>