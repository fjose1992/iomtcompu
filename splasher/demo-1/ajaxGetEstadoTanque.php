<?php 
require_once( 'dataBase.php' );

$dataBase = new dataBase();



   $dataEstado = $dataBase->query("SELECT estado FROM estadotanque");
   $fila = mysqli_fetch_array($dataEstado);
   echo($fila['estado']);

   $dataBase->close();   

  
?>