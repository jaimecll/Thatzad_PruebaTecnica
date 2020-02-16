
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
        <p class="eleccion" id="CodigoPostal">Código postal:</p>
        <p class="eleccion" id="Ciudad">Ciudad:</p>
      </div>
      <div class="col-md-6">
        <form id='home' action='home.php' method='POST' accept-charset='UTF-8' onsubmit = "return ValidacionCP()">
          
  <div class="p-2"> <span class="Lupa"><i class="fas fa-search-location fa-4x"></i></span><input class="Busqueda" type="text" name="Busqueda" placeholder="Buscar otra zona">
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
            <td class="ahora" id="temperatura"><input type="hidden" name="city" id="city" value="barcelona"></td>
            <td class="horas">Próximas horas</td>
            <td class="dias">Próximas 5 días</td>
          </tr>

        </table>



     </div>
  </div>








  <div class="columna2">
    <div class="d-flex justify-content-center" style="margin-top: 51px;">
      <div class="p-2" ><p class="ranking">Top 5 de las zonas más frías según tus búsquedas</p></div>





      <table class="ranking">

        <tr class="ranking">
          <td class="posicion">1.</td>
          <td class="grados">-3º</td>
          <td class="datos"><p>CP:</p><p>Ciudad:</p></td>
        </tr>
        <tr class="ranking">
          <td class="posicion">2.</td>
          <td class="grados">5º</td>
          <td class="datos"><p>CP:</p><p>Ciudad:</p></td>
        </tr>
        <tr class="ranking">
          <td class="posicion">3.</td>
          <td class="grados">20º</td>
          <td class="datos"><p>CP:</p><p>Ciudad:</p></td>
        </tr>
        <tr class="ranking">
          <td class="posicion">4.</td>
          <td class="grados">21º</td>
          <td class="datos"><p>CP:</p><p>Ciudad:</p></td>
        </tr>
        <tr>
          <td class="posicion">5.</td>
          <td class="grados">23º</td>
          <td class="datos"><p>CP:</p><p>Ciudad:</p></td>
        </tr>
      </table>




    </div>
  </div>
</div>
</div>
</div>
    

   
  </body>
</html>