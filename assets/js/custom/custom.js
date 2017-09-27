/**
 *	Custom jQuery Scripts
 *	
 *	Developed by: Austin Crane	
 *	Designed by: Austin Crane
 */

jQuery(document).ready(function ($) {
	
	/*
	*
	*	Current Page Active
	*
	------------------------------------*/
	$("[href]").each(function() {
    if (this.href == window.location.href) {
        $(this).addClass("active");
        }
	});
	
	/*
	*
	*	Flexslider
	*
	------------------------------------*/
	$('.flexslider').flexslider({
		animation: "slide",
		controlNav: false,
		prevText: '<i class="fa fa-chevron-circle-left"></i>',
		nextText: '<i class="fa fa-chevron-circle-right"></i>',
		slideshowSpeed: 8000,
	}); // end register flexslider
	
	/*
	*
	*	Colorbox
	*
	------------------------------------*/
	$('a.gallery').colorbox({
		rel:'gal',
		width: '80%', 
		height: '80%'
	});
	
	/*
	*
	*	Isotope with Images Loaded
	*
	------------------------------------*/
	var $container = $('#container').imagesLoaded( function() {
  	$container.isotope({
    // options
	 itemSelector: '.item',
		  masonry: {
			gutter: 15
			}
 		 });
	});

	
	
	/*
	*
	*	Equal Heights Divs
	*
	------------------------------------*/
	$('.js-blocks').matchHeight();

	/*
	*
	*	Wow Animation
	*
	------------------------------------*/
	new WOW().init();

	$('#search-icon').click(function(){
		var $this = $(this);
		var $font_awesome = $this.find("i.fa");
		$search_form = $this.parents('.form-search').eq(0);
		if($search_form.hasClass("toggled")){
			$search_form.removeClass('toggled');
			$font_awesome.removeClass("fa-close");
			$font_awesome.addClass("fa-search");
		} else {
			$search_form.addClass('toggled');
			$font_awesome.addClass("fa-close");
			$font_awesome.removeClass("fa-search");
		}
	});

});// END #####################################    END