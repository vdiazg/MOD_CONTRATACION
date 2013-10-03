<?php
include("../conexion.php");

//Validamos que los campos no esten Vacios
if(isset($_POST['ingresar_nombre_subcon']) && !empty($_POST['ingresar_nombre_subcon']) &&
	isset($_POST['ingresar_apellido_subcon']) && !empty($_POST['ingresar_apellido_subcon']) &&
	isset($_POST['ingresar_fecha_subcon']) && !empty($_POST['ingresar_fecha_subcon']) &&
	isset($_POST['ingresar_direccion_subcon']) && !empty($_POST['ingresar_direccion_subcon']) &&
	isset($_POST['ingresar_telefono_fijo_subcon']) && !empty($_POST['ingresar_telefono_fijo_subcon']) &&
	isset($_POST['ingresar_numero_celular_subcon']) && !empty($_POST['ingresar_numero_celular_subcon']) &&
	isset($_POST['ingresar_ciudad_subcon']) && !empty($_POST['ingresar_ciudad_subcon']) && 
	isset($_POST['ingresar_comuna_subcon']) && !empty($_POST['ingresar_comuna_subcon']) &&
	isset($_POST['ingresar_email_subcon']) && !empty($_POST['ingresar_email_subcon']) &&
	isset($_POST['ingresar_rut_subcon']) && !empty($_POST['ingresar_rut_subcon']) &&
	isset($_POST['ingresar_valor_faena_subcon']) && !empty($_POST['ingresar_valor_faena_subcon']))
{

	$con = mysql_connect($host,$user,$pass)or die("Problemas al Establer la Conexion");
	mysql_select_db($db,$con)or die("Problema al Conectar a la Base Datos FoodCo");

	mysql_query("INSERT INTO subcontratos (
		 
				NOMBRE,
				APELLIDO,
				FECHA_NACIMIENTO,
				DIRECCION,TELEFONO_CASA,
				CELULAR,CIUDAD,
				COMUNA,
				EMAIL,
				RUT_SUBCONTRATO,
				VALOR_FAENA) VALUES (

				'$_POST[ingresar_nombre_subcon]',
			   	'$_POST[ingresar_apellido_subcon]',
			   	'$_POST[ingresar_fecha_subcon]',
			   	'$_POST[ingresar_direccion_subcon]',
			   	'$_POST[ingresar_telefono_fijo_subcon]',
			   	'$_POST[ingresar_numero_celular_subcon]',
			   	'$_POST[ingresar_ciudad_subcon]',
			   	'$_POST[ingresar_comuna_subcon]',
			   	'$_POST[ingresar_email_subcon]',
			   	'$_POST[ingresar_rut_subcon]',
			   	'$_POST[ingresar_valor_faena_subcon]')", $con);

	echo "Datos Insertados";
}else{
	echo "Problemas al Insertar Datos";
}
?>