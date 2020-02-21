<!doctype html>
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

    <title>Thatzad Weather</title>
  </head>
  <body>



  	
  	<!--Columna central con bootstrap-->
  	<div class="d-flex justify-content-center">
  		<div class="d-flex flex-column">
 			<div class="p-2"><img class="LogoIndex" src="./img/Bitmap.png"></div>



 			<div class="p-2"><p id="alerta" style="color:red; text-align: center; font-family: Muli; font-size: 24px;"></p></div>
  			<div class="p-2"><p class="Texto1">Entérate del tiempo en la zona exacta que te interesa buscando por código postal.</p></div>



  			<!--Formulario para introducir codigo postal-->
  			<form id='inicio' action='home.php' method='POST' accept-charset='UTF-8' onsubmit = "return ValidacionCP()">
  			<div class="p-2"><input type="text" class="CodigoPostal" name="CodigoPostal" id="CodigoPostal" placeholder="Introduce el código postal"  pattern="[0-9]{5}"></div>
  			<!--<div class="p-2"><div class="Buscar" onclick=""><p class="TextoBoton">Buscar<span class="Lupa"><i class="fas fa-search-location fa-4x"></i></span></p></div></div>-->
  			<div class="p-2"><button class="Buscar" type="submit" name="eviar"><p class="TextoBoton">Buscar<span class="LupaIndex"><i class="fas fa-search-location fa-4x"></i></span></p></button></div>
  			</form>





  			<div class="p-2"><p class="Texto2">¡Que la lluvia no te pare!</p></div>
		</div>
  		
  		
		

  	</div>
    

   
  </body>
</html>