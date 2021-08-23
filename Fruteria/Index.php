<?php 

if (isset($_POST['Entrar'])){
	if ($_POST['User']==null || $_POST['Pass']==null) {
		echo "Inserte los datos";
		
	}
	else
	{
		$json = file_get_contents("http://proyectofinalrcc.000webhostapp.com/Log.php?user=".$_POST['User']."&pass=".$_POST['Pass']);

		$fin=json_decode($json);
		if($fin->res3[0]->salida=='Yes')
		{
			session_start();
			$_SESSION['ENT']=19;
			header("Location:AgregarF.php");
		}
		else
		{
			echo "http://proyectofinalrcc.000webhostapp.com/Log.php?user=".$_POST['User']."&pass=".$_POST['Pass'];
			echo $fin->res3[0]->salida;echo "<br>";
			echo "http://proyectofinalrcc.000webhostapp.com/Log.php?user=".$_POST['User']."&pass=".$_POST['Pass'];echo "<br>";
			echo "Datos Erroneos";
		}
		
	}
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="assets/css/login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta charset="utf-8">
	<title>Log In</title>
</head>
<body>
	<img class="wave" src="assets/img/wave.png">
	<div class="container">
		<div class="img">
			<img src="assets/img/bg.svg">
		</div>
		<div class="login-content">
			<form action="Index.php"  method="Post">
				<img src="assets/img/avatar.svg">
                <h2 class="title">Iniciar Sesión</h2>
				<div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Usuario</h5>
                        <input type="text" class="input" name="User">
                    </div>
                </div>
				<div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Contraseña</h5>
                        <input type="password" class="input" name="Pass">
                    </div>
                </div>
				<input type="submit" class="btn" value="Login" name="Entrar">
			</form>
		</div>
	</div>

	
    <script>
        const inputs = document.querySelectorAll(".input");

        function addcl() {
            let parent = this.parentNode.parentNode;
            parent.classList.add("focus");
        }

        function remcl() {
            let parent = this.parentNode.parentNode;
            if (this.value == "") {
                parent.classList.remove("focus");
            }
        }


        inputs.forEach(input => {
            input.addEventListener("focus", addcl);
            input.addEventListener("blur", remcl);
        });
    </script>
</body>
</html>