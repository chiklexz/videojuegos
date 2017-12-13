<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title> VIDEOJUEGOS </title>
  <link rel="stylesheet" tipe="text/css" href="juegosxboxone.css">
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
    <a id="bienvenido" href="xboxone.php">  <H1>XBOX ONE</H1> </a>

  </header>
  <section id="main-content">
  
    <article>
      <header>
        <CENTER><h1> FIFA SOCCER 18 </h1></CENTER>
        <center><img src="fifa18.jpg" width="500" height="500"></center>
    </header>
    <h1> CARACTERISTICAS:</h1>
      <table width="100" border="1" id="tab">
         <TR> 
         <TD width="50"><center> ID: </center></TD> 
         <TD width="50"><center> 02003   </center></TD> 
         </TR> 
         <TR> 
         <TD width="50"><center> COMPANIA:</center></TD> 
         <TD width="50"><center> ELECTRONIC ARTS </center></TD> 
         </TR>
         <TR> 
         <TD width="50"><center> LAZAMIENTO:</center></TD> 
         <TD width="50"><center> 2017-09-29 </center></TD> 
         </TR>
         <TR> 
         <TD width="50"><center> PLATAFORMA:</center></TD> 
         <TD width="50"><center> XBOX ONE </center></TD> 
         </TR> 
         <TR>
         <TD width="50"><center> GENERO:</center></TD> 
         <TD width="50"><center> DEPORTES </center></TD> 
         </TR> 
         <TR>
         <TD width="50"><center> CLASIFICACION:</center></TD> 
         <TD width="50"><center> EVERYONE </center></TD> 
         </TABLE> 
     </TR>
     <H1> DESCRIPCION:</H1>
<H4>EL DEPORTE REY EA SPORTS™ FIFA 18 borra la línea entre lo virtual y lo real, trayendo a la vida los héroes, equipos y ambientes del deporte rey.<BR>

<BR>MOMENTOS DRAMÁTICOS: Nuevas animaciones de movimientos y de remates desbloquean golpeos y cabeceos más fluidos del balón, que se conjugan para aumentar el potencial de remates increíbles emocionantes, al mismo tiempo que los nuevos controles en los centros proporcionan una variedad de opciones para colocar el esférico en el área. Los centros fluidos, picados al centro del área y al segundo poste aumentan la variedad de entrega para elegir el jugador en ataque. <BR>

<BR>TECNOLOGÍA DE MOVIMIENTO REAL DEL JUGADOR: El adelanto más grande en innovación de juego en la historia de la franquicia, FIFA 18 presenta la Tecnología de Movimiento Real del Jugador, un innovador sistema de animación que desbloquea nuevas dimensiones de velocidad de respuesta y personalidad de los jugadores: ahora Cristiano Ronaldo y otros grandes jugadores se controlan y se mueven exactamente como lo hacen en la cancha real. <BR> 

<BR>ESTILOS DE JUEGO REALES: De el tiquitaca a la presión en alto, los nuevos estilos de equipo colocan en la cancha las tácticas más reconocidas en los mejores clubes del mundo en FIFA 18. Y las nuevas colocaciones de los jugadores te proporcionan más oportunidades en tiempo y espacio para leer el juego, al mismo tiempo que las tácticas mejoradas otorgan a los jugadores mayores opciones ofreciendo carreras en ataque y apoyo continuo con el balón.<BR> 

<BR>ATMÓSFERAS ENVOLVENTES: Las posiciones reales del sol, la graduación atmosférica cinematográfica, los elementos emblemáticos a los lados de la cancha, los escombros en la cancha, las pancartas específicas de estadios y clubes, los comentaristas que se adaptan y los cambios en la calidad de la cancha se unen para traer a la vida las experiencias de futbol más envolventes en FIFA 18. Oye cantos auténticos mientras armas una acción ofensiva, inyecta emoción real cuando marques un gol e incluso interactúa con la multitud mientras celebres. <BR>
</H4><BR>
<H1> GALERIA: </H1>
<H1> !USAS LAYAR APP¡ Escanea la imagen para una experiencia mas interactiva</H1>
<BR>

<div class="w3-content w3-display-container"><center>
  <img class="mySlides" src="fifaar.jpeg" style="width:50%">
  <img class="mySlides" src="fifa2.jpg" style="width:50%">

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