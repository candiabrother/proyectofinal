<?php 

	ModificarProducto($_POST['no'],$_POST['id'],$_POST['nombre'],$_POST['duracion'],$_POST['autor'],$_POST['calificacion'],$_POST['sinopsis']);

	function ModificarProducto($no,$id,$nombre,$duracion,$autor,$calificacion,$sinopsis)
	{
		include '../conectcrud.php';
		$sentencia="UPDATE peliculas SET id='".$id."', nombre='".$nombre."', duracion='".$duracion."', autor='".$autor."', calificacion='".$calificacion."', sinopsis='".$sinopsis."' WHERE id='".$id."' ";
		$conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
	}
 ?>
 <script type="text/javascript">
	alert("Se ha agregado un nuevo elemento");
	window.location.href='../peliculas.php';
</script>
