
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





<div class="d-flex justify-content-center">
      <div class="p-2" ><img class="Logo" src="./img/Bitmap.png"><p class="Texto3">¡Que la lluvia no te pare!</p></div>

  </div>
  <div style="margin-top: -50px;">
      <div class="modal-body row" style="margin:50px;">






  <div class="columna1">
     <div class="d-flex justify-content-center" style="margin-top: 51px;">
       <div class="col-md-4" style="padding-left:200px;" >
        <p class="eleccion" id="CodigoPostal">Código postal:</p><p class="CodigoPostal" id="CP"></p>
        <p class="eleccion" id="Ciudad">Ciudad: </p><p class="nombre" id="nombre"></p>
      </div>
      <div class="col-md-6">
        <form id='home' name='home' action='home.php' method='POST' accept-charset='UTF-8' onsubmit = "return ValidacionCP()">
          
  <div class="p-2"> <a href="#" onClick="home.submit()"><span class="Lupa"><i class="fas fa-search-location fa-4x"></i></span></a><input class="Busqueda" type="text" name="CodigoPostal" placeholder="Buscar otra zona">
</div>
         
        </form>
      </div>

        <table class="ranking">
          <tr>
            <td class="ahora">Ahora</td>
            <td class="horas">Próximas horas</td>
            <td class="dias">Próximas 5 días</td>
          </tr>
          <tr>
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

            <td class="contenido-horas">
              <table>
                <tr>
                  <td class="tabla-horas">Ahora</td>
                  <td class="tabla-horas">18:00</td>
                  <td class="tabla-horas">19:00</td>
                  <td class="tabla-horas2">20:00</td>
                </tr>
                <tr style="height: 70px;">
                  <td class="tabla-horas"><i class="far fa-snowflake fa-2x"></i></td>
                  <td class="tabla-horas"> <i class="far fa-snowflake fa-2x"></i></td>
                  <td class="tabla-horas"><i class="far fa-snowflake fa-2x"></i></td>
                  <td class="tabla-horas2"><i class="far fa-snowflake fa-2x"></i></td>
                </tr>
                <tr>
                  <td class="tabla-horas">Nieve</td>
                  <td class="tabla-horas"> Nieve</td>
                  <td class="tabla-horas">Nieve</td>
                  <td class="tabla-horas2">Nieve</td>
                </tr>
                <tr>
                  <td class="tabla-horas" style="font-size:18px;">-3º</td>
                  <td class="tabla-horas" style="font-size:18px;">-3º</td>
                  <td class="tabla-horas" style="font-size:18px;">-3º</td>
                  <td class="tabla-horas2" style="font-size:18px;">-3º</td>
                </tr>
              
            </table>
          </td>
            <td class="contenido-dias">
              <div class="slider">
            <ul>
            <li>
          <table>
                <tr>
                  <td class="tabla-horas">Ahora</td>
                </tr>
                <tr style="height: 70px;">
                  <td class="tabla-horas"><i class="far fa-snowflake fa-2x"></i></td> 
                </tr>
                <tr>
                  <td class="tabla-horas">Nieve</td>
                </tr>
                <tr>
                  <td class="tabla-horas" style="font-size:18px;">-3º</td>
                </tr>
            </table>
          </li>
          <li>
        <table>
                <tr>
                  <td class="tabla-horas">Ahora</td>
                </tr>
                <tr style="height: 70px;">
                  <td class="tabla-horas"><i class="far fa-snowflake fa-2x"></i></td>
                </tr>
                <tr>
                  <td class="tabla-horas">Nieve</td>
                </tr>
                <tr>
                  <td class="tabla-horas" style="font-size:18px;">-3º</td>
                </tr>
            </table>
          </li>
          <li>
        <table>
                <tr>
                  <td class="tabla-horas">Ahora</td> 
                </tr>
                <tr style="height: 70px;">
                  <td class="tabla-horas"><i class="far fa-snowflake fa-2x"></i></td> 
                </tr>
                <tr>
                  <td class="tabla-horas">Nieve</td>
                </tr>
                <tr>
                  <td class="tabla-horas" style="font-size:18px;">-3º</td>
                </tr>
            </table>
          </li>
         <li>
        <table>
                <tr>
                  <td class="tabla-horas">Ahora</td>
                </tr>
                <tr style="height: 70px;">
                  <td class="tabla-horas"><i class="far fa-snowflake fa-2x"></i></td>
                </tr>
                <tr>
                  <td class="tabla-horas">Nieve</td>
                </tr>
                <tr>
                  <td class="tabla-horas" style="font-size:18px;">-3º</td>
                </tr>
            </table>
          </li>
          <li>
        <table>
                <tr>
                  <td class="tabla-horas2">Ahora</td>
                </tr>
                <tr style="height: 70px;">
                  <td class="tabla-horas2"><i class="far fa-snowflake fa-2x"></i></td>
                </tr>
                <tr>
                  <td class="tabla-horas2">Nieve</td>
                </tr>
                <tr>
                  <td class="tabla-horas2" style="font-size:18px;">-3º</td>
                </tr>
            </table>
          </li>
      </ul>
    </div>
            </td>
          </tr>

        </table>



     </div>
  </div>








  <div class="columna2">
    <div class="d-flex justify-content-center" style="margin-top: 51px;">
      <div class="p-2" ><p class="ranking">Top 5 de las zonas más frías según tus búsquedas</p></div>




<div id="ranking" class="ranking">
      
</div>



    </div>
  </div>
</div>
</div>
</div>
    

   
  </body>
</html>

<!--
  <i class="fas fa-sun"></i>
  <i class="fas fa-cloud-sun"></i>
  <i class="fas fa-cloud"></i>
  <i class="fas fa-cloud"></i>
  <i class="fas fa-cloud-rain"></i>
  <i class="fas fa-cloud-showers-heavy"></i>
  <i class="fas fa-bolt"></i>
  <i class="far fa-snowflake"></i>
  <i class="fas fa-smog"></i>
  -->