<?php 
$hostname_localhost = "localhost";
$database_localhost = "id17436134_fruteriapf";
$username_localhost = "id17436134_useradmin";
$pass_localhost = "z9TU3D)U+1rNvD6P";
$json = array();
    $conexion = mysqli_connect($hostname_localhost, $username_localhost, $pass_localhost, $database_localhost);
    $consulta = ("SELECT Id,Nombre,Descripcion,ImgSrc FROM Frutas");
    $resultado_consulta = mysqli_query($conexion, $consulta);
    while($registro = mysqli_fetch_array($resultado_consulta)){
        $json['frutas'][]=$registro;
    }
    mysqli_close($conexion);
    echo json_encode($json);




?>