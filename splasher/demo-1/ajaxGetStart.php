<?php 
require_once( 'dataBase.php' );

$dataBase = new dataBase();


	
   
   $dataEstado = $dataBase->query("SELECT start FROM estadotanque");
   $fila = mysqli_fetch_array($dataEstado);
   echo($fila['start']);
   

   $dataBase->close();   


  
?>

