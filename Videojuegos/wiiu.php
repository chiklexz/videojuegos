<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title> VIDEOJUEGOS </title>
	<link rel="stylesheet" tipe="text/css" href="juegoswiiu.css">
</head>
<body>
	<!-- cabezera -->
	<header id="main-header">
		<a id="logo-header" href="index.php">
			<H2>
			<span class="site-name"> GAMELAND </span></H2>
		</a>
		<a id="bienvenido" href="wiiu.php">  <H1> WII U</H1> </a>
		<!-- buscador -->
		<a id="buscador">
			<form name="form1" method="post" action="wiiu.php" id="cdr" >
  <h3>Buscar juego  </h3>
      <p>
        <input name="busca"  type="text" id="busqueda">
        <input type="submit" name="Submit" value="buscar" />
        </p>
      </p>
</form>
 <p>
</a>

	</header>
	<!-- cuerpo -->
	<section id="main-content">
	
		<article>
			<header>
				<h1>BIENVENIDO AL APARTADO DE WII U SELECCIONA UN JUEGO O ESCRIBE SU NOMBRE EN EL BUSCADOR</h1>
			</header>
    
<!-- tabla buscador -->
			<?php
$busca="";
$busca= isset($_POST['busca'])?$_POST['busca']:NULL;
$conexion = mysqli_connect("localhost","root","");// si haces conexion desde internnet usa 3 parametros si es a nivel local solo 2
mysqli_select_db($conexion,"videojuegos");//nombre de la base de datos
if($busca!=""){
$busqueda=mysqli_query($conexion,"SELECT * FROM wiiu WHERE nombre LIKE '%".$busca."%'");//cambiar nombre de la tabla de busqueda
?>
<table width="1000" border="1" id="tab">
   <tr>
     <td width="20">Id </td>
     <td width="100">Nombre</td>
     <td width="157">Compania</td>
     <td width="221">Genero</td>
     <td width="80">Link</td>
   </tr>
 
<?php

while($f=mysqli_fetch_array($busqueda)){
echo '<tr>';
echo '<td width="20">'.$f['ID'].'</td>';
echo '<td width="100">'.$f['Nombre'].'</td>';
echo '<td width="157">'.$f['Compania'].'</td>';
echo '<td width="221">'.$f['Genero'].'</td>';
echo '<td width="80"><a href="'.$f['Link'].'"> haz click aqui</a></td>';
echo '</tr>';
//onclick="return confirm('¿Realmente deseas eliminar este articulo?')";
//cambiar los nombres de los campos de busqueda
}

}
?>
</table>
			<!-- tabla -->
			<table width="1000" border="0" id="tab">
         <TR> 
         <TD width="250"><a href="SMASH.php"><center><img src="super-smash-wiiu_1.jpg"></center></TD> 
         <TD width="250"><a href="ZELDAWILD.php"><center><img src="breath-of-the-wild.jpg"></center></TD> 
         <TD width="250"><a href="MARIO3D.php"><center><img src="super-mario-3d-world_2_1.jpg"></center></TD> 
         </TR> 
         <TR> 
         <TD><center> <h2>SUPER SMASH BROS WIIU</h2></center></TD> 
         <TD><center> <h2>THE LEGEND OF ZELDA BREATH OF THE WILD </h2></center></TD> 
        <TD><center> <h2>SUPER MARIO 3D WORLD</h2></center></TD> 
         </TR> 
         </TABLE> 
		</article> 
	
	</section> 	