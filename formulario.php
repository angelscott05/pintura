<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=decice-widht, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>formulario</title>
	<body>

</head>
<body>
	<nav>
			<p><a href="page1.html">Las obras mas emblematicas</a> <a href="page2.html"> Historia del arte</a> <a href="pagejs.html">Aprende a Dibujar </a> <a href="examen.html">examen</a></p>
			<p><a href="#"></a></p>
		</nav>
	<!---DATOS PERSONALES--->
	<center>
		<form action="formulario.php" method="post">
			<h1 style="color: #FFFFFF;">Que es lo que mas te gusta de la pintura</h1>
			<br>
			<h2 style="color: #FFFFFF;">ingresa los datos para iniciar sesion</h2>
			<br><br>
		<p style="color: #E6FFEE;">Introduce nombre del usuario:<input type="text"name="nombre" size="40" placeholder="ingresa tu usuario" required></p><br>
		<p style="color: #E6FFEE;">Correo:<input type="text"name="correo" size="40" placeholder="ingresa tu correo" required></p><br>
		  <form>
        	<p style="color: #E6FFEE;">Contraseña:</p>
        	<p><input type="password" name="contraseña"></p><br>
        
        <p><input type="date" name="fecha"></p><br>
        
		<p style="color: #E6FFEE;"> sexo:
			<input type="radio" name="sexo" value="h" required> Hombre
		    <input type="radio" name="sexo" value="m" required> Mujer
		</p>
        <form>
        	----------------------------------------------------------------------
<form><h1 style="color: #FFFFFF;">Responde las siguentes opciones</h1>
	<p style="color: #FFFFFF;"><u>Veamos cuanto es tu gusto por el arte</u></p><br>
		
                <p style="color: #E6FFEE;">¿Cuales son las tecnicas de pintura que mas le gustan?:<input type="text" name="opinion"size="50" required></p>
                <p style="color: #E6FFEE;"><b>¿Que pintor se te hace mejor?</b></p>
                <p>
                	<input type="radio" name="pintor" value="Pablo Picasso" > Pablo Picasso
                	<input type="radio" name="pintor" value="vincent Van gogh" > vincent Van gogh
                	<input type="radio" name="pintor" value="Amadeo Modigliani" > Amadeo Modigliani 
                	<input type="radio" name="pintor" value="Miguel Angel" > Miguel Angel <br>
                	<p style="color: #FFFFFF;">¿Que siginifica para ti el arte?</p>
                	<input type="text" name="opinion2"size="50" required></p>
                	<div class="botones"> 

                	<p aling="center">
                	<input type="submit" name="btn_registrar" class="boton1" value="Registrar">
                	<input type="submit" name="btn_eliminar" class="boton2" value="Eliminar"><br><br></div>
                </div>
        </form>
        <!--BOTON GUARDAR-->
        <?php
        include("conexion3.php");
        $nombre="";
        $correo="";
        $contraseña="";
        $fecha="";
        $sexo="";
        $opinion="";
        $pintor="";
        $opinion2="";
		if (isset($_POST['btn_registrar']))
		 {
		 	$nombre=$_POST['nombre'];
			$correo=$_POST['correo'];
			$contraseña=$_POST['contraseña'];
			$fecha=$_POST['fecha'];
			$sexo=$_POST['sexo'];
			$opinion=$_POST['opinion'];
			$pintor=$_POST['pintor'];
			$opinion2=$_POST['opinion2'];
			if ($nombre==""|| $correo==""|| $contraseña==""|| $fecha==""|| $sexo==""|| $opinion==""|| $pintor==""|| $opinion2=="") {
				echo"los campos son obligatorios";
			}
			else{
				mysqli_query($conexion, "INSERT INTO $tabla_dbl(nombre,correo,contraseña,fecha,sexo,opinion,pintor,opinion2) VALUES('$nombre','$correo','$contraseña','$fecha','$sexo','$opinion','$pintor','$opinion2')");
			}
		}
		//Boton eliminar
		if (isset($_POST['btn_eliminar'])) {
			$nombre=$_POST['nombre'];
			$existe=0;

			if($nombre==""){
				echo "El documento es un campo obligatorio";
			}
			else{
				$resultados=mysqli_query($conexion, "SELECT * FROM $tabla_dbl WHERE nombre='$nombre'");
				while ($consulta=mysqli_fetch_array($resultados)) 
				{
					$existe++;
				}
				if ($existe==0) {
					echo "El documento no existe";
				}
				else{
					$_DELETE_SQL="DELETE FROM $tabla_dbl WHERE nombre='$nombre'";
					mysqli_query($conexion, $_DELETE_SQL);
				}
			}
		}
?>
</body>
<style type="text/css">
		html{
			background-image: url("imagenes/verde.jpg");
			background-repeat: no-repeat;
			background-position: center top;
			background-size: 100% 100%;
			background-attachment: fixed;
		}
		</style>
</html>