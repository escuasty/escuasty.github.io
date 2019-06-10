<?php 
			$server="localhost";
			$username = "root";
			$pass = "";
			$db= "mangas";

			$conexion = new mysqli ($server, $username, $pass, $db);

			if($conexion->connect_error){
					die("Error en la conexión: " . $conexion->connect_error);
			}

			$ropa = $_POST["ropa"];
			$precio = $_POST["precio"];
			$descripcion = $_POST["descripcion"];
			$talla = $_POST["talla"];
			$color = $_POST["color"]; 

			$sql = "INSERT INTO ropa (ropa, precio, descripcion, talla, color)
							VALUES ('$ropa', '$precio', $descripcion, $talla, $color)";

			if($conexion->query($sql) === TRUE){
				echo "Registro insertado <a href='index.php'>Regresar</a>";
			} else {
				echo "Error: " .$sql. "<br>" . $conexion->error;
			}
 ?>







