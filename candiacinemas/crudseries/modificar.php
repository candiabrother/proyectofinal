<?php 
	$consulta=ConsultarProducto($_GET['id']);

	function ConsultarProducto($no_id){
		include '../conectcrud.php';
		$sentencia="SELECT * FROM series WHERE id='".$no_id."' ";
		$resultado = $conexion->query($sentencia) or die ("Error al consultar producto".mysqli_error($conexion));
		$fila=$resultado->fetch_assoc();

		return[
			$fila['id'],
			$fila['nombre'],
			$fila['duracion'],
			$fila['autor'],
			$fila['calificacion'],
			$fila['sinopsis']
		];

	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Modificar Serie</title>
 	<link rel="stylesheet" type="text/css" href="../css/form.css">
 	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
 </head>
 <body>
 	<form style="color:#fff; font-size: 20px; padding-left: 20px" action="modificar2.php" method="POST">
 		<h1>Modificar Serie</h1>
 		<input type="hidden" name="no">
 		ID <input type="text" name="id" id="id" value="<?php echo $consulta[0] ?>"><br>
 		NOMBRE <input type="text" name="nombre" id="nombre" value="<?php echo $consulta[1] ?>"><br>
 		DURACIÓN <input type="text" name="duracion" id="duracion" value="<?php echo $consulta[2] ?>"><br>
 		AUTOR <input type="text" name="autor" id="autor" value="<?php echo $consulta[3] ?>"><br>
 		CALIFICACION <input type="text" name="calificacion" id="calificacion" value="<?php echo $consulta[4] ?>"><br>
 		SINOPSIS <textarea type="text" name="sinopsis" id="sinopsis" style="height: 200px; width: 400px;"><?php echo $consulta[5] ?> </textarea><br>
 		<button class="btn-success" name="update" type="submit">guardar</button>
 	</form>

 </body>
 </html>