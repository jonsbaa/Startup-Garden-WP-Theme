jQuery(document).ready(function($) {
  $(".navbar li a[href^='#']").click(function(e) {
        // prevent default anchor click behavior
         e.preventDefault();
       
         // store hash
         var hash = this.hash;
       
         // animate
         $('html, body').animate({
             scrollTop: $(this.hash).offset().top - 40
           }, 300, function(){
       
             // when done, add hash to url
             // (default click behaviour)
             window.location.hash = hash;
           });
      });
      $(".navbar-header a[href^='#']").on('click', function(e) {
         // prevent default anchor click behavior
         e.preventDefault();
       
         // store hash
         var hash = this.hash;
       
         // animate
         $('html, body').animate({
             scrollTop: $(this.hash).offset().top
           }, 300, function(){
       
             // when done, add hash to url
             // (default click behaviour)
             window.location.hash = hash;
           });
       
      });
});