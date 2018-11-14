<?php 
require_once( 'dataBase.php' );

$dataBase = new dataBase();


if(isset($_GET['cel']) && !empty($_GET['cel']) && isset($_GET['far']) && !empty($_GET['far']) && isset($_GET['estado']) ){

	
	if(is_numeric($_GET['cel']) && is_numeric($_GET['far']) && is_numeric($_GET['estado'])){
		$dataBase->query("INSERT INTO temperatura(cel, far) VALUES ('".$_GET['cel']."', '".$_GET['far']."')");
		$dataEstado = $dataBase->query("UPDATE estadotanque SET estado='".$_GET['estado']."'");
		
	}
	
}else{
	echo "-1";
}


$dataBase->close();



?>