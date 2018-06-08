
$(document).ready(function() {

	$('.destaques-carousel').flickity({
		adaptiveHeight: true,
		wrapAround: true,
		autoPlay: 5000
	})


	$('.abrir-perfil').click(function(e){
		e.preventDefault()
		var el = e.currentTarget
		var nome = $('.nome', el).html() 
		var titulo = $('.titulo', el).html() 
		var foto = $('.foto', el).attr('src') 
		var bio = $('.bio', el).html()
		$('.modal .nome').html(nome)
		$('.modal .titulo').html(titulo)
		$('.modal .foto').attr('src', foto)
		$('.modal .texto').html(bio)
		$('.modal').addClass('is-active')
	})

	$('.modal-close,.modal-background').click(function(e){
		$('.modal').removeClass('is-active')
	})

})