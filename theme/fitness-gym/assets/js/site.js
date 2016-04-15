(function ($) {
	"use strict";  
/* Google Map  */
function gMap () {
if ($('#map').length) {

				var mapMarkers = {
					"markers": [
						{
							"latitude": "48.85661",
							"longitude":"2.35222",
							"icon": "assets/img/pin.png",
							"baloon_text": 'This is <strong>Texas</strong>'
						}
					]
				};

				$("#map").mapmarker({
					zoom : 16,
					center: "48.85661, 2.35222",
					dragging:1,
					mousewheel:0,
					markers: mapMarkers,
					featureType:"all",
					visibility: "on",
					elementType:"geometry"
					
				});
			
}
}
			
/* content carousel  */	
function fitnessCarosule () {
if ($('#fitness-coach').length) {		
  $("#fitness-coach").owlCarousel({
 
      autoPlay: 3000, //Set AutoPlay to 3 seconds
 
      items : 2,
      itemsDesktop : [1170,3],
      itemsDesktopSmall : [979,2]
 
  });
}
}
  
  
/* number counter effect */
function counT () {
if ($('.count').length) {	

$('.count').each(function() {
  $(this).prop('Counter', 0).animate({
    Counter: $(this).text()
  }, {
    duration: 4000,
    easing: 'swing',
    step: function(now) {
      $(this).text(Math.ceil(now));
    }
  });
});
}
}
/* Datepicker  */

function datePicker () {
if ($('#datepicker, #datepicker1').length) {	
    $( "#datepicker, #datepicker1" ).datepicker({minDate: 0});
  }
}
		 
 // wow activator
    function wowActivator () {
    	new WOW().init();
    }
// Contact Form
function contactFormValidation () {
if ($('#form').length) {
$('#form').validate({
        rules: {
            name: {
                required: true,
                minlength: 2
            },
            email: {
                required: true,
                email: true
            },
            mobile: {
                required: true
            },
            adult: {
                required: true,
            }
        },
        messages: {
            name: {
                required: "plese enter your name",
            },
            email: {
                required: "plese enter your email"
            },
            mobile: {
                required: "please enter your mobile number",
                minlength: "10"
            }

        },
        submitHandler: function(form) {
            $('#form').ajaxSubmit({
                type:"POST",
                data: $('#form').serialize(),
                url:"process.php",
                success: function() {
                    //$('#form :input').attr('disabled', 'disabled');
					//this.reset();
                    $('#form').fadeTo( "slow", 1, function() {
                       // $(this).find(':input').attr('disabled', 'disabled');
                       // $(this).find('label').css('cursor','default');
					   this.reset();
                        $('#success').fadeIn();
                    });
                },
                error: function() {
                    $('#form').fadeTo( "slow", 1, function() {
                        $('#error').fadeIn();
                    });
                }
            });
        }
    });
}
}
//Hide Loading Box (Preloader)
	function handlePreloader() {
		if($('.preloader').length){
			$('.preloader').delay(500).fadeOut(500);
		}
	}
// Dom Ready Function
	$(document).on('ready', function () {
		// add your functions
		gMap();
		fitnessCarosule();
		counT();
		datePicker();
		wowActivator();
		contactFormValidation();
		handlePreloader();
	});
	// window on load functino
	$(window).on('load', function () {
		// add your functions
	});

})(jQuery);