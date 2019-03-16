var btn = document.getElementById('btn_cargar_usuarios');
var loader = document.getElementById('loader');

btn.addEventListener('click', function(){
	var peticion = new XMLHttpRequest();
	 //peticion.open('GET', 'http://www.json-generator.com/api/json/get/cljKBuMIgO?indent=2');
	peticion.open('GET', 'php/usuarios.php');//podemos utilizar post o get

	loader.classList.add('active');// le permitira al usuario saber que se esta cargando, el css ya esta definido

	peticion.onload = function(){
		// console.log(JSON.parse(peticion.responseText)[0].nombre);
		var datos = JSON.parse(peticion.responseText);//json.parse para poder leer correctamente el archivo

		for(var i = 0; i < datos.length; i++){//esta forma es mas recomendada ya que se tiene mas control, podemos restringir el numero de datos a mostrar
			var elemento = document.createElement('tr');//por dato agregar una etiqueta tr
			elemento.innerHTML += ("<td>" + datos[i].id + "</td>");
			elemento.innerHTML += ("<td>" + datos[i].nombre + "</td>");
			elemento.innerHTML += ("<td>" + datos[i].edad + "</td>");
			elemento.innerHTML += ("<td>" + datos[i].pais + "</td>");
			elemento.innerHTML += ("<td>" + datos[i].correo + "</td>");
			document.getElementById('tabla').appendChild(elemento);// acceder a la tabla por su id y agregar el elemento
		}

		// datos.forEach(persona => {//segunda opcion
			// var elemento = document.createElement('tr');//por cada elemento agrega una etiqueta tr
			// elemento.innerHTML += ("<td>" + persona.id + "</td>");
			// elemento.innerHTML += ("<td>" + persona.nombre + "</td>");
			// elemento.innerHTML += ("<td>" + persona.edad + "</td>");
			// elemento.innerHTML += ("<td>" + persona.pais + "</td>");
			// elemento.innerHTML += ("<td>" + persona.correo + "</td>");
			// document.getElementById('tabla').appendChild(elemento);//acceder a la tabla por su id y agregar el contenido
		// });
	}

	peticion.onreadystatechange = function(){// se ejecutara hasta que el estado de la peticion cambie
		if(peticion.readyState == 4 && peticion.status == 200){
			loader.classList.remove('active');
		}
	}


	peticion.send();//para terminar de enviar la peticion correctamente
});