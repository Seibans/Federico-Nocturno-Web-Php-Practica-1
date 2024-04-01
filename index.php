<?php
	header("Content-Type:application/json");
	//cabecera del documento json
	include("funciones.php");
	//incluimos funciones.php

	//si no esta vacio en GET el campo producto
	if(!empty($_GET['nombre']) && !empty($_GET['info']))
	{
		$nombre=$_GET['nombre'];
		$info= ucwords(strtolower($_GET['info']));;

		if ($info=="Especialidad" || $info=="Celular") {
			$respuesta = mostrarDatoVeterinario($nombre, $info);
		} else {
			$respuesta = "";
		}

		//si el campo de precio esta vacio
		if($respuesta!="")
		{
			responder(200,"BUSQUEDA",$respuesta);
			//status,mensaje,null
		}
		else
		{
			responder(200,"NO ES UNA BUSQUEDA VÁLIDA",NULL);
			//status,mensaje,precio
		}
	}
	else if(!empty($_GET['nombre']))
	{
		$nombre=$_GET['nombre'];
		$respuesta = mostrarVeterinario($nombre);
		//si el campo de precio esta vacio
		if($respuesta!="")
		{
			responder(200,"Veterinario",$respuesta);
		}

	}else{
		$respuesta = mostrarVeterinarios();
		responder(200,"LISTA DE VETERINARIOS", $respuesta); // Convertimos el array a JSON antes de imprimirlo
	}


	function responder($status,$mensaje,$respuesta)
	{
		//cabecera del mensaje
		header("HTTP/1.1 $status $mensaje");

		//array asociativo response
		$response['status']=$status;
		$response['mensaje']=$mensaje;
		$response['respuesta']=$respuesta;

		//construccion y retorno del objeto json
		$json_response=json_encode($response);
		echo $json_response;
	}
?>