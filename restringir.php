<?php
session_start();

if(isset($_SESSION['username']))
{
	
	echo "Puedes Ver Esta Pagina";
	echo "</br> <a href=logout.php > Cerrar Sesion</a> ";

}else{
	echo "Permiso Denegado para Esta Pagina, Resgistrate e Inicia Sesion";
}

?>