<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title> VIDEOJUEGOS </title>
  <link rel="stylesheet" tipe="text/css" href="juegoswiiu.css">
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
    <a id="bienvenido" href="wiiu.php">  <H1>WII U</H1> </a>

  </header>
  <section id="main-content">
  
    <article>
      <header>
        <CENTER><h1> SUPER SMASH BROS WIIU </h1></CENTER>
        <center><img src="smash.jpg" width="500" height="500"></center>
    </header>
    <h1> CARACTERISTICAS:</h1>
      <table width="100" border="1" id="tab">
         <TR> 
         <TD width="50"><center> ID: </center></TD> 
         <TD width="50"><center> 03001   </center></TD> 
         </TR> 
         <TR> 
         <TD width="50"><center> COMPANIA:</center></TD> 
         <TD width="50"><center> NINTENDO </center></TD> 
         </TR>
         <TR> 
         <TD width="50"><center> LAZAMIENTO:</center></TD> 
         <TD width="50"><center> NO CONFIRMADO </center></TD> 
         </TR>
         <TR> 
         <TD width="50"><center> PLATAFORMA:</center></TD> 
         <TD width="50"><center> WIIU </center></TD> 
         </TR> 
         <TR>
         <TD width="50"><center> GENERO:</center></TD> 
         <TD width="50"><center> PELEAS </center></TD> 
         </TR> 
         <TR>
         <TD width="50"><center> CLASIFICACION:</center></TD> 
         <TD width="50"><center> EVERYONE </center></TD> 
         </TABLE> 
     </TR>
     <H1> DESCRIPCION:</H1>
     <H4>Vuelve la saga de lucha por excelencia de las consolas de Nintendo, 'Smash Bros', el único sitio donde pueden pegar juntas sagas como 'Super Mario', 'Zelda', 'Metroid', 'Starfox', 'Kirby', 'Kid Icarus', 'Donkey Kong' y 'Pokemon' sin que suene realmente descabellado. <BR>-  

<BR>- Aquí todo el mundo está invitado, ni siquiera 'Megaman', 'Animal Crossing' y 'Wii Fit' quieren perderse la cita. Con dos versiones, una para WiiU y otra para 3DS, volverá a hacernos pasar largos fin de semana en nuestra casa disfrutando de combates contra nuestros amigos. ¡No dejes que te saquen del escenario! <BR>-  

<BR>- Has entrado en la ficha del juego Super Smash Bros. for Wii U. Visita nuestro análisis, y todas las noticias, imágenes y vídeos que hemos publicado sobre el título. Super Smash Bros. for Wii U cuenta también son unas estadísticas sociales generadas por nuestra comunidad que puedes consultar en esta sección. <BR>
</H4><BR>
<H1> GALERIA: </H1>
<H1> !USAS LAYAR APP¡ Escanea la imagen para una experiencia mas interactiva</H1>
<BR>

<div class="w3-content w3-display-container"><center>
  <img class="mySlides" src="smashar.jpeg" style="width:50%">
  <img class="mySlides" src="smash2.jpg" style="width:50%">

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