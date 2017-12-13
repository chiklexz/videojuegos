<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title> VIDEOJUEGOS </title>
	<link rel="stylesheet" tipe="text/css" href="juegosps4.css">
</head>
<body>
	<!-- cabezera -->
	<header id="main-header">
		<a id="logo-header" href="index.php">
			<H2>
			<span class="site-name"> GAMELAND </span></H2>
		</a>
		<a id="bienvenido" href="ps4.php">  <H1>PS4</H1> </a>
		<!-- buscador -->
		<a id="buscador">
			<form name="form1" method="post" action="ps4.php" id="cdr" >
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
				<h1>BIENVENIDO AL APARTADO DE PS4 SELECCIONA UN JUEGO O ESCRIBE SU NOMBRE EN EL BUSCADOR</h1>
			</header>
    
<!-- tabla buscador -->
			<?php
$busca="";
$busca= isset($_POST['busca'])?$_POST['busca']:NULL;
$conexion = mysqli_connect("localhost","root","");// si haces conexion desde internnet usa 3 parametros si es a nivel local solo 2
mysqli_select_db($conexion,"videojuegos");//nombre de la base de datos
if($busca!=""){
$busqueda=mysqli_query($conexion,"SELECT * FROM ps4 WHERE nombre LIKE '%".$busca."%'");//cambiar nombre de la tabla de busqueda
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
         <TD width="250"><a href="CRASH.php"><center><img src="crash_bandicoot_2.jpg"></center></TD> 
         <TD width="250"><a href="LAST.php"><center><img src="the-last-of-us-remastered_3.jpg"></center></TD> 
         <TD width="250"><a href="MORTAL.php"><center><img src="mortal-kombat-xl_2.jpg"></center></TD> 
         </TR> 
         <TR> 
         <TD><center> <h2>CRASH BANDICOOT N-SANE TRILOGY</h2></center></TD> 
         <TD><center> <h2>THE LAST OF US REMASTERED </h2></center></TD> 
        <TD><center> <h2>MORTAL KOMBAT XL</h2></center></TD> 
         </TR> 
         </TABLE> 
		</article> 
	
	</section> 	