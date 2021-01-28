<!doctype html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>HOME</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<script src="https://kit.fontawesome.com/bf5b664e76.js" crossorigin="anonymous"></script>
		<style>
			@font-face{
				font-family: "logo";
				src:url("../public/fonts/Future Earth v2.ttf");
			}
			@font-face{
				font-family:"fuente-principal";
				src:url("../public/fonts/Brookline.ttf");
			}
			@font-face{
				font-family: "home";
				src:url("../public/fonts/FunSized.ttf");
			}
			@font-face{
				font-family:"promocion";
				src:url("../public/fonts/VTC-GarageSale.ttf");
			}
		
/*---------------- CABECERA ----------------------------------------------------------*/			
/*--------------- SUBMENÚ CABECERA ---------------	-->*/
			.cabecera{
				background: rgba(193,70,161,1);
				background: -moz-linear-gradient(left, rgba(193,70,161,1) 0%, rgba(203,96,179,1) 18%, rgba(168,0,119,1) 38%, rgba(168,0,119,1) 57%, rgba(219,54,164,1) 77%, rgba(219,54,164,1) 100%);
				background: -webkit-gradient(left top, right top, color-stop(0%, rgba(193,70,161,1)), color-stop(18%, rgba(203,96,179,1)), color-stop(38%, rgba(168,0,119,1)), color-stop(57%, rgba(168,0,119,1)), color-stop(77%, rgba(219,54,164,1)), color-stop(100%, rgba(219,54,164,1)));
				background: -webkit-linear-gradient(left, rgba(193,70,161,1) 0%, rgba(203,96,179,1) 18%, rgba(168,0,119,1) 38%, rgba(168,0,119,1) 57%, rgba(219,54,164,1) 77%, rgba(219,54,164,1) 100%);
				background: -o-linear-gradient(left, rgba(193,70,161,1) 0%, rgba(203,96,179,1) 18%, rgba(168,0,119,1) 38%, rgba(168,0,119,1) 57%, rgba(219,54,164,1) 77%, rgba(219,54,164,1) 100%);
				background: -ms-linear-gradient(left, rgba(193,70,161,1) 0%, rgba(203,96,179,1) 18%, rgba(168,0,119,1) 38%, rgba(168,0,119,1) 57%, rgba(219,54,164,1) 77%, rgba(219,54,164,1) 100%);
				background: linear-gradient(to right, rgba(193,70,161,1) 0%, rgba(203,96,179,1) 18%, rgba(168,0,119,1) 38%, rgba(168,0,119,1) 57%, rgba(219,54,164,1) 77%, rgba(219,54,164,1) 100%);
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c146a1', endColorstr='#db36a4', GradientType=1 );
			}
			ul, ol {
				list-style:none;
			}
			.navi li ul li{
				position:relative;
			}
			.navi li ul li ul{
				right:-140px;
				top:0px;
			}
			.navi li:hover > ul {
				display:block;
			}
			.navi li ul {
				display:none;
				position:absolute;
				min-width:180px;
			}
			.navi li a:hover {
				/*background-color: #546270;*/
				color: #0BFF57;
			}
			.navi li a {
				color: black;
				text-decoration:none;
				padding:10px 12px;
				display:block;
			}
			.navi li{
				list-style-type: none;
   				display: inline;
			}
			.navi li a{
				color: white;
			}
			.submenu{
				background-color: #A80077;
			}
/*-----------------------	NEON --------------------------*/
			.neon:hover{
				-webkit-animation: neon 1.5s ease-in-out infinite alternate; 
			}
			@-webkit-keyframes neon {
			  from {
				text-shadow: 0 0 10px #fff,
						   0 0 20px  #fff,
						   0 0 30px  #fff,
						   0 0 40px  #FF9900,
						   0 0 70px  #FF9900,
						   0 0 80px  #FF9900,
						   0 0 100px #FF9900,
						   0 0 150px #FF9900;
			  }to {
				text-shadow: 0 0 5px #fff,
						   0 0 10px #fff,
						   0 0 15px #fff,
						   0 0 20px #FF9900,
						   0 0 35px #FF9900,
						   0 0 40px #FF9900,
						   0 0 50px #FF9900,
						   0 0 75px #FF9900;
			  }
			}
