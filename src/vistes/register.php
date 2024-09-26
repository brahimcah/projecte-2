<!DOCTYPE html>
<html>
<head>
	<title>Perruqeria Papesos</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php if (isset($error) && $error != "") {?>
          <div class="alert alert-danger" role="alert">
                <?php echo $error;?>
          </div>
<?php }?>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content" >
		
			<form action="index.php?r=register" method="POST">
				<h2 class="title">Registrat</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Usuari</h5>
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
				<div class="input-div pass">
					<div class="i"> 
						 <i class="fas fa-lock"></i>
					</div>
					<div class="div">
						 <h5>Repeteix la Contrasenya</h5>
						 <input type="password" class="input" name="cfpassword" >
				 </div>
			  </div>
				<div class="input-div pass">
					<div class="i"> 
						 <i class="fas fa-user"></i>
					</div>
					<div class="div">
						 <h5>Nom</h5>
						 <input type="text" class="input" name="name" >
				 </div>
			  </div>
			  <div class="input-div pass">
				<div class="i"> 
					 <i class="fas fa-user"></i>
				</div>
				<div class="div">
					 <h5>Cognom</h5>
					 <input type="text" class="input" name="surename" >
			 </div>
		  </div>
		  <div class="input-div pass">
				<div class="i"> 
					<i class="fas fa-phone "></i>
				</div>
				<div class="div">
					<h5>Telefon</h5>
					<input type="number" minlength="9" maxlength="9" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="input" name="telefon" >
				</div>
	  		</div>

            	
            	<input type="submit" class="btn" value="Registrem">
				
            </form>

			
			
        </div>
    </div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
