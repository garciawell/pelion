$( document ).ready(function() { 
	$(window).scroll(function() {    
		var scroll = $(window).scrollTop();

	     //>=, not <=
	     if (scroll >= 125) {    
	        //clearHeader, not clearheader - caps H
	        $("#header").addClass("fixado");
	    }

	    else{
	    	$("#header").removeClass("fixado");

	    }
	}); 
 
/******SCROLL TOP**********/

$('#scroll-top').click(function(){
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
});


	/**********Busca*********/
$(function() {
	$(".fa-search").on("click",function(){
	  $('.search-form').addClass("ativo");
	
	}); 

  $('#content, .menu-topo').on("click", function(e) {
 		 $('.search-form').removeClass("ativo");
	});  
}); 



 


	/**********CAROUSEL*********/






  $('.owl-carousel-thumbs').owlCarousel({
    items: 1 , 
     URLhashListener:false
  });


$('.owl-slider-post').owlCarousel({
    loop:true,
    margin:0,  
    nav:true, 
    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'], 
    responsive:{
        0:{
            items:1 
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});   




jQuery(function($) {  
	
	"use strict";

	$(function () { 
		$('.searchandfilter').on("sf:ajaxstart", ".searchandfilter", function(){console.log("ajax start");});
		$(document).on("sf:ajaxfinish", ".searchandfilter", function(){console.log("ajax complete"); document.write("<h1>hi all!</h1>");});
		$(document).on("sf:init", ".searchandfilter", function(){console.log("S&F JS initialised");});
	}); 


});

/******REVIEW HOME*************/
$('#owl-review').owlCarousel({
    //loop:true,
    margin:50,
    nav:true,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'], 
    responsive:{
        0:{
            items:1 
        },
        767:{
            items:2
        },
        1000:{
            items:3
        }
    }
})

 
/*****MASCARAS************/
jQuery(function($) {  
	$.mask.definitions['~']='[+-]';
	//Inicio Mascara Telefone
	$('input[type=tel]').focusout(function(){
		var phone, element;
		element = $(this);
		element.unmask();
		phone = element.val().replace(/\D/g, '');
		if(phone.length > 10) {
			element.mask("(99) 99999-999?9");
		} else {
			element.mask("(99) 9999-9999?9");
		}
	}).trigger('focusout');
	//Fim Mascara Telefone	
	$("#rg").mask("99.999.999-*"); 
	$(".cnpj-dest input").mask("99.999.999/9999-99");  

});


$(".cpf input").on('focusin',function(){
	var target = $(this);
	var val = target.val();
	target.unmask();
	val = val.split(".").join("");
	val = val.split("-").join("");
	val = val.split("/").join("");
	target.val(val);
});
$(".cpf input").on('focusout',function(){
	var target = $(this);
	var val = target.val();
	val = val.split(".").join("");
	val = val.split("-").join("");
	val = val.split("/").join("");
	if (val.length==11) {
		target.mask("999.999.999-99");
		target.val(val);
	} else {
		if (val.length==14) {
			target.mask("99.999.999/9999-99");
			target.val(val);
		} else {
			target.val('');
		}
	}
});

/***********SMOOTH SCROLL*******************/
// Select all links with hashes
$('.ancora')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top -90
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });


}); 









