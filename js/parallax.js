jQuery(document).ready(function($) {
	var jumboHeight = $('.jumbotron').outerHeight();
	function parallax(){
	    var scrolled = $(window).scrollTop();
	    $('.bg').css('height', (jumboHeight-scrolled) + 'px');
	}

	$(window).scroll(function(e){
	    parallax();
	});
});
jQuery(document).ready(function($) {
	var jumboHeight = $('.jumbotron').outerHeight();
	function parallax(){
	    var scrolled = $(window).scrollTop();
	    $('.bg-post').css('height', (jumboHeight-scrolled) + 'px');
	}

	$(window).scroll(function(e){
	    parallax();
	});
});