// ovo ispod je iz 3r-jquery.mobile-1.3.0-beta.1.js	//3R

	// jQuery.mobile configurable options
	$.mobile = $.extend($.mobile, {

		// Automatically handle clicks and form submissions through Ajax, when same-domain
		ajaxEnabled: true,

		// Automatically load and show pages based on location.hash
		hashListeningEnabled: true,

		// disable to prevent jquery from bothering with links
		linkBindingEnabled: true,

		// Set default page transition - 'none' for no transitions
		defaultPageTransition: "fade",

		// Set maximum window width for transitions to apply - 'false' for no limit
		maxTransitionWidth: false,

		// Minimum scroll distance that will be remembered when returning to a page
		minScrollBack: 250,

		// DEPRECATED: the following property is no longer in use, but defined until 2.0 to prevent conflicts
		touchOverflowEnabled: false,

		// Set default dialog transition - 'none' for no transitions
		defaultDialogTransition: "pop",

		// Error response message - appears when an Ajax page request fails
		pageLoadErrorMessage: "Error loading page... or the page does not exist!",
		// pageLoadErrorMessage: "Greška u učitavanju strane... ili strana ne postoji!",	//3R

		// For error messages, which theme does the box uses?
		// pageLoadErrorMessageTheme: "e",
		pageLoadErrorMessageTheme: "d",	//3R

		// replace calls to window.history.back with phonegaps navigation helper
		// where it is provided on the window object
		phonegapNavigationEnabled: false,

		//automatically initialize the DOM when it's ready
		autoInitializePage: true,

		pushStateEnabled: true,

		// allows users to opt in to ignoring content by marking a parent element as
		// data-ignored
		ignoreContentEnabled: false,

		// turn of binding to the native orientationchange due to android orientation behavior
		orientationChangeEnabled: true,

		buttonMarkup: {
			hoverDelay: 200
		},

	}, $.mobile );
//...
// ovo iznad je iz 3r-jquery.mobile-1.3.0-beta.1.js	//3R


$('.returnTopAction').live('click', function() {
		$('html, body').animate({scrollTop: '0'}, 700);
		});

$('#gallery-page').live('pageshow', function () { 
		$myPhotoSwipe = $(".gallery a").photoSwipe({ 
			// General
			preventHide: false,	//false (sakrije X "close" dole u slideshow-u)	//3R
			preventSlideshow: false,	//false (sakrije "play" dole u slideshow-u)	//3R
			enableMouseWheel: false,
			enableKeyboard: false,
			preventDefaultTouchEvents: true,	//true (ne radi dobro levo-desno)	//3R

			// ZoomPanRotate
			allowUserZoom: true,

			// Carousel
			loop: true,
			slideSpeed: 250,					//250	//3R
			nextPreviousSlideSpeed: 0,		  //0		//3R
			enableDrag: true,
			swipeThreshold: 50,				 //50	//3R
			swipeTimeThreshold: 250,			//250	//3R
			slideTimingFunction: 'ease-out',
			slideshowDelay: 300,				//3000	//3R
			doubleTapSpeed: 250,
			margin: 20,						 //20	//3R
			imageScaleMethod: 'fit', // Either "fit", "fitNoUpscale" or "zoom",
			
			// ZoomPanRotate
			allowUserZoom: true, 
			allowRotationOnUserZoom: false,
			maxUserZoom: 5.0,
			minUserZoom: 0.5,
			doubleTapZoomLevel: 2.5,
		});
	});
		
$('#send').live("click", function() {
		var url = 'send.php';
		var error = 0;
		var $contactpage = $(this).closest('.ui-page');
		var $contactform = $(this).closest('.contact-form');
		$('.required', $contactform).each(function(i) {
			if($(this).val() === '') {
				error++;
			}
		});
		// each
		if(error > 0) {
//			alert('Molimo Vas popunite sva obavezna polja. Obavezna polja su obeležena zvezdicom *.');	//3R
			alert('Please fill in all the mandatory fields. Mandatory fields are marked with an asterisk *.');
		} else {
			var firstname = $contactform.find('input[name="firstname"]').val();
			var surname = $contactform.find('input[name="surname"]').val();
			var state = $contactform.find('select[name="state"]').val();
			var mobilephone = $contactform.find('input[name="mobilephone"]').val();
			var email = $contactform.find('input[name="email"]').val();
			var message = $contactform.find('textarea[name="message"]').val();

			//submit the form
			$.ajax({
				type : "GET",
				url : url,
				data : {
					firstname : firstname,
					surname : surname,
					state : state,
					mobilephone : mobilephone,
					email : email,
					message : message
				},
				success : function(data) {
					if(data == 'success') {
						// show thank you
						$contactpage.find('.contact-thankyou').show();
						$contactpage.find('.contact-form').hide();
					} else {
//						alert('Vaša poruka nije poslata. Molimo, pokušajte ponovo.');	//3R
						alert('Unable to send your message. Please try again.');
					}
				}
			});	//$.ajax

		}
		return false;
	});

// centriranje sadrzaja na strani (radi, ali ako rotiramo moramo refrešovati stranu)	//3R
/*	$(function centriranje(){
		$('#centar').each(function(){
			$(this).css('left',($(window).width()-$(this).outerWidth())/ 2 + 'px');
			$(this).css('top',($(window).height()-$(this).outerHeight())/ 2 + 'px');
		});
	});
*/

/* EXIT pomocu back tastera na mobilnom (ako se trenutno nalazimo na #login stranici) */
/*
  document.addEventListener("backbutton", function(e){
    if($.mobile.activePage.is('#login')){
        e.preventDefault();
        navigator.app.exitApp();
    }
    else {
        navigator.app.backHistory()
    }
  }, false);
*/

/* EXIT pomocu back tastera na mobilnom (ako se nalazimo na bilo kojoj stranici) */
/*
  document.addEventListener("deviceready", onDeviceReady, false);
	function onDeviceReady() {
		document.addEventListener("backbutton", onBackKeyDown, false);
	}
	function onBackKeyDown() 
	{
	 navigator.app.exitApp();
  }
*/
