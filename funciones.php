<?php
	// function mostrarVeterinarios(){
	// 	include("db.php");
	// 	$sql = "SELECT * FROM veterinario;";


	// 	$execonsulta=$mysqli->query($sql);

	// 	if($execonsulta) {
	// 		return "Lista de Veterinarios";
	// 	}
	// 	else {
	// 		return "";
	// 	}
	// }

	function mostrarVeterinarios(){
		include("db.php"); // Suponiendo que este archivo contiene la conexión a la base de datos
	
		$sql = "SELECT * FROM Veterinarios;"; // Seleccionamos todos los atributos de los veterinarios
	
		$resultado = $mysqli->query($sql);
	
		$veterinarios = array(); // Inicializamos el array de JSONs
	
		if($resultado->num_rows > 0) {
			// Iteramos sobre los resultados y agregamos cada veterinario como un objeto asociativo al array
			while($fila = $resultado->fetch_assoc()) {
				$veterinario = array(
					'Nombre' => $fila['Nombre'],
					'Apellido' => $fila['Apellido'],
					'Especialidad' => $fila['Especialidad'],
					'Celular' => $fila['Celular'],
					'Email' => $fila['Email'],
					'Direccion' => $fila['Direccion']
				);
				$veterinarios[] = $veterinario; // Agregamos el objeto asociativo al array
			}
	
			// Devolvemos el array de objetos asociativos
			return $veterinarios;
		} else {
			return ""; // Devolvemos cadena vacía si no hay resultados
		}
	}

	// MUESTRA COMO TABLA
	// function mostrarVeterinarios(){
	// 	include("db.php"); // Suponiendo que este archivo contiene la conexión a la base de datos
	
	// 	$sql = "SELECT Nombre, Apellido, Especialidad, Celular, Email, Direccion FROM Veterinarios;"; // Seleccionamos todos los atributos de los veterinarios
	
	// 	$resultado = $mysqli->query($sql);
	
	// 	if($resultado) {
	// 		$veterinariosHTML = "<table>"; // Inicializamos la tabla HTML
	
	// 		// Agregamos la fila de encabezados de la tabla
	// 		$veterinariosHTML .= "<tr><th>Nombre</th><th>Apellido</th><th>Especialidad</th><th>Celular</th><th>Email</th><th>Dirección</th></tr>";
	
	// 		// Iteramos sobre los resultados y agregamos cada veterinario como una fila de la tabla
	// 		while($fila = $resultado->fetch_assoc()) {
	// 			$veterinariosHTML .= "<tr>";
	// 			$veterinariosHTML .= "<td>{$fila['Nombre']}</td>";
	// 			$veterinariosHTML .= "<td>{$fila['Apellido']}</td>";
	// 			$veterinariosHTML .= "<td>{$fila['Especialidad']}</td>";
	// 			$veterinariosHTML .= "<td>{$fila['Celular']}</td>";
	// 			$veterinariosHTML .= "<td>{$fila['Email']}</td>";
	// 			$veterinariosHTML .= "<td>{$fila['Direccion']}</td>";
	// 			$veterinariosHTML .= "</tr>";
	// 		}
	
	// 		$veterinariosHTML .= "</table>"; // Cerramos la tabla HTML
	
	// 		// Devolvemos la tabla de veterinarios como HTML
	// 		return $veterinariosHTML;
	// 	} else {
	// 		return ""; // Devolvemos cadena vacía si hay un error en la consulta
	// 	}
	// }
	

	// MUESTRA COMO LISTA
	// function mostrarVeterinarios(){
	// 	include("db.php"); // Suponiendo que este archivo contiene la conexión a la base de datos
	
	// 	$sql = "SELECT Nombre, Apellido, Especialidad FROM Veterinarios;"; // Seleccionamos solo los atributos deseados
	
	// 	$resultado = $mysqli->query($sql);
	
	// 	if($resultado) {
	// 		$veterinariosHTML = "<ul>"; // Inicializamos la lista de veterinarios en formato HTML
	
	// 		// Iterar sobre los resultados y agregar cada veterinario como un elemento de lista
	// 		while($fila = $resultado->fetch_assoc()) {
	// 			$veterinariosHTML .= "<li>{$fila['Nombre']} {$fila['Apellido']} - {$fila['Especialidad']}</li>";
	// 		}
	
	// 		$veterinariosHTML .= "</ul>"; // Cerramos la lista de veterinarios en formato HTML
	
	// 		// Devolver la lista de veterinarios como HTML
	// 		return $veterinariosHTML;
	// 	} else {
	// 		return "";
	// 	}
	// }
	
	




















	// function mostrarVeterinario($nombre){
	// 	include("db.php");
	// 	$sql = "SELECT * FROM veterinario WHERE nombre = '$nombre';";


	// 	$execonsulta=$mysqli->query($sql);

	// 	if($execonsulta) {
	// 		return "VETERINARIO";
	// 	}
	// 	else {
	// 		return "";
	// 	}
	// }


	// function mostrarDatoVeterinario($nombre, $info){
	// 	include("db.php");
	// 	$sql = "SELECT $info FROM veterinario  WHERE nombre = '$nombre';";

	// 	$execonsulta=$mysqli->query($sql);

	// 	if($execonsulta) {
	// 		return "Los 2 Atributos";
	// 	}
	// 	else {
	// 		return "";
	// 	}
	// }

	function mostrarDatoVeterinario($nombre, $info){
		include("db.php");
		$sql = "SELECT $info FROM Veterinarios  WHERE Nombre = '$nombre';";
	
		$resultado = $mysqli->query($sql);
	
		if($resultado->num_rows > 0) {
			// Obtener la primera fila de resultados
			$fila = $resultado->fetch_assoc();
	
			// Devolver la fila como un JSON
			return $fila;
		} else {
			return ""; // Devolvemos cadena vacía si no hay resultados
		}
	}
?>