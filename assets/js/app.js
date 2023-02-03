window.onload = function(){ 
	$('#loader').fadeOut();
	$('body').removeClass('overflowh');
	$('#header').removeClass('hidden');
}

$(document).ready(function(){	
	$('.ir-arriba').click(function(){
		// body...
		$('body, html').animate({
			scrollTop: '0px'
		}, 2000);
	});

	$(window).scroll(function(){
		if( $(this).scrollTop() > 200){
			$('.ir-arriba').slideDown(1900);
		} else{
			$('.ir-arriba').slideUp(1900); 
		}
	});

	//whatsapp
	$("#ico-whatsapp").click(function(){		
		$(this).css("transition","all 1s ease" );
		$(this).toggleClass("rotar180");
		$(".ico-whatsapp i").toggleClass("fab fa-whatsapp");
		$(".ico-whatsapp i").toggleClass("fas fa-times");
		$("#popup-what").slideToggle('slow');
		$("#text-whatsapp").slideToggle('slow');		
	});

	//CARUSSEL
	$('.owl-carousel').owlCarousel({
		loop:true,		
		nav:false,
    margin:10,
		autoplay:true,
		autoplaySpeed: 1500,
		autoplayTimeout:4000,
		autoplayHoverPause:true,
		responsive:{
			0:{
					items:1
			},			
			800:{
					items:2
			},
			1200:{
				items: 4
			}
		}
	});

	// CERRAR MODAL
	$(".fa-times").click(function(){
		$("#error").slideToggle(500);
	});

	//fixed
	// var altura = $(".header").offset().top;	
	// console.log(altura);
	// $(window).on('scroll', function(){
	// 	if($(window).scrollTop() >= 1){
	// 		$(".header").addClass('fixed');
	// 	}else{
	// 		$(".header").removeClass('fixed');
	// 	}
	// });

});

$(document).ready(function () {
	$('.aniview').AniView(options);
	var options = {
		animateThreshold: 100,
		scrollPollInterval: 50
	}
});  

// SCROLL ANIMADO
$("nav#navbar a").click(function(e){	
	e.preventDefault();
	var href = $(this).attr("href");	
	$(href).animatescroll({
		scrollSpeed:1500			
	});
	$("#navbar").fadeOut();	
});

$(function(){
	var ancho = $(window).width(),
		navbar = $('#navbar'),
		btnMenu = $('#btn-menu'),
		icono = $('#btn-menu .icono');

	if(ancho < 960){
		navbar.hide();
	}

	btnMenu.on('click', function(){
		navbar.fadeToggle('slow');
		icono.toggleClass('fa-bars');
		icono.toggleClass('fa-times');
	});

	$(window).on('resize', function(){
		if($(this).width() > 960){
			navbar.show();
			icono.addClass('fa-times');
			icono.removeClass('fa-bars');
		}else{
			navbar.hide();
			icono.addClass('fa-bars');
			icono.removeClass('fa-times');
		}
	});
});

var ventana_ancho = $(window).width();		
//console.log(ventana_ancho);
if(ventana_ancho < 760){
  $(".item-menu").click(function(){			
    var submenu = $(this).find("div.submenu");
    //console.log(submenu);
    submenu.toggle("slideDown");
  });
}

/* Enlaces
 * https://programacion.net/articulo/15_librerias_de_javascript_para_hacer_efectos_de_scroll_impresionantes_1308
 * 
 * https://github.com/jjcosgrove/jquery-aniview
 * https://jjcosgrove.github.io/jquery-aniview/
*/