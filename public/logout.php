<?php
	
	//Tornem a inciar la sessió
	session_start();

	//Eliminem les sessions que se havien gaurdat
	session_destroy();

	//Rediriguim el navegador a la pagina principal
	header("Location: index.html");
?>