var $intervalId;
$(document).ready(function(){
	inicializacion();
  	animacionLayoutNegro();
 	iniciarBotonesRedesSociales();
 	$(".animacion-scroll").on("click", animacionScroll);
  	$("input[type='number']").on("keypress", isNumber);
  	$("input[type='number']").on("change", comprobarNumero);
  	$('#fecha-comienzo, #fecha-fin').datepicker({
		showOn: 'button', 
		buttonImage: './images/boton-transparente.png',
		buttonText: 'Select date'
	});
	$('.submit-formulario').on("click", comprobarFormulario);
});
function animacionLayoutNegro()
{
	$('#contenido-layout-negro h1').css({opacity:0});
	$('#contenido-layout-negro h2').css({opacity:0});
	$('#contenido-layout-negro h2.texto-activo').css({right: "5em"}); 
	$('#contenido-layout-negro h2.texto-activo').animate({opacity:1, right: "2em"}, 3000);
	$intervalId = setInterval(cambiarTextoLayoutNegro, 3000); 
}
function animacionScroll(event) {
	$("html,body").animate({scrollTop: $($(event.currentTarget).attr('href')).next().offset().top}, 1000);	
	event.preventDefault();
}
function cambiarTextoLayoutNegro()
{
	var $activeText = $('#contenido-layout-negro .texto-activo');
	var $nextText = $activeText.next(); 
	if($activeText.next().length > 0)
	{
		$nextText.css({opacity: 0}).addClass('texto-activo');
		if ($nextText.attr("id") == 'texto-2') 
		{
			$nextText.css({left: "7em"});
			$nextText.animate({opacity:1, left: "4em"}, 3000);
		}
		else if ($nextText.attr("id") == 'texto-3')
		{
			$nextText.css({right: "8em"});
			$nextText.animate({opacity:1, right: "5em"}, 3000);
		}
		else if ($nextText.attr("id") == 'texto-4')
		{
			$nextText.animate({opacity:1}, 3000);
		}
		else if ($nextText.attr("id") == 'texto-5')
		{
			$nextText.animate({opacity:1}, 2000);
		}
		$activeText.removeClass('texto-activo');
	}
	else
	{
		clearInterval($intervalId);
	};
}
function comprobarFormulario(event)
{
	$('form').find('.error-parametro-wrapper').each(function(){
		if (!($(this).hasClass('bloque-oculto'))) 
		{			
			$(this).addClass('bloque-oculto');
		};
		$(this).html('');
	});
	$('.error-parametro').each(function(){
		$(this).removeClass('error-parametro');
	});
	$('.parametro-requerido').each(function(){
		if ($(this).val().length == 0) 
		{
			if ($(this).parents('article').children('.error-parametro-wrapper:visible').length > 0) {
				$(this).parents('article').children('.error-parametro-wrapper').append('<span class="letra-alerta">' + $(this).parent().first().text() + ' is required.</span>');
			}
			else {
				$(this).parents('article').children('.error-parametro-wrapper').addClass('fondo-alerta').append('<span class="letra-alerta">' + $(this).parent().first().text() + ' is required.</span>').removeClass('bloque-oculto');
			};
			if ($(this).hasClass('error-parametro') == false) {$(this).addClass('error-parametro');};
		};
	});
	$('.parametro-mail').each(function(){
		if (($(this).val().length > 0) && !isEmail($(this).val()))
		{
			if ($(this).parents('article').children('.error-parametro-wrapper:visible').length > 0) {
				$(this).parents('article').children('.error-parametro-wrapper').append('<span class="letra-alerta">' + $(this).parent().first().text() + ' has a wrong format.</span>');
			}
			else {
				$(this).parents('article').children('.error-parametro-wrapper').addClass('fondo-alerta').append('<span class="letra-alerta">' + $(this).parent().first().text() + ' has a wrong format.</span>').removeClass('bloque-oculto');
			};
			if ($(this).hasClass('error-parametro') == false) {$(this).addClass('error-parametro');};
		};
	});
	if ($('.error-parametro').length > 0) {
		event.stopImmediatePropagation();
	}
	else {
		$(this).parents('form').submit();
	};
	event.preventDefault();
}
function comprobarNumero(event)
{
	var entero = 0;
	if ($(event.currentTarget).val() != '') {entero = parseInt($(event.currentTarget).val())};
	if (entero < 0) {entero = 0};
	$(event.currentTarget).val(entero);
}
function inicializacion()
{
	$('#video-presentacion').css('display','block');
	$('.ancla').removeAttr('name');
	$('.compartir-redes-sociales').css('display','block');
	$('.fecha-viaje').prop('readonly','true').addClass('puntero').next('span').css('display','inline-block');
	$('.wrapper-submit-formulario').css('display','inline-block');
}
function iniciarBotonesRedesSociales()
{
	$('.compartir-facebook').each(function(){
		var $url = 'http://charming-spain.com/' + $(this).parents('.entrada-blog').find('.titulo-entrada-blog a').attr('href');
		var $titulo = $(this).parents('.entrada-blog').find('.titulo-entrada-blog a').text().toLowerCase();
		var $separador = $(this).next();
		var $span = $(this).next().next();
		$(this).attr('href', 'http://www.facebook.com/sharer.php?u='+$url+'&t='+$titulo);
		$.ajax({
			url: 'http://graph.facebook.com/?ids='+$url,
			success: function(data){
				$separador.css('display', 'inline-block');
				$span.text(data[$url].shares || 0).css('display', 'inline-block');
			}
		});
	});
	$('.compartir-twitter').each(function(){
		var $url = 'http://charming-spain.com/' + $(this).parents('.entrada-blog').find('.titulo-entrada-blog a').attr('href');
		var $titulo = $(this).parents('.entrada-blog').find('.titulo-entrada-blog a').text().toLowerCase();
		var $separador = $(this).next();
		var $span = $(this).next().next();
		$(this).attr('href', 'http://www.twitter.com/?status='+'@CharmingSpain '+$titulo.charAt(0).toUpperCase()+$titulo.slice(1)+'. '+$url);
		$.ajax({
			dataType: 'jsonp',
			url: 'http://urls.api.twitter.com/1/urls/count.json?url='+$url,
			success: function(data){
				$separador.css('display', 'inline-block');
				$span.text(data.count || 0).css('display', 'inline-block');
			}
		});
	});
}
function isEmail(email)
{
	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9])+$/;
  	return regex.test(email);
}
function isNumber(event)
{
	if (event.keyCode < 48 || event.keyCode > 57)
	{
		event.preventDefault();
	};
}
function obtenerFacebookShares($url)
{
	$json_string = file_get_contents('http://graph.facebook.com/?ids='+$url);
	$json = json_decode($json_string, true);
	return intval( $json[$url]['shares'] );
}