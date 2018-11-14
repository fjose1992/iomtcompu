<?php 
require_once( 'dataBase.php' );

$dataBase = new dataBase();

if(isset($_GET["start_stop"]) && !empty($_GET["start_stop"])){
	
   $start_stop = $_GET["start_stop"];
   $dataEstado = $dataBase->query("UPDATE estadotanque SET start='".$start_stop."'");
   echo $dataEstado;
   

   $dataBase->close();   
}
  
?>

