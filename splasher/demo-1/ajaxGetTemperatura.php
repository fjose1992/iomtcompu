<?php 
require_once( 'dataBase.php' );

$dataBase = new dataBase();



   //$dataTemp = $dataBase->query("SELECT * FROM temperatura");
   $dataTemp = $dataBase->query("SELECT * FROM (SELECT * FROM temperatura ORDER BY id DESC LIMIT 70) sub ORDER BY id ASC");
   $i = 0;
   $eachTime = 0;
   $data = [];
   while ($fila = mysqli_fetch_array($dataTemp)) {
    $cel[$i] = array("x" => $eachTime, "y" => $fila[1]);
    $far[$i] = array("x" => $eachTime, "y" => $fila[2]);
    $i++;
    $eachTime = $eachTime + 10;
   }
   $dataBase->close();   
   $data = array("cel" => $cel, "far" => $far);

   header('Content-type: application/json');
   	echo json_encode($data);
  
?>