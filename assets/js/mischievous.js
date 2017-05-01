jQuery(document).ready(function(){
	jQuery('.menu-nav').parent().parent().css('float','right');

	jQuery('.owl-carousel').owlCarousel({
	    loop:true,
	    margin:200,
	    nav:true,
	    center:true,
	    autoWidth:true,
	    responsive:{
	        0:{
	            items:1,
	            margin:50
	        },
	        600:{
	            items:3,
	            margin:50
	        },
	        1000:{
	            items:4
	        }
	    }
	})
});