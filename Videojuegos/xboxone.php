<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title> VIDEOJUEGOS </title>
	<link rel="stylesheet" tipe="text/css" href="juegosxboxone.css">
</head>
<body>
	<!-- cabezera -->
	<header id="main-header">
		<a id="logo-header" href="index.php">
			<H2>
			<span class="site-name"> GAMELAND </span></H2>
		</a>
		<a id="bienvenido" href="xboxone.php">  <H1>XBOX ONE</H1> </a>
		<!-- buscador -->
		<a id="buscador">
			<form name="form1" method="post" action="xboxone.php" id="cdr" >
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
				<h1>BIENVENIDO AL APARTADO DE XBOX ONE SELECCIONA UN JUEGO O ESCRIBE SU NOMBRE EN EL BUSCADOR</h1>
			</header>
    
<!-- tabla buscador -->
			<?php
$busca="";
$busca= isset($_POST['busca'])?$_POST['busca']:NULL;
$conexion = mysqli_connect("localhost","root","");// si haces conexion desde internnet usa 3 parametros si es a nivel local solo 2
mysqli_select_db($conexion,"videojuegos");//nombre de la base de datos
if($busca!=""){
$busqueda=mysqli_query($conexion,"SELECT * FROM xboxone WHERE nombre LIKE '%".$busca."%'");//cambiar nombre de la tabla de busqueda
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
         <TD width="250"><a href="SOUTHONE.php"><center><img src="south_park_one_.jpg"></center></TD> 
         <TD width="250"><a href="MINECRAFT.php"><center><img src="minecraft-one.jpg"></center></TD> 
         <TD width="250"><a href="FIFA18ONE.php"><center><img src="fifa-soccer-18-.jpg"></center></TD> 
         </TR> 
         <TR> 
         <TD><center> <h2>SOUTH PARK THE FRACTURED BUT WHOLE</h2></center></TD> 
         <TD><center> <h2>MINECRAFT </h2></center></TD> 
        <TD><center> <h2>FIFA SOCCER 18</h2></center></TD> 
         </TR> 
         </TABLE> 
		</article> 
	
	</section> 	