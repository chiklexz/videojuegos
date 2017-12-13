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
        <CENTER><h1> SOUTH PARK THE FRACTURED BUT WHOLE </h1></CENTER>
        <center><img src="south.jpg" width="500" height="500"></center>
    </header>
    <h1> CARACTERISTICAS:</h1>
      <table width="100" border="1" id="tab">
         <TR> 
         <TD width="50"><center> ID: </center></TD> 
         <TD width="50"><center> 02001   </center></TD> 
         </TR> 
         <TR> 
         <TD width="50"><center> COMPANIA:</center></TD> 
         <TD width="50"><center> UBISOFT </center></TD> 
         </TR>
         <TR> 
         <TD width="50"><center> LAZAMIENTO:</center></TD> 
         <TD width="50"><center> 2017-10-17 </center></TD> 
         </TR>
         <TR> 
         <TD width="50"><center> PLATAFORMA:</center></TD> 
         <TD width="50"><center> XBOX ONE </center></TD> 
         </TR> 
         <TR>
         <TD width="50"><center> GENERO:</center></TD> 
         <TD width="50"><center> ROL </center></TD> 
         </TR> 
         <TR>
         <TD width="50"><center> CLASIFICACION:</center></TD> 
         <TD width="50"><center> MATURE </center></TD> 
         </TABLE> 
     </TR>
     <H1> DESCRIPCION:</H1>
     <H4> En el tranquilo pueblo de South Park, la oscuridad se ha expandido por todos lados. Un nuevo poder está surgiendo para combatir este mal. Un equipo de superhéroes se elevará, dirigidos por un carroñero nocturno que ha jurado limpiar los botes de basura de la sociedad de South Park. 

<BR>Los niños están jugando a ser superhéroes, y Cartman está determinado a convertir a Coon y amigos en la franquicia de superhéroes más grande de todos los tiempos. Sin embargo, el malvado profesor Caos emerge con un plan malvado para eliminar a Coon y amigos. Los héroes deberán trabajar como equipo para combatir el caos y el terror que se apoderan de la ciudad.<BR> 

<BR>De los creadores de South Park, Trey Parker y Matt Stone, llega South Park™: Retaguardia en Peligro™, la secuela de South Park™: The Stick of Truth™, ganador de 25 premios de videojuegos. <BR> 

<BR>Los jugadores una vez más asumirán el rol del nuevo chico del pueblo. Siendo el miembro más nuevo de Coon y amigos, deberás crear a tu propio superhéroe, aumentar tu popularidad, y usar tus súper poderes para salvar a South Park. Solo entonces Coon y amigos podrá tomar su lugar como el equipo de superhéroes más grande jamás creado, y obtener el contrato millonario para la película que tanto merecen. En una ciudad atrapada por el caos, Coon y amigos surgirán para salvar el día. <BR>
</H4><BR>
<H1> GALERIA: </H1>
<H1> !USAS LAYAR APP¡ Escanea la imagen para una experiencia mas interactiva</H1>
<BR>

<div class="w3-content w3-display-container"><center>
  <img class="mySlides" src="southar.jpeg" style="width:50%">
  <img class="mySlides" src="south2.jpg" style="width:50%">

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