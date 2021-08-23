<?php 



$hostname_localhost = "localhost";
$database_localhost = "id17436134_fruteriapf";
$username_localhost = "id17436134_useradmin";
$pass_localhost = "z9TU3D)U+1rNvD6P";
$conex=mysqli_connect($hostname_localhost,$username_localhost,$pass_localhost,$database_localhost);

if (isset($_GET['Nom']) && isset($_GET['Des']) && isset($_GET['Url']) ) {
	$query="Insert into Frutas (Nombre,Descripcion,ImgSrc) values ('".$_GET['Nom']."','".$_GET['Des']."','".$_GET['Url']."')";
	$res= mysqli_query($conex,$query);
	echo$res;
    }





 ?>