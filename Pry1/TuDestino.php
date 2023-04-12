<html>
	<head>
		<title>Tu Destino CR</title>
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
	background-image: url(h../LOGO.png);
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
		<div class="bdy">
			<div class="container">
			<div class="card">
				<figure>
					<img src="../playa.jpg">
				</figure>
				<div class="contenido">
					<h3>Playa</h3>
					
					<a href="Playa.php">Resultados</a>
				</div>
			</div>
			
			<div class="card">
				<figure>
					<img src="../montaña.jpg">
				</figure>
				<div class="contenido">
					<h3>Montaña</h3>
					
					<a href="Montaña.php">Resultados</a>
				</div>
			</div>
			
			<div class="card">
				<figure>
					<img src="../ciudad.jpg">
				</figure>
				<div class="contenido">
					<h3>Ciudad</h3>
					
					<a href="Ciudad.php">Resultados</a>
				</div>
			</div>
		</div>
		</div>
		<footer>
			<h3>© 2022 TuDestinoCR, Inc</h3>
			Autor: Esteban Aguilar
		</footer>
	</body>
</html>