<?php
		$Conexion=@mysqli_connect("localhost","root","","administrador");
	if(@mysqli_connect_errno()>0){
		echo("<h1>Error de conexión ".@mysqli_connect_error()."</h1>");
	}
?>