/*-----------------------	NEON --------------------------*/
			.categoria{
				color: white !important;
				font-family: "fuente-principal";
				text-transform: uppercase;
				font-size: 1.2em;
				padding-top: 1em;
			}
/*		-------------------------------------*/
			.link{
				padding-top: 0;
				color: white !important;
				font-family: "fuente-principal";
				text-transform: uppercase;
				font-size: 1.2em;
				padding: 0.5em;
			}
			.logo{
				font-family: "logo";
				color:white;
				margin-right: 5em;
				margin-left: 3em;
				
			}
			.buscar{
				color: white;
				font-family: "fuente-principal";
				text-transform: uppercase;
			}
			.home{
				font-family: "home";
				color: greenyellow;
			}
/*------------------------	CABECERA  ----------------------------*/
/*------------------------   CUERPO  -------------------------------------------------------*/
			
			body{
				background-image: url("../public/images/fondos/fondo_3.gif");
			}
			
/*-----------------  S L I D E R -------------------------------*/
		
			
/*----------------- S L I D E R -------------------------------*/
			.contenido{
				/*background-color: white;*/
				padding-top: 1em;
				padding-bottom: 1em;
				background-color: black;
				
			}
			.contenido-categorias{
				padding-top: 1em;
				padding-bottom: 1em;
				background-color: black;
			}
			
			.imagecarousel{
				position: relative;
				width: 70%;
			}
			d-block{
				max-height: 300px;
			}
			.content{
				margin-top: 12em;
			}
			.encabezado{
				background-color: #A80077 !important;
				border: 2px black !important;

			}
			.texto1{
				color:white;
			}
			.lista{
				background-color: #D16598 !important;
				color: white;
				border: 2em black !important;
				
			}
			.lista:hover{
				background-color: white !important;
				
			}
/*------------------- 2ª F I L A -----------------------------------*/
			.fila2{
				background-color: black;
			}
			.tarjeta{
				background-color: black;
				padding-top: 3em,
			}
			.promocion{
				font-family: "promocion";
				font-size: 2.7em;
				color: white;
				font-weight: bold;
				
			}
			.rosa{
				color: hotpink;
			}
			.rosa:hover{
				color: white;
			}
/*----------- footer -------------------------------------*/
			.footer{
				  height: 5em;  
				  width:100%; 
				  position: fixed; 
				  bottom: 0; 
				  background: rgba(193,70,161,1);
				  background: -moz-linear-gradient(left, rgba(193,70,161,1) 0%, rgba(203,96,179,1) 18%, rgba(168,0,119,1) 38%, rgba(168,0,119,1) 57%, rgba(219,54,164,1) 77%, rgba(219,54,164,1) 100%);
				  background: -webkit-gradient(left top, right top, color-stop(0%, rgba(193,70,161,1)), color-stop(18%, rgba(203,96,179,1)), color-stop(38%, rgba(168,0,119,1)), color-stop(57%, rgba(168,0,119,1)), color-stop(77%, rgba(219,54,164,1)), color-stop(100%, rgba(219,54,164,1)));
				  background: -webkit-linear-gradient(left, rgba(193,70,161,1) 0%, rgba(203,96,179,1) 18%, rgba(168,0,119,1) 38%, rgba(168,0,119,1) 57%, rgba(219,54,164,1) 77%, rgba(219,54,164,1) 100%);
				  background: -o-linear-gradient(left, rgba(193,70,161,1) 0%, rgba(203,96,179,1) 18%, rgba(168,0,119,1) 38%, rgba(168,0,119,1) 57%, rgba(219,54,164,1) 77%, rgba(219,54,164,1) 100%);
				  background: -ms-linear-gradient(left, rgba(193,70,161,1) 0%, rgba(203,96,179,1) 18%, rgba(168,0,119,1) 38%, rgba(168,0,119,1) 57%, rgba(219,54,164,1) 77%, rgba(219,54,164,1) 100%);
				  background: linear-gradient(to right, rgba(193,70,161,1) 0%, rgba(203,96,179,1) 18%, rgba(168,0,119,1) 38%, rgba(168,0,119,1) 57%, rgba(219,54,164,1) 77%, rgba(219,54,164,1) 100%);
				  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c146a1', endColorstr='#db36a4', GradientType=1 );
			}
			i{
				color: white;
			}
			.textoFooter{
				color: white;
			}
		</style>
		<script>
		
		</script>
	</head>
	<body>
		<div class="container-fluid">
			
