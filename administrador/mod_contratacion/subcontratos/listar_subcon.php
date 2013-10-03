<?php
include("../conexion.php");

$con = mysql_connect($host,$user,$pass)or die("Problemas al Establer la Conexion");
		mysql_select_db($db,$con)or die("Problema al Conectar a la Base Datos FoodCo");

$registros = mysql_query("SELECT * FROM subcontratos WHERE RUT_SUBCONTRATO = '$_POST[ingresar_rut_subcon]'")
		or die("Problemas en Realizar la Consulta: ".mysql_error());

while($reg=mysql_fetch_array($registros)){

	echo $reg['ID_SUBCONTRATO']."</br>";
	echo $reg['NOMBRE']."</br>";
	echo $reg['APELLIDO']."</br>";
	echo $reg['FECHA_NACIMIENTO']."</br>";
	echo $reg['DIRECCION']."</br>";
	echo $reg['TELEFONO_CASA']."</br>";
	echo $reg['CELULAR']."</br>";
	echo $reg['CIUDAD']."</br>";
	echo $reg['COMUNA']."</br>";
	echo $reg['EMAIL']."</br>";
	echo $reg['RUT_SUBCONTRATO']."</br>";
	echo $reg['VALOR_FAENA']."</br>";
}

?>