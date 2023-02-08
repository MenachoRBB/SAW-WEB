window.addEventListener('load', function(){  /*Código de la funcion del pase de diapositivas*/
	var imagenes = [];

	imagenes[0] = 'uno.jpeg'
	imagenes[1] = 'dos.jpeg'
	imagenes[2] = 'tres.jpeg'
	imagenes[3] = 'cuatro.jpeg'

	var i = 0;

	function cambiarImagenes(){

	document.slider.src = imagenes[i];

	if (i < 3){
		i++;
	}else{
		i = 0;
	}
}

setInterval(cambiarImagenes, 3000);

})