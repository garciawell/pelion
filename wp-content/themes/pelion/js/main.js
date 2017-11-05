$( document ).ready(function() { 
	$(window).scroll(function() {    
		var scroll = $(window).scrollTop();

	     //>=, not <=
	     if (scroll >= 300) {  
	        //clearHeader, not clearheader - caps H
	        $("#header").addClass("fixado");
	    }

	    else{
	    	$("#header").removeClass("fixado");

	    }
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

/******************************/


}); 






