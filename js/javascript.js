function ValidacionCP(){
	var CodigoPostal = document.getElementById('CodigoPostal').value;
	
	if(CodigoPostal==''){
		document.getElementById('alerta').innerHTML = 'Has de rellenar el codigo postal.';
                document.getElementById('CodigoPostal').style.border = '2px solid red';

		return false;
	}else{
		return true;
	}
	
}