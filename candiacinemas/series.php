<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Series</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		
</head>
<body>
	<div class="contenido">
		<table style="margin:auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px; display: inline-block; color:white;">
			<thead>
				<a href="bienvenido.html"><button class="btn btn-info" style="margin-top: 10px;">regresar</button></a>
				<h1 style="color: #fff; ">SERIES</h1>
				<th>id</th>
				<th>nombre</th>
				<th>Duración capitulo</th>
				<th>autor</th>
				<th>calificacion</th>
				<th>sinopsis</th>
				<th><a href="insertarserie.html"><button type="button" class="btn btn-info">Nuevo</button></a></th>
			</thead>


<?php 
			include 'conectcrud.php';
			$sql="SELECT * FROM series";
			$resultado=mysqli_query($conexion,$sql );
			while ($filas=mysqli_fetch_assoc($resultado)) {
				echo "<tr>";
				echo "<td>"; echo $filas['id']; echo "</td>";
				echo "<td>"; echo $filas['nombre']; echo "</td>";
				echo "<td>"; echo $filas['duracion']; echo "</td>";
				echo "<td>"; echo $filas['autor']; echo "</td>";
				echo "<td>"; echo $filas['calificacion']; echo "</td>";
				echo "<td>"; echo $filas['sinopsis']; echo "</td>";
				echo "<td><a href='crudseries/modificar.php?id=".$filas['id']."'><button type='button' class='btn btn-success'>Modificar</button></a> </td>";
				echo "<td><a href='crudseries/eliminar.php?id=".$filas['id']."'><button type='button' class='btn btn-danger'>Eliminar</button></a></td>";
				echo "</tr>"; 
			}
 ?>
 </table>
	</div>

	
</body>
</html>