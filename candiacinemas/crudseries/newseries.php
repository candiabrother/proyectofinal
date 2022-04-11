<?php
	$ip = "database";
	$usr = "candia";
	$pass = "candia";
	$bd = "candiacinemas";
	
	$id=$_REQUEST['id'];
	$nom = $_REQUEST['nombre'];
	$duracion = $_REQUEST['duracion'];
	$autor = $_REQUEST['autor'];
	$calificacion = $_REQUEST['calificacion'];
	$sinopsis = $_REQUEST['sinopsis'];

	$conn = mysqli_connect($ip, $usr, $pass, $bd);
	if (!$conn){
		die("No se pudo conectar al servidor con los parámetros especificados.".mysqli_connect_error());
	}

	$sql = "insert into series values('$id','$nom','$duracion','$autor','$calificacion','$sinopsis')";

	mysqli_query($conn, $sql);


	mysqli_close($conn);
?>
<script type="text/javascript">
	alert("Se ha agregado un nuevo elemento");
	window.location.href='../series.php';
</script>