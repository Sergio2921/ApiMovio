<?php 
$hostname_localhost = "localhost";
$database_localhost = "id17436134_fruteriapf";
$username_localhost = "id17436134_useradmin";
$pass_localhost = "z9TU3D)U+1rNvD6P";
$conex=mysqli_connect($hostname_localhost,$username_localhost,$pass_localhost,$database_localhost);

if (isset($_GET['user']) && isset($_GET['pass']) ) {
	$query="Select count(*) from Users where NUser='".$_GET['user']."' and CUser=md5('".$_GET['pass']."')";
	$res= mysqli_query($conex,$query);
	$json=array();
	while($registro=mysqli_fetch_array($res)){
        $res2=$registro[0];
    }
    if($res2==1)
    {
        $aux['salida']='Yes';
        $json['res3'][]=$aux;
    }
    else
    {
        $aux['salida']='No';
        $json['res3'][]=$aux;
    }
    
    echo json_encode($json);

}
else
{
	echo "Vacio";
}



 ?>