<?php 
	EliminarProducto($_GET['id']);
	function EliminarProducto($id){
		include '../conectcrud.php';
		$sentencia="DELETE FROM caricaturas WHERE id='".$id."' ";
		$conexion->query($sentencia) or die ("Error al eliminar producto".mysqli_error($conexion));
	}
 ?>
 <script type="text/javascript">
	alert("producto eliminado Correctamente");
	window.location.href='../caricaturas.php';
</script>