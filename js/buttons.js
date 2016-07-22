jQuery(document).ready(function($) {
  $("#viewmore").click(function() {
    var signal = 0;
    var $window = $(window);

    function checkWidth() {
      var windowsize = $window.width();
      if (windowsize >= 1000 && signal != 1) {
        signal = 1;
        collapseChildren();
      } else if (windowsize > 600 && windowsize < 1000 && signal != 2) {
        signal = 2;
        collapseChildren();
      } else if (windowsize <= 600 && signal != 3) {
        signal = 3;
        collapseChildren();
      }
    }

    function collapseChildren() {
      if (signal == 1 && $("#viewmore").hasClass("collapsed")) {
        $(".person").css("display", "initial");
        $("#viewmore").removeClass("collapsed");
      } else if (signal == 1 && !$("#viewmore").hasClass("collapsed")) {
        $(".person:nth-child(n+4)").css("display", "none");
        $("#viewmore").addClass("collapsed");
      } else if (signal == 2 && $("#viewmore").hasClass("collapsed")) {
        $(".person").css("display", "initial");
        $("#viewmore").removeClass("collapsed");
      } else if (signal == 2 && !$("#viewmore").hasClass("collapsed")) {
        $(".person:nth-child(n+3)").css("display", "none");
        $("#viewmore").addClass("collapsed");
      } else if (signal == 3 && $("#viewmore").hasClass("collapsed")) {
        $(".person").css("display", "initial");
        $("#viewmore").removeClass("collapsed");
      } else if (signal == 3 && !$("#viewmore").hasClass("collapsed")) {
        $(".person:nth-child(n+2)").css("display", "none");
        $("#viewmore").addClass("collapsed");
      }
    }

    checkWidth();
    $(window).resize(checkWidth);
      
  });
});