<?php 
session_start();
if ($_SESSION) {	
	//echo $_SESSION['usuarios'];
}else header('Location: Iniciasecion.view.php');


 ?>