<!----------------------------	C A B E C E R A  ------------------------->
			
			<div class="row-fluid mb-5">
				<nav class="navbar cabecera navbar-expand-md navbar-dark bg-dark">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
						<span class="navbar-toggler-icon"></span>
					</button>
					<h3 class="home neon">HOME</h3>
					<div class="collapse navbar-collapse" id="menu">
						<nav class="navbar-nav">
							<ul class="navi">
								<li><a class="nav-link neon categoria" href="#">Categorías</a>
									<ul>
										<li><a class="submenu" href="{{ url('/telefonia/T') }}">Telefonía </a></li>
										<li><a class="submenu" href="{{ url('/informatica/I') }}">Informática </a></li>
										<li><a class="submenu" href="{{ url('/imagen/S') }}">Imagen y Sonido</a></li>
										<li><a class="submenu" href="{{ url('/videojuegos/V') }}">Videojuegos</a></li>
										<li><a class="submenu" href="{{ url('/hogar/H') }}">Hogar</a></li>
									</ul>
								</li>
							</ul>
								<a class="nav-link neon link" href="#">Carro de Compra</a>
								<a class="nav-link neon link" href="{{ url('/home') }}">Home</a>
								<a class="nav-link neon link" href="#">Sobre Nosotros</a>
							
						</nav>
					</div>
					<span class="logo neon"><a href="{{ route('home') }}">Diversa Electronics</a></span>
					<ul class="navi">
						<li><a class="nav-link neon categoria" href="#">{{$usuario}}</a>
							<ul>
								<li><a class="submenu" href="#">Mi perfil </a></li>
								<li><a class="submenu" href="#">Mis pedidos </a></li>
								<li><a class="submenu" href="#">Carrito </a></li>
								<li><a class="submenu btn btn-danger" href="{{ url('/logout') }}">Cerrar Sesion</a>  </li>
							</ul>
						</li>
					</ul>
					
					<form class="form-inline">
						<input class="form-control form-control-sm mr-md-2" type="search" placeholder="Buscar" />
						<input class="btn buscar bg-primary" type="submit" value="Buscar">
					</form>

				</nav>
			</div>	

<!-- ---------------------- C O N T E N I D O   P R I N C I P A L --------------------------------->
			
				<div class="row content no-gutters">
						<div class="col-md-2 contenido-categorias   ">
							<div class="list-group">
							  <a href="#" class="list-group-item encabezado list-group-item-action active">
								CATEGORÍAS
							  </a>
							  <a href="{{ url('/telefonia/T') }}" class="list-group-item lista list-group-item-action">Telefonía</a>
							  <a href="{{ url('/informatica/I') }}" class="list-group-item lista list-group-item-action">Informática</a>
							  <a href="{{ url('/imagen/S') }}" class="list-group-item lista list-group-item-action">Imagen y Sonido</a>
							  <a href="{{ url('/videojuegos/V') }}" class="list-group-item lista list-group-item-action">Videojuegos</a>
							  <a href="{{ url('/hogar/H') }}" class="list-group-item lista list-group-item-action">Hogar</a>
							</div>
						</div>
						<div class="col-md-1 contenido"></div>
						<div class="col-md-3 contenido ">
							<p><h3 class="text-center texto1">El mejor catálogo de productos electrónicos </h3></p><br/>
							<p><h5 class="text-center texto1">Smartphones, Notebooks, Home Cinema, Periféricos Gaming, Videojuegos... y muchos más artículos! </h5></p>
						</div>
						<div class="col-md-1 contenido"></div>
						<div class="col-md-2 contenido">
							<div id="carousel-1" class="carousel slide contenido-der"	data-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="../public/images/slider/01.png" class="d-block mw-120" alt="">
									</div>
									<div class="carousel-item">
										<img src="../public/images/slider/02.png" class="d-block mw-100" alt="">
									</div>
									<div class="carousel-item">
										<img src="../public/images/slider/03.png" class="d-block mw-100" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 contenido">
							<p><h4 class="text-center texto1">Todo esto solo en</h4><h4 class="logo neon">Diversa Electronics</h4> </p>
						</div>
				</div>
			
