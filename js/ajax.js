var READY_STATE_COMPLETE=4;
var peticion_http = null;

function inicializa_xhr() {
	if (window.XMLHttpRequest) {
		return new XMLHttpRequest(); 
	} else if (window.ActiveXObject) {
		return new ActiveXObject("Microsoft.XMLHTTP"); 
	} 
}

function comprobar() {
	var city = document.getElementById("city").value;
	peticion_http = inicializa_xhr();
	if(peticion_http) {
		peticion_http.onreadystatechange = procesaRespuesta;
		peticion_http.open("GET", "https://api.openweathermap.org/data/2.5/weather?q="+city+"&units=metric&appid=57503d1ac0cd989b2bdf09e1bcd19c57&lang=es", true);
		peticion_http.send();
	}
}

function procesaRespuesta() {
	if(peticion_http.readyState == READY_STATE_COMPLETE) {
		if (peticion_http.status == 200) {
			var respuesta=JSON.parse(peticion_http.responseText);
			var login = document.getElementById("city").value;
			var nombre=respuesta.name;
			var temp=Math.round(respuesta.main.temp);
			console.log(respuesta);
			if (respuesta.cod == "404") {
				document.getElementById("disponibilidad").innerHTML = "No hemos encontrado el pais"+login;
			}else{
			document.getElementById("temperatura").innerHTML = "El tiempo en "+nombre+" es de: "+temp+"º";
			}
		}
	}
}

window.onload = function() {
	comprobar();
}
