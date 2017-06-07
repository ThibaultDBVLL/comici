(function ($) {
  $(document).ready(function(){

	 hide .navbar first
	 $(".navbar").hide();

	 fade in .navbar
	$(function () {
		$(window).scroll(function () {
            // set distance user needs to scroll before we fadeIn navbar
			if ($(this).scrollTop() > 660) {
				$('.navbar').fadeIn();
				$('#axeculture').fadeIn();
				$('#axeinitiatives').fadeIn();
				$('#axepatrimoine').fadeIn();
			} else {
				$('.navbar').fadeOut();
				$('#axeculture').fadeOut();
				$('#axeinitiatives').fadeOut();
				$('#axepatrimoine').fadeOut();
			}
		});


	});

});
  }(jQuery));
