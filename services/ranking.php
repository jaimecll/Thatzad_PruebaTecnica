<?php
include "conexion.php";
$consulta="SELECT * FROM ciudad order by UltTemp_ciudad ASC";
$sql= mysqli_query($conn, $consulta);
$top=array();
while($row = mysqli_fetch_assoc($sql)){
    $top[]=$row;
    
  }
  print json_encode($top);
?>