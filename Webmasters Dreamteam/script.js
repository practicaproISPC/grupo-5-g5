const dondeCrea = document.querySelector('.card-container');
var request = new XMLHttpRequest()


function crearOferta(titulo= 'Titulo', descripcion= 'Descripción', precio= 'Precio'){
	
	
 	let div = document.createElement('div');
	div.className = 'row';
	
	let div1 = document.createElement('div');
	div1.className = 'card card-shadow col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 reveal';
	
	let h3 = document.createElement('h3');
	h3.textContent = titulo;
	
	let p = document.createElement('p');
	p.textContent = descripcion;	
	
	let h5 = document.createElement('h5');
	h5.textContent = "A tan solo $" + precio;
	

	dondeCrea.appendChild(div); 
	div.appendChild(div1);
	div1.appendChild(h3);
	div1.appendChild(p);
	div1.appendChild(h5);

	
	
}

//Recibe un div ya seleccionado y limpia su contenido con innerHTML
function limpiarDiv(div){
	div.innerHTML= "";
}

// En vez de llamar a la función de crear tarjetas desde el boton, generamos una función que haga el fetch, limpie el div de index y que itere por cada item del JSON, llamando a crearOferta con el contenido de c/uno y populando nuevamente el div de index
function traerServicios(){
	request.open('GET', 'https://apiclientesfran.herokuapp.com/servicios', true)
	request.onload = function () {
	  // Begin accessing JSON data here
	  var data = JSON.parse(this.response)
	  
	  limpiarDiv(dondeCrea)
	  
	  if (request.status >= 200 && request.status < 400) {
		data.forEach(servicio => {
			let producto = servicio.producto;
			let descripcion = servicio.descripcion;
			let precio = servicio.precio;
			crearOferta(producto, descripcion, precio);
		  //console.log('Producto: ' + servicio.producto + '. Descripción: ' + servicio.descripcion + '. Precio $' + servicio.precio  )
		})
	  } else {
		console.log('error')
	  }
	}
	request.send()
		
}




