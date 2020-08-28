<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Inicio de sesión</title>
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="icofont/icofont.min.css">
</head>
<body>
	<div class="contenedor">
		<form action="index.php" method="POST">
			<label class="titulo">INICIO DE SESIÓN</label>
			<br>
			<label class="j">Usuario</label>
			<div class="user">
				<span class="icofont-user"></span>
				<input type="text" name="user" required placeholder="Usuario" autocomplete="off">
			</div>
			<label class="j">Contraseña</label>
			<div class="user">
				<span class="icofont-key-hole"></span>
				<input type="password" name="pass" required placeholder="Contraseña">
			</div>
			<br>
			<br>
			<button name="acceder" type="submit">ACCEDER</button>
			<br>
			<br>
		</form>
		<?php 
		if (isset($_POST['acceder'])) {
			require_once("conexion.php");
			$user=$_POST['user'];
			$pass=$_POST['pass'];
			$query="SELECT * FROM enfermero WHERE usuario_enfermero='$user' AND contrasena_enfermero='$pass'";
			$resultado=$conexion->query($query);
			$fila=$resultado->fetch_assoc();
			session_start();
			$_SESSION['ID_Enfermero']=$fila['ID_Enfermero'];
			if ($resultado->num_rows>0) {
				header("location:inicio.php");
			}else{
				echo '<script>
                    	alert("Datos incorrectos intente nuevamente");
                    	window.location.href="index.php";
                    </script>';
				}
			}
	?>
	</div>
</body>
</html>