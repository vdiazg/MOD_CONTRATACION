<?php

//include("conexion.php");
$host = "localhost";
$user = "root";
$pass = "touchvictor";
$db = "foodco";
session_start();

if( isset($_POST['nombre_usuario']) && !empty($_POST['nombre_usuario']) &&
	isset($_POST['contrasena']) && !empty($_POST['contrasena']))

{

	$conexion = mysql_connect($host, $user, $pass)or die("Problemas al Establer la Conexion");
	mysql_select_db($db, $conexion)or die("Problema al Conectar a la Base Datos FoodCo");

	$selec = mysql_query("SELECT USERNAME,PASSWORD FROM login WHERE USERNAME='$_POST[nombre_usuario]'", $conexion);

	$SESION = mysql_fetch_array($selec);

	//Si campo password del formulario es igual de la base datos
	if($_POST['contrasena'] == $SESION['PASSWORD']){

		//en esta variable se alamacena el usuario traido del formulario
		$_SESSION['username'] = $_POST["nombre_usuario"];

		echo "Session Exitosa";
		//echo "</br> <a href=restringir.php > ir a Restringir</a> ";
		//con linea de abajo Redirijo a otra pagina
		header('Location: administrador/mod_contratacion/index_mod_contratacion.html');

	}else{
		echo "Combinacion Erronea";
	}

}else{
	echo "Campos Vacios, Debes llenar los campos";
}

?>