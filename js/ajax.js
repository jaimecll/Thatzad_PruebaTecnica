var READY_STATE_COMPLETE=4;
var peticion_http = null;

function inicializa_xhr() {
	if (window.XMLHttpRequest) {
		return new XMLHttpRequest(); 
	} else if (window.ActiveXObject) {
		return new ActiveXObject("Microsoft.XMLHTTP"); 
	} 
}
function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
 
		try {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (E) {
			xmlhttp = false;
		}
	}
 
	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
	  xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}


//al cargar la pagina se ejecuta la funcion para crear el ranking y comprobar la ciudad introducida
window.onload = function() {
	comprobar();
	
}



function comprobar() {
	var city = document.getElementById("city").value;
	var city2 = city+",ES";
	peticion_http = inicializa_xhr();
	if(peticion_http) {
		peticion_http.onreadystatechange = procesaRespuesta;
		peticion_http.open("GET", "https://api.openweathermap.org/data/2.5/weather?q="+city2+"&units=metric&cnt=1&appid=57503d1ac0cd989b2bdf09e1bcd19c57&cnt=7&lang=es", true);
		peticion_http.send();
	}
}

//creacion tabla del ranking
function Ranking(){
 
    var ajax2=objetoAjax();
	ajax2.open("POST", "services/ranking.php", true);
        ajax2.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		ajax2.send();
	
	ajax2.onreadystatechange=function() {
		if (ajax2.readyState==4 && ajax2.status==200) {

			var respuesta2=JSON.parse(this.responseText);
			var tabla='<table>';
			for(var i=0;i<respuesta2.length;i++) {
				if(i==4){
					tabla+= "<tr>";
         		 tabla+="<td class='posicion'>"+(i+1)+".</td>";
         		 tabla+="<td class='grados'>"+ respuesta2[i].UltTemp_ciudad+ "º</td>";
          		tabla+="<td class='datos'><p>CP:"+ respuesta2[i].codigopostal_ciudad+ "</p><p>Ciudad:"+ respuesta2[i].nombre_ciudad+ "</p></td>";
          		tabla+="</tr>";
          		break;
				}else{
				tabla+= "<tr class='ranking'>";
         		 tabla+="<td class='posicion'>"+(i+1)+".</td>";
         		 tabla+="<td class='grados'>"+ respuesta2[i].UltTemp_ciudad+ "º</td>";
          		tabla+="<td class='datos'><p>CP:"+ respuesta2[i].codigopostal_ciudad+ "</p><p>Ciudad:"+ respuesta2[i].nombre_ciudad+ "</p></td>";
          		tabla+="</tr>";
       	}
		}
		 
		 document.getElementById('ranking').innerHTML=tabla;
	}
}
}
//Creacion de la tabla de datos actuales
function procesaRespuesta() {
	if(peticion_http.readyState == READY_STATE_COMPLETE) {
		if (peticion_http.status == 200) {
			
			var respuesta=JSON.parse(peticion_http.responseText);
			
			
			
			var login = document.getElementById("city").value;
			var nombre=respuesta.name;
			var temp=Math.round(respuesta.main.temp);
			var myIcon = respuesta.weather[0].icon;
			console.log(respuesta);
			if (respuesta.cod == "404") {

				document.getElementById("CP").innerHTML = "No encontrado";
			document.getElementById("nombre").innerHTML = "No encontrado";
				  


			}else{
				if (myIcon=="01n" || myIcon=="01d") {
				document.getElementById("icono").innerHTML = "<i class='fas fa-sun fa-4x'></i>";
				document.getElementById("tipo").innerHTML = "<bold>Soleado</bold>";

			}else if(myIcon=="02n" || myIcon=="02d") {
				document.getElementById("icono").innerHTML = "<i class='fas fa-cloud-sun fa-4x'></i>";
				document.getElementById("tipo").innerHTML = "<bold>Nube y sol</bold>";

			}else if(myIcon=="03n" || myIcon=="03d") {
				document.getElementById("icono").innerHTML = "<i class='fas fa-cloud fa-4x'></i>";
				document.getElementById("tipo").innerHTML = "<bold>Nube</bold>";

			}else if(myIcon=="04n" || myIcon=="04d") {
				document.getElementById("icono").innerHTML = "<i class='fas fa-cloud fa-4x'></i>";
				document.getElementById("tipo").innerHTML = "<bold>Nube</bold>";

			}else if(myIcon=="09n" || myIcon=="09d") {
				document.getElementById("icono").innerHTML = "<i class='fas fa-cloud-rain fa-4x'></i>";
				document.getElementById("tipo").innerHTML = "<bold>Lluvia</bold>";

			}else if(myIcon=="10n" || myIcon=="10d") {
				document.getElementById("icono").innerHTML = "<i class='fas fa-cloud-showers-heavy fa-4x'></i>";
				document.getElementById("tipo").innerHTML = "<bold>Lluvia</bold>";

			}else if(myIcon=="11n" || myIcon=="11d") {
				document.getElementById("icono").innerHTML = "<i class='fas fa-bolt fa-4x'></i>";
				document.getElementById("tipo").innerHTML = "<bold>Tormenta</bold>";

			}else if(myIcon=="13n" || myIcon=="13d") {
				document.getElementById("icono").innerHTML = "<i class='far fa-snowflake fa-4x'></i>";
				document.getElementById("tipo").innerHTML = "<bold>Nieve</bold>";

			}else if(myIcon=="50n" || myIcon=="50d") {
				document.getElementById("icono").innerHTML = "<i class='fas fa-smog fa-4x'></i>";
				document.getElementById("tipo").innerHTML = "<bold>Niebla</bold>";
			}
			var city = document.getElementById("city").value;
			document.getElementById("city").value="";
			document.getElementById("temperatura").innerHTML = temp+"º";
			document.getElementById("bdCP").value = city;
			document.getElementById("CP").innerHTML = city;
			document.getElementById("nombre").innerHTML = nombre;
			document.getElementById("valor_nombre").value = nombre;
			document.getElementById("valor_temp").value = temp;
			//document.getElementById("temperatura").innerHTML = "El tiempo en "+nombre+" es de: "+temp+"º<img src='"+myIcon+"'>";
			
			


			/*for (var i = 0; i < respuesta.length; i++) {
				alert("entra");
			temp=Math.round(respuesta[i].main.temp);
			myIcon = respuesta[i].weather[0].icon;



if (myIcon=="01n" || myIcon=="01d") {

				document.getElementById("icono"+i).innerHTML = "<i class='fas fa-sun fa-4x'></i>";
				document.getElementById("tipo"+i).innerHTML = "<bold>Soleado</bold>";

			}else if(myIcon=="02n" || myIcon=="02d") {
				document.getElementById("icono"+i).innerHTML = "<i class='fas fa-cloud-sun fa-4x'></i>";
				document.getElementById("tipo"+i).innerHTML = "<bold>Nube y sol</bold>";

			}else if(myIcon=="03n" || myIcon=="03d") {
				document.getElementById("icono"+i).innerHTML = "<i class='fas fa-cloud fa-4x'></i>";
				document.getElementById("tipo"+i).innerHTML = "<bold>Nube</bold>";

			}else if(myIcon=="04n" || myIcon=="04d") {
				document.getElementById("icono"+i).innerHTML = "<i class='fas fa-cloud fa-4x'></i>";
				document.getElementById("tipo"+i).innerHTML = "<bold>Nube</bold>";

			}else if(myIcon=="09n" || myIcon=="09d") {
				document.getElementById("icono"+i).innerHTML = "<i class='fas fa-cloud-rain fa-4x'></i>";
				document.getElementById("tipo"+i).innerHTML = "<bold>Lluvia</bold>";

			}else if(myIcon=="10n" || myIcon=="10d") {
				document.getElementById("icono"+i).innerHTML = "<i class='fas fa-cloud-showers-heavy fa-4x'></i>";
				document.getElementById("tipo"+i).innerHTML = "<bold>Lluvia</bold>";

			}else if(myIcon=="11n" || myIcon=="11d") {
				document.getElementById("icono"+i).innerHTML = "<i class='fas fa-bolt fa-4x'></i>";
				document.getElementById("tipo"+i).innerHTML = "<bold>Tormenta</bold>";

			}else if(myIcon=="13n" || myIcon=="13d") {
				document.getElementById("icono"+i).innerHTML = "<i class='far fa-snowflake fa-4x'></i>";
				document.getElementById("tipo"+i).innerHTML = "<bold>Nieve</bold>";

			}else if(myIcon=="50n" || myIcon=="50d") {
				document.getElementById("icono"+i).innerHTML = "<i class='fas fa-smog fa-4x'></i>";
				document.getElementById("tipo"+i).innerHTML = "<bold>Niebla</bold>";
			}

			document.getElementById("temp"+i).innerHTML = temp+"º";


		}*/
		InsertarCiudad();
		Ranking();
			}
		}else{
		
		document.getElementById("CP").innerHTML = "No encontrado";
			document.getElementById("nombre").innerHTML = "No encontrado";
			document.getElementById("icono").innerHTML = "";
				document.getElementById("tipo").innerHTML = "";
				document.getElementById("temperatura").innerHTML = "";
				document.getElementById("city").value="";
	}
	}
}

//Insercion en la base de datos mediante ajax
function InsertarCiudad(){

    var CodigoPostal = document.getElementById('bdCP').value;
    var Ciudad = document.getElementById('valor_nombre').value;
    var Temperatura = document.getElementById('valor_temp').value;
    var ajax2=objetoAjax();
	ajax2.open("POST", "services/insertarCiudad.php", true);
        ajax2.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        ajax2.send("CP="+CodigoPostal+"&Ciudad="+Ciudad+"&Temperatura="+Temperatura);
}




