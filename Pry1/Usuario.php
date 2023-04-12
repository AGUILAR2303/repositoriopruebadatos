<?php
	include_once("DBConexion.php");
	$Op=0;/* Identificador de operación, si voy a insertar o eliminar, etc...*/
	$Resp=FALSE;
	
	$ID="";
	$Nombre="";
	$Apellidos="";
	$Email="";
	$Numerotel="";
	$Password="";
	
	if(isset($_POST["btnEnviar"])){
		$ID=$_POST["txtID"];
		$Nombre=$_POST["txtNombre"];
		$Apellidos=$_POST["txtApellidos"];
		$Email=$_POST["txtEmail"];
		$Numerotel=$_POST["txtNumerotel"];
		$Password=$_POST["txtPassword"];
		
		$Cmm="INSERT INTO tipousuario(Nombre,Apellidos,Email,Numerotel,Password)
			VALUES('$Nombre','$Apellidos','$Email','$Numerotel','$Password')";
			
		$Resp= @mysqli_query($Conexion, $Cmm);
		
		if(@mysqli_errno($Conexion)>0){
			echo(@mysqli_error($Conexion));
		}
		else{
			$Op=1;
			}
		}
?>
<html>
	<head>
		<title>Usuario</title>
	<style>
		body{
	font-family: "Arial Black";
	padding: 0;
	margin: 0;
	background-image: url('../fondo.jpg');
	background-repeat: no-repeat;
	background-size: cover;
}
.Titulo{
	width: 100%;
	background-color: #ffffff;
	height: 300px;
    line-height: 100px;
}

.Titulo img{
	display: block;
	width: 400px;
	height: 250px;
	background-repeat: no-repeat;
	background-image: url('../LOGO.png');
	margin-left: auto;
	margin-right: auto;
	margin-top: auto;
}

.Titulo img:hover{
	opacity: 0.7;
}

nav ul{
	background-color: #ffffff;
	width: 100%;
	list-style-type: none;
	text-align: center;
}

nav li{
	display: inline-flex;
}

nav a{
	text-decoration: none;
	color: #236c44;
	padding: 8px;
	width: 150px;
}

nav a:hover{
	color: #27437f;
	text-transform: uppercase;
}

form{
	padding-top: 100px;
	padding-left: 470px;
	padding-bottom: 100px;
}

footer{
    width: 100%;
    height: 240px;
    background-color: #236c44;
    text-align: center;
    line-height: 100px;
    color: #ffffff;
}
	</style>
	</head>
	<body>
		<div class="Titulo">
			<img src="../LOGO.png"/>
		</div>
		<nav>
			<ul>
				<li><a href="TuDestino.php">Home</a></li>
				<li><a href="Usuario.php">Usuario</a></li>
				<li><a href="QuienSomos.php">¿Quiénes Somos?</a></li>
				<li><a href="Políticas.php">Políticas y Condiciones</a></li>
				<li><a href="Ayuda.php">Ayuda</a></li>
			</ul>
		</nav>
		<form id="frmTipoUsuario" name="frmTipoUsuario" method="post" action="Usuario.php">
			<table border="1">
				<tr>
					<td colspan="2" align="center"><h1>Registro de Usuario</h1></td>
				</tr>
				<tr>
					<td>ID:</td>
					<td>
						<input type="text" name="txtID" id="txtID"/>
					</td>
				</tr>
				<tr>
					<td>Nombre:</td>
					<td>
						<input type="text" name="txtNombre" id="txtNombre"/>
					</td>
				</tr>
				<tr>
					<td>Apellidos:</td>
					<td>
						<input type="text" name="txtApellidos" id="txtApellidos"/>
					</td>
				</tr>
				<tr>
					<td>Email:</td>
					<td>
						<input type="text" name="txtEmail" id="txtEmail"/>
					</td>
				</tr>
				<tr>
					<td>Numero de Teléfono:</td>
					<td>
						<input type="text" name="txtNumerotel" id="txtNumerotel"/>
					</td>
				</tr>
				<tr>
					<td>Password:</td>
					<td>
						<input type="password" name="txtPassword" id="txtPassword"/>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="btnEnviar" id="btnEnviar" value="Enviar"/>
					</td>
				</tr>
			</table>
		</form>
			<?php
			if($Op==1){
				echo("<h1>Se envió correctamente</h1>");
			}
		?>
			<footer>
				<h3>© 2022 TuDestinoCR, Inc</h3>
				<h3>Autor: Esteban Aguilar</h3>
			</footer>
	</body>
</html>