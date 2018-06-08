
$(document).ready(function() {


	// MENU

	var mobile_menu = $('#mobile_menu .navbar-end')

	$('.navbar-burger').click(function(e){
        var el = $(e.currentTarget)
        var target = $('#' + el.data('target'))
        el.toggleClass('is-active')
        target.toggleClass('is-active')
    })

	$(".site-menu a").each(function( index ) {
		var link = $(this).clone().appendTo(mobile_menu)
		link.addClass('navbar-item')
	})

	mobile_menu.append('<hr style="margin: 10px 0;">')

	$(".site-categories a").each(function( index ) {
		var link = $(this).clone().appendTo(mobile_menu)
		link.addClass('navbar-item')
	})

	// HOME

	$('.destaques-carousel').flickity({
		adaptiveHeight: true,
		wrapAround: true,
		autoPlay: 5000
	})


	// MODAL

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