<!--------------------------------2 ª   F I L A ------------------------------------------->
		
				<div class="row no-gutters">
					<div class="col-md-2 fila2">
					<img class="imagenPromocion" src="../public/images/product/oferta.png" alt="oferta">
					<img class="imagenPromocion" src="../public/images/product/oferta.png" alt="oferta">
					</div>
					<div class="col-md-2 fila2">
						<div class="card tarjeta" style="width: 18rem;">
						  <img class="card-img-top" src="../public/images/product/roomba.png" alt="roomba">
						  <div class="card-body">
							<h5 class="card-title rosa">Aspirador Inteligente Roomba</h5>
							<p class="card-text rosa"> El robot aspirador iRobot Roomba 960, por su diseño, potencia, efectividad y relación calidad precio, es el mejor robot de limpieza que puedes elegir para la limpieza de tu hogar</p>
							<a href="#" class="btn btn-primary">Al Carrito!</a>
						  </div>
						</div>
					</div>
					<div class="col-md-2 fila2">
						<div class="card tarjeta" style="width: 18rem;">
						  <img class="card-img-top" src="../public/images/product/televisorSamsung.png" alt="televisorSamsung">
						  <div class="card-body">
							<h5 class="card-title rosa">SAMSUNG UE60KU6020</h5>
							<p class="card-text rosa">Nueva serie de televisores Samsung 4k UHD con 60 pulgadas de pantalla. Lo ideal para traer el cine a casa en esta cuarentena. </p>
							<a href="#" class="btn btn-primary">Al Carrito!</a>
						  </div>
						</div>
					</div>
					<div class="col-md-2 fila2">
						<div class="card tarjeta" style="width: 18rem;">
						  <img class="card-img-top" src="../public/images/product/MI-8PRO.png" alt="mi-9">
						  <div class="card-body">
							<h5 class="card-title rosa">Xiaomi Mi-9 Pro</h5>
							<p class="card-text rosa"> Xiaomi Mi 9 Pro con cámara dual con IA y píxeles de 1,4 μm al mejor precio de España, ¡descubre todas sus características y su pantalla AMOLED full-screen. Un gama alta a precio de gama media.</p>
							<a href="#" class="btn btn-primary">Al Carrito!</a>
						  </div>
						</div>
					</div>
					<div class="col-md-2 fila2">
						<div class="card tarjeta" style="width: 18rem;">
						  <img class="card-img-top" src="../public/images/product/FinalFantasyVII.png" alt="FFVII">
						  <div class="card-body">
							<h5 class="card-title rosa">Final Fantasy VII</h5>
							<p class="card-text rosa">El remake más esperado de todos los tiempos. Vuelve la joya que conquisto la infancia de tantos niños. Final Fantasy VII REMAKE para ps4. Vuelve a ponerte en la piel de Cloud Strife y derrota a Shinra en la lucha por salvar el planeta.</p>
							<a href="#" class="btn btn-primary">Al Carrito!</a>
						  </div>
						</div>
					</div>
					<div class="col-md-2 fila2">
						<div class="card tarjeta" style="width: 18rem;">
						  <img class="card-img-top" src="../public/images/product/HomeCinema.png" alt="HomeCinema">
						  <div class="card-body">
							<h5 class="card-title rosa">Home Cinema Sony Bdv</h5>
							<p class="card-text rosa">Sony nos trae el mejor sonido envolvente 7.1 para poder VIVIR las películas como en el cine pero, sin salir de casa. No tendrás que preocuparte de la instalación, Diversa Electronics se encarga de todo.</p>
							<a href="#" class="btn btn-primary">Al Carrito!</a>
						  </div>
						</div>
					</div>
				</div>	
		
