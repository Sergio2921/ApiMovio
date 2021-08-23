<?php 
session_start();
if ($_SESSION['ENT']!=19){
	header("Location:Index.php");
	
}
if (isset($_POST['Enviar'])) {
	if ($_POST['Nom']!=null && $_POST['Des']!=null && $_POST['Url']!=null) {
		$string=str_replace(" ", "%20","http://proyectofinalrcc.000webhostapp.com/Insert.php?Nom=".$_POST['Nom']."&Des=".$_POST['Des']."&Url=http://proyectofinalrcc.000webhostapp.com/Fruteria/img/".$_POST['Url'].".jpg");
		$json = file_get_contents($string);
		$ruta="img/".$_POST['Url'].".jpg";
		$foto=$_FILES['foto']['tmp_name'];
		if(move_uploaded_file($foto,$ruta))
		{
		    echo"Jalo";
		}
		else
		{
		    echo"No JALO ";
		}
		if ($json=="1") {
			echo "Agregado Exitosamente";
		}
		else
		{
			echo "Error al agregar";
		}
	}
	
}



 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="assets/css/AgregarF.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<title>Agregar Fruta</title>
</head>
<body>
<div class="cont-agr">
	<div class="tittle" id="tltVerS">Agregar Fruta</div>
		<form action="AgregarF.php" class="form-cbr" method="Post" enctype="multipart/form-data">
			<div class="cont-cbr">
				<span class="details">Fruta: </span>
				<input class="input-style" type="text" name="Nom">
			</div>
			<div class="cont-cbr">
				<span class="details">Descripción:</span>
				<input class="input-style" type="text" name="Des">
			</div>	
			<div class="cont-cbr">
				<span class="details">Imagen:</span>
				<input class="input-style" type="Text" name="Url">
				<input type="file" name="foto" class="input-style">
			</div>	
			<input class="btnAgr" type="submit" name="Enviar">
		</form>
	</div>
</body>
</html>