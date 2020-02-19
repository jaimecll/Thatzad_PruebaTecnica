
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/845eda249f.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./js/javascript.js"></script>
    <script type="text/javascript" src="./js/ajax.js"></script>

    <title>Thatzad Weather</title>
  </head>
  <body>


<?php
if(isset($_REQUEST['CodigoPostal'])){

?>


<div class="d-flex justify-content-center">
      <div class="p-2" ><img class="Logo" src="./img/Bitmap.png"><p class="Texto3">¡Que la lluvia no te pare!</p></div>

  </div>
  <div style="margin-top: -50px;">
      <div class="modal-body row" style="margin:50px;">






  <div class="columna1">
    <!--Parte de datos de ciudad dividida en dos columnas, datos y busqueda-->
     <div class="d-flex justify-content-center" style="margin-top: 51px;">
       <div class="col-md-4" style="padding-left:200px;" >
        <p class="eleccion" id="CodigoPostal">Código postal:</p><p class="CodigoPostal" id="CP"></p>
        <p class="eleccion" id="Ciudad">Ciudad: </p><p class="nombre" id="nombre"></p>
      </div>
      <div class="col-md-6">

        <!--Formulario para volver a buscar-->
        <form id='home' accept-charset='UTF-8' onsubmit = "comprobar(); return false">
          
  <div class="p-2"> <!--<a href="#" onClick="home.submit()">--><span class="Lupa"><i class="fas fa-search-location fa-4x"></i></span><!--</a>--><input class="Busqueda" type="text" name="CodigoPostal" id="city" placeholder="Buscar otra zona" pattern="[0-9]{5}" value="<?php echo $_REQUEST['CodigoPostal']?>">
</div>
         <input type="hidden" value="" id="bdCP">
        </form>
      </div>


      <!--tablas de datos recogido de openweathermap-->
        <table class="ranking">
          <tr>
            <td class="ahora">Ahora</td>
            <td class="horas">Próximas horas</td>
            <td class="dias">Próximas 5 días</td>
          </tr>
          <tr>




            <!--Tabla de datos actuales-->
            <td class="contenido-ahora"> 

              <div id="icono" class="icono"></div>
              <div id="tipo" class="tipo"></div>
              <div class="temperatura" id="temperatura"></div>

              <input type="hidden" name="city" id="city" value="<?php
                if(isset($_REQUEST['CodigoPostal'])){
                echo $_REQUEST['CodigoPostal'];
              }
              ?>"> 
              <input type="hidden" name="valor_nombre" id="valor_nombre" value=""> 
              <input type="hidden" name="valor_temp" id="valor_temp" value="">
            </td>




        <!--Tabla de datos en unas horas-->
            <td class="contenido-horas">
              <table>
                <tr>
                  <td class="tabla-horas">Ahora</td>
                  <td class="tabla-horas">18:00</td>
                  <td class="tabla-horas">19:00</td>
                  <td class="tabla-horas2">20:00</td>
                </tr>
                <tr style="height: 70px;">
                  <td class="tabla-horas" id="icono"><i class="far fa-snowflake fa-2x"></i></td>
                  <td class="tabla-horas" id="iconoh0"> <i class="far fa-snowflake fa-2x"></i></td>
                  <td class="tabla-horas" id="iconoh1"><i class="far fa-snowflake fa-2x"></i></td>
                  <td class="tabla-horas2" id="iconoh2"><i class="far fa-snowflake fa-2x"></i></td>
                </tr>
                <tr>
                  <td class="tabla-horas" id="tipo">Nieve</td>
                  <td class="tabla-horas" id="tipoh0"> Nieve</td>
                  <td class="tabla-horas" id="tipoh1">Nieve</td>
                  <td class="tabla-horas2" id="tipoh2">Nieve</td>
                </tr>
                <tr>
                  <td class="tabla-horas" style="font-size:18px;" id="temperatura">-3º</td>
                  <td class="tabla-horas" style="font-size:18px;" id="temperaturah0">-3º</td>
                  <td class="tabla-horas" style="font-size:18px;"id="temperaturah1">-3º</td>
                  <td class="tabla-horas2" style="font-size:18px;" id="temperaturah2">-3º</td>
                </tr>
              
            </table>
          </td>


          <!--Tabla contenido de los proximos dias y su slider-->
            <td class="contenido-dias">
          <div id="dias">
              <div class="slider">
            <ul>
            <li>
          <table>
                <tr>
                  <td class="tabla-horas" id="dia0">Ahora</td>
                </tr>
                <tr style="height: 70px;">
                  <td class="tabla-horas" id="icono0"><i class="far fa-snowflake fa-2x"></i></td> 
                </tr>
                <tr>
                  <td class="tabla-horas" id="tipo0">Nieve</td>
                </tr>
                <tr>
                  <td class="tabla-horas" style="font-size:18px;" id="temp0">-3º</td>
                </tr>
            </table>
          </li>
          <li>
        <table>
                <tr>
                  <td class="tabla-horas" id="dia1">Miercoles</td>
                </tr>
                <tr style="height: 70px;">
                  <td class="tabla-horas" id="icono1"><i class="far fa-snowflake fa-2x"></i></td>
                </tr>
                <tr>
                  <td class="tabla-horas" id="tipo1">Nieve</td>
                </tr>
                <tr>
                  <td class="tabla-horas" style="font-size:18px;"  id="temp1">-3º</td>
                </tr>
            </table>
          </li>
          <li>
        <table>
                <tr>
                  <td class="tabla-horas" id="dia2">Jueves</td> 
                </tr>
                <tr style="height: 70px;">
                  <td class="tabla-horas" id="icono2"><i class="far fa-snowflake fa-2x"></i></td> 
                </tr>
                <tr>
                  <td class="tabla-horas" id="tipo2">Nieve</td>
                </tr>
                <tr>
                  <td class="tabla-horas" style="font-size:18px;" id="temp2">-3º</td>
                </tr>
            </table>
          </li>
         <li>
        <table>
                <tr>
                  <td class="tabla-horas" id="dia3">Viernes</td>
                </tr>
                <tr style="height: 70px;">
                  <td class="tabla-horas" id="icono3"><i class="far fa-snowflake fa-2x"></i></td>
                </tr>
                <tr>
                  <td class="tabla-horas" id="tipo3">Nieve</td>
                </tr>
                <tr>
                  <td class="tabla-horas" style="font-size:18px;"  id="temp3">-3º</td>
                </tr>
            </table>
          </li>
          <li>
        <table>
                <tr>
                  <td class="tabla-horas2" id="dia4">Sabado</td>
                </tr>
                <tr style="height: 70px;">
                  <td class="tabla-horas2" id="icono4"><i class="far fa-snowflake fa-2x"></i></td>
                </tr>
                <tr>
                  <td class="tabla-horas2" id="tipo4">Nieve</td>
                </tr>
                <tr>
                  <td class="tabla-horas2" style="font-size:18px;"  id="temp4">-3º</td>
                </tr>
            </table>
          </li>
      </ul>
    </div>
    </div>
            </td>
          </tr>

        </table>



     </div>
  </div>







<!--div del ranking(tabla en ajax.js)-->
  <div class="columna2">
    <div class="d-flex justify-content-center" style="margin-top: 51px;">
      <div class="p-2" ><p class="ranking">Top 5 de las zonas más frías según tus búsquedas</p></div>

<div id="ranking" class="ranking"></div>

    </div>
  </div>
</div>
</div>
</div>
    

   
  </body>
</html>

<?php 
}else{
  header("Location:index.php");
}