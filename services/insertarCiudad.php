<?php
  include "conexion.php";
  $insertar=0;
  $codigoPostal=$_REQUEST["CP"];
  $ciudad=$_REQUEST["Ciudad"];
  $temperatura=$_REQUEST["Temperatura"];
  $select="SELECT * FROM ciudad";
  $comprobar= mysqli_query($conn, $select);

      

      while($row=mysqli_fetch_array($comprobar)) {
        if ($row['nombre_ciudad']==$ciudad) {
          $insertar=1;
          if($row['UltTemp_ciudad']>$temperatura){
            $delete =mysqli_query($conn, "DELETE from ciudad where id_ciudad=".$row['id_ciudad']."");
            $consulta="INSERT INTO `ciudad`(`nombre_ciudad`, `CodigoPostal_ciudad`, `UltTemp_ciudad`) VALUES ('$ciudad',$codigoPostal,'$temperatura')";
        $sql= mysqli_query($conn, $consulta);
          }
          
        }
      
    }
    if ($insertar==0) {
     $consulta="INSERT INTO `ciudad`(`nombre_ciudad`, `CodigoPostal_ciudad`, `UltTemp_ciudad`) VALUES ('$ciudad',$codigoPostal,'$temperatura')";
        $sql= mysqli_query($conn, $consulta);
    }
  


