<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title> VIDEOJUEGOS </title>
	<link rel="stylesheet" tipe="text/css" href="juegosps4.css">
</head>
<style>
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
<body>
	<!-- cabezera -->
	<header id="main-header">
		<a id="logo-header" href="index.php">
			<H2>
			<span class="site-name"> GAMELAND </span></H2>
		</a>
		<a id="bienvenido" href="ps4.php">  <H1>PS4</H1> </a>

	</header>
	<section id="main-content">
	
		<article>
			<header>
				<CENTER><h1> CRASH BANDICOOT N-SANE TRILOGY </h1></CENTER>
				<center><img src="crash_bandicoot_2 (1).jpg" width="500" height="500"></center>
		</header>
		<h1> CARACTERISTICAS:</h1>
			<table width="100" border="1" id="tab">
         <TR> 
         <TD width="50"><center> ID: </center></TD> 
         <TD width="50"><center> 01001   </center></TD> 
         </TR> 
         <TR> 
         <TD width="50"><center> COMPANIA:</center></TD> 
         <TD width="50"><center> ACTIVISION </center></TD> 
         </TR>
         <TR> 
         <TD width="50"><center> LAZAMIENTO:</center></TD> 
         <TD width="50"><center> 2017-06-30 </center></TD> 
         </TR>
         <TR>	
         <TD width="50"><center> PLATAFORMA:</center></TD> 
         <TD width="50"><center> PS4 </center></TD> 
         </TR> 
         <TR>
         <TD width="50"><center> GENERO:</center></TD> 
         <TD width="50"><center> ACCION </center></TD> 
         </TR> 
         <TR>
         <TD width="50"><center> CLASIFICACION:</center></TD> 
         <TD width="50"><center> EVERYONE </center></TD> 
         </TABLE> 
     </TR>
     <H1> DESCRIPCION:</H1>
     <H4>  Crash Bandicoot®, tu marsupial favorito, está de regreso. Viene mejorado, fascinado y listo para bailar en la colección N. Sane Trilogy. Gira, salta y vuelve a saltar mientras superas los desafíos y las épicas aventuras de los tres juegos originales: Crash Bandicoot®, Crash Bandicoot® 2: Cortex Strikes Back y Crash Bandicoot®: Warped. ¡Revive todos tus momentos favoritos del juego en una gloriosa versión remasterizada en HD y prepárate para dar empuje a tus saltos!<BR>

<BR>● Crash Bandicoot: El Dr. Neo Cortex planea apoderarse del mundo, y para conseguirlo, quiere crear animales modificados genéticamente. Para crear a sus súbditos, Cortex rapta a cuantos animales pueda, y la novia de Crash Bandicoot resulta ser una de las víctimas. Toma el control de Crash mientras corre, salta y gira a lo largo de 30 niveles de intensa acción en tres islas australianas diferentes. Solo tú puedes ayudar a Crash a frustar los planes de Dr. Cortex, y salvar a los animales y su novia. <BR>

<BR>
● Crash Bandicoot Warped ¡Toda una nueva aventura de viajes por el tiempo! Nuevo estilo de juego: bucea, monta en motocicleta o en un bebé de T-Rex, y paséate por un avión mientras vuela. ¡Juega como Coco! Galopa por la Gran Muralla China montado en un tigre o monta en moto de agua... ¡Hay muchas más sorpresas! Pon a prueba tus habilidades con los nuevos movimientos como el súper empujón, súper deslizamiento, salto doble, giro de tornado mortal y la bazuca guiada por láser.</H4><BR>
<H1> GALERIA: </H1>
<H1> !USAS LAYAR APP¡ Escanea la imagen marcada para una experiencia mas interactiva</H1>
<BR>

<div class="w3-content w3-display-container"><center>
  <img class="mySlides" src="crashar.jpeg" style="width:50%">
  <img class="mySlides" src="crash-contraportada-600-mpi_1.jpg" style="width:50%">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</center></div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>


		</article> 
	
	</section> 	