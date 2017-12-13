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
        <CENTER><h1> MINECRAFT </h1></CENTER>
        <center><img src="minecraft.jpg" width="500" height="500"></center>
    </header>
    <h1> CARACTERISTICAS:</h1>
      <table width="100" border="1" id="tab">
         <TR> 
         <TD width="50"><center> ID: </center></TD> 
         <TD width="50"><center> 02002   </center></TD> 
         </TR> 
         <TR> 
         <TD width="50"><center> COMPANIA:</center></TD> 
         <TD width="50"><center> MICROSOFT </center></TD> 
         </TR>
         <TR> 
         <TD width="50"><center> LAZAMIENTO:</center></TD> 
         <TD width="50"><center> 2014-11-18 </center></TD> 
         </TR>
         <TR> 
         <TD width="50"><center> PLATAFORMA:</center></TD> 
         <TD width="50"><center> XBOX ONE </center></TD> 
         </TR> 
         <TR>
         <TD width="50"><center> GENERO:</center></TD> 
         <TD width="50"><center> AVENTURA </center></TD> 
         </TR> 
         <TR>
         <TD width="50"><center> CLASIFICACION:</center></TD> 
         <TD width="50"><center> EVERYONE </center></TD> 
         </TABLE> 
     </TR>
     <H1> DESCRIPCION:</H1>
     <H4>¡Despierta tú creatividad y empieza a construir!<BR>

<BR>Con una estupenda temática de construcción de tipo mundo abierto o “sandbox” Minecraft es el juego que estabas esperando ya que en esta ocasión llega para quedarse.<BR>

<BR>Minecraft se destaca no sólo por la forma en que inspira creativamente, sino también por su estética única. Ningún otro videojuego ha desatado la creatividad como Minecraft. <BR>


<BR>Puedes pasar muchas horas buscando tesoros, saltando lejos en bloques y reuniendo los materiales necesarios para completar la próxima obra maestra. También pasarás la misma cantidad de horas explorando, espeleología y en tú camino te enfrentarás a monstruos con valentía.<BR>
</H4><BR>
<H1> GALERIA: </H1>
<H1> !USAS LAYAR APP¡ Escanea la imagen para una experiencia mas interactiva</H1>
<BR>

<div class="w3-content w3-display-container"><center>
  <img class="mySlides" src="minear.jpeg" style="width:50%">

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