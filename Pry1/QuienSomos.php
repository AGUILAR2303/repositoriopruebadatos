<html>
	<head>

		<title>Que Somos</title>
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
	background-image: url(k../LOGO.png);
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

.bdy{
	width: 100%;
	height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
	font-family: sans-serif;
}

.container{
	width: 100%;
	display: flex;
	max-width: 1100px;
}

.card{
	width: 100%;
	margin: 20px;
	border-radius: 6px;
	overflow: hidden;
	background:#ffffff;
	box-shadow: 0px 1px 10px rgba(0,0,0,0.2);
	cursor: default; 
	transition: all 400ms ease;
}

.card:hover{
	box-shadow: 5px 5px 20px rgba(0,0,0,0.4);
	transform: translateY(-3%);
}

.card img{
	width: 100%;
	height: 210px;
}

.card .contenido{
	padding: 10px;
	text-align: center;
}

.card .contenido h3{
	color: #0f5517;
	margin-bottom: 10px;
	align-items: center;
}

.card .contenido a{
	text-decoration: none;
	display: inline-block;
	padding: 10px;
	margin-top: 10px;
	margin-left: 15px;
	color: #0f5517;
	border: 1px solid #0f5517;
	border-radius: 4px;
	transition: all 400ms ease;
	align-items: center;
	
}


footer{
    width: 100%;
    height: 240px;
    background-color: #236c44;
    text-align: center;
    line-height: 100px;
    color: #ffffff;
}

#RegistroU{
	margin-top: 60px;
}

#RegistroU table{
	
	color: #236c44;
	background-color: #ffffff;
	border: 1;
	padding: 10px;
}

.X{
	color: #bcbcbc;
	font-size: small;
}


.contenido{
	display: flex;
	margin: 60px;
}

.articulos{
	width: 60%;
	border-right: solid #ff8c2e 5px;
	padding: 10px;
}

.secciones{
	color: #236c44;
	background-color: #ffffff;
	display: flex;
	text-align: center;
}

.ISomos img{
	width: 300px;
	height: 300px;
	border-radius: 50%;
	margin-left: 100px;
	margin-top: 60px;
}

#QuejasU{
	margin-top: 60px;
}

#QuejasU table{
	color: #236c44;
	background-color: #ffffff;
	border: 1;
	padding: 10px;
}


.ISomo img{
	width: 300px;
	height: 300px;
	margin-left: 100px;
	margin-top: 60px;
}

.secciones2{
	font-family: "Harlow Solid Italic";
	border-left: 5px;
	color: #236c44;
	background-color: #ffffff;
	display: flex;
	text-align: justify;
}

.secciones2 h2{
	font-size: 30px;
}

.secciones2 h2:hover{
	color: #27437f;
	text-transform: uppercase;
}

.secciones2 h3{
	font-size: 20px;
}

.secciones2 h3:hover{
	color: #27437f;
	text-transform: uppercase;
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
		<div class="contenido">
			<div class="articulos">
				<div class="secciones">
					<div>
					<h2>¿Quiénes Somos?</h2>
					<p>TuDestino es una página que apuesta por la tecnología para que viajar sea más fácil. TuDestino conecta a millones de viajeros con experiencias únicas, diversas opciones de transporte y alojamientos increíbles, desde casas hasta hoteles, pasando por otros muchos sitios más dentro de Costa Rica</p>
					<p>
						TuDestino ofrece más de 8 mil de opciones de alojamiento, incluidas más de 6 mil de opciones en casas, apartamentos y otros alojamientos únicos. No importa adónde quieras ir o qué quieras hacer, TuDestino te lo pone fácil y te ofrece un servicio de atención al cliente 24 horas, todos los días.
					</p>
					</div>
				</div>
			</div>
				<div class="ISomos">
					<img src="../Logo223232.png"/>
				</div>
		</div>
		<footer>
			<h3>© 2022 TuDestinoCR, Inc</h3>
			<h3>Autor: Esteban Aguilar</h3>
		</footer>
	</body>
</html>