<!----------------------------- 3ª  F I L A ------------------------------------------------------------------------>	
		
			<div class="row no-gutters mb-5">
					<div class="col-md-2 fila2">
					<img class="imagenPromocion" src="../public/images/product/oferta.png" alt="oferta">
					<img class="imagenPromocion" src="../public/images/product/oferta.png" alt="oferta">
					</div>
					<div class="col-md-2 fila2">
						<div class="card tarjeta" style="width: 18rem;">
						  <img class="card-img-top" src="../public/images/product/iphoneXS.png" alt="iphoneX">
						  <div class="card-body">
							<h5 class="card-title rosa">Iphone XS</h5>
							<p class="card-text rosa">El iPhone XS Max presenta una pantalla Super Retina de 6.5 pulgadas con paneles OLED personalizados para una pantalla HDR que proporciona la mejor precisión de color de la industria.</p>
							<a href="#" class="btn btn-primary">Al Carrito!</a>
						  </div>
						</div>
					</div>
					<div class="col-md-2 pt-5 fila2">
						<div class="card tarjeta" style="width: 18rem;">
						  <img class="card-img-top" src="../public/images/product/tecladoGlAB.png" alt="KEYZ Iridium">
						  <div class="card-body">
							  <br/>
							<h5 class="card-title rosa">Teclado KEYZ Iridium</h5>
							<p class="card-text rosa">El KEYZ Iridium ofrece una membrana táctil ultra rápida para un agarre inmediato. Gracias a su retroiluminación RGB puedes personalizar tu teclado y darle el mejor efecto de iluminación. Diseñado para jugadores exigentes.</p>
							<a href="#" class="btn btn-primary">Al Carrito!</a>
						  </div>
						</div>
					</div>
					<div class="col-md-2 fila2">
						<div class="card tarjeta" style="width: 18rem;">
						  <img class="card-img-top" src="../public/images/product/65-UK6350-4K.png" alt="LG 65">
						  <div class="card-body">
							<h5 class="card-title rosa">Televisor LG 65″ 4K</h5>
							<p class="card-text rosa">El televisor LG UHD Mantiene el color con mucha más precisión y permite disfrutar de imágenes asombrosas y vibrantes, sin importar el lugar o lado donde estés sentado.</p>
							<a href="#" class="btn btn-primary">Al Carrito!</a>
						  </div>
						</div>
					</div>
					<div class="col-md-2 fila2">
						<div class="card tarjeta" style="width: 18rem;">
						  <img class="card-img-top" src="../public/images/product/TorreLynx.png" alt="LYNX">
						  <div class="card-body">
							<h5 class="card-title rosa">Torre Lynx</h5>
							<p class="card-text rosa">Una espectacular semitorre con un frontal muy marcado y característico que incorpora la última tecnología RGB y un panel lateral de cristal templado full view que recorre la torre a lo largo de todo el chasis.</p>
							<a href="#" class="btn btn-primary">Al Carrito!</a>
						  </div>
						</div>
					</div>
					<div class="col-md-2 fila2">
						<div class="card tarjeta" style="width: 18rem;">
						  <img class="card-img-top" src="../public/images/product/CascosG-lab.png" alt="mi-9">
						  <div class="card-body">
							  <br/>
							<h5 class="card-title rosa">Logitech G Pro Gaming.</h5>
							<p class="card-text rosa">Estos auriculares integran un sistema de controladores Logitech G Pro-G para un audio superior, logrando un mayor acentuamiento de los graves. Además montan un micrófono de condensador profesional y extraíble para lograr comunicaciones nítidas en las partidas.</p>
							<a href="#" class="btn btn-primary">Al Carrito!</a>
						  </div>
						</div>
					</div>
				</div>
		
				<div class="row mt-5 mb-5">
					<div class="col-md-12"></div>
				</div>
		
<!---------------- P I E   D E   P Á G I N A --------------------------------------------------------->
			<div class="row footer mt-5">
				<div class="col-md-5 iconos">
					<a href="#"><i class="fab fa-facebook fa-4x"></i></a>
					<a href="#"><i class="fab fa-twitter-square fa-4x pl-5"></i></a>
					<a href="#"><i class="fab fa-instagram fa-4x pl-5"></i></a>
					<a href="#"><i class="fab fa-pinterest fa-4x pl-5"></i></a>
				</div>
				<div class="col-md-4 justify-content-center textoFooter">
					<p>Si desea ponerse en contacto,
					Escriba un correo a la siguiente dirección:
					correofalso.dediversa@diversa.com</p>
				</div>
				<div class="col-md-3">
					<p class="logo neon">Diversa Electronics</p>
				</div>
			</div>
		
		</div>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	</body>
</html>
                
                  
