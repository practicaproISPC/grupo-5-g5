function validar(){
 if(isNaN(document.getElementById('tel').value)){
	alert("El campo Teléfono de contacto es incorrecto");
		return false;
	}
window.location.href='FormDatos.php';
return false;
}