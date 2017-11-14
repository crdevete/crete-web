
function main() {


// Preloader */
	  	$(window).load(function() {

   	// will first fade out the loading animation 
    	$(".spinner").fadeOut("slow"); 

    	// will fade out the whole DIV that covers the website. 
    	$("#preloader").delay(5000).fadeOut("slow").remove();      

  	}) 

    /*Form Functions*/

    $(document).ready(function () {



        $(".learn-hide").hide();
        $("#otherjob").hide();
        $("#school").hide();
        $("#undergraduate").hide();
        $("#otherFaculty").hide();
        $("#otherUniversity").hide();
        $("#gradyear").hide();
        $("#work").hide();
        $("#freelancer").hide();
        $("#otherjobtitle").hide();
        $("#mentionotherstudent").hide();

        
        $('.show-more').click(function(e){

    

            var learnvar = $( this ).find( '.learn-hide' );
            var isVisible = learnvar.is(':visible');

            if ((isVisible === true) && (!$(e.target).hasClass('sub-learn'))) {
                
                learnvar.slideUp();
            } else {
            
            $('.learn-hide').not(learnvar).each(function(){
                     $(this).slideUp();
                 });
            learnvar.slideDown();
            
            }

            
            
            });


$(document).click(function(e){


    if( $(e.target).closest(".show-more").length > 0 ) {
        return false;
    }
    $('.learn-hide').slideUp();

});


        $('#seljob').on('change', function () {
            var selection = $(this).val();
            switch (selection) {
                case "School Student":
                    {
                        $("#work").fadeOut("fast");
                        $("#mentionotherstudent").fadeOut("fast");
                        $("#gradyear").fadeOut("fast");
                        $("#undergraduate").fadeOut("fast");
                        $("#otherjob").fadeOut("fast");
                        $("#otherUniversity").fadeOut("fast");
                        $("#otherFaculty").fadeOut("fast");
                        $("#school").fadeIn("medium");

                    }
                    break;
                case "طالب مدرسى":
                    {
                        $("#work").fadeOut("fast");
                        $("#mentionotherstudent").fadeOut("fast");
                        $("#gradyear").fadeOut("fast");
                        $("#undergraduate").fadeOut("fast");
                        $("#otherjob").fadeOut("fast");
                        $("#otherUniversity").fadeOut("fast");
                        $("#otherFaculty").fadeOut("fast");
                        $("#school").fadeIn("medium");

                    }
                    break;
                case "Undergraduate":
                    {
                        $("#work").fadeOut("fast");
                        
                        $("#otherjob").fadeOut("fast");
                        $("#school").fadeOut("fast");
                        
                        $("#undergraduate").fadeIn("medium");
                        $("#gradyear").fadeIn("medium");

                    }
                    break;
                case "طالب جامعى":
                    {
                        $("#work").fadeOut("fast");
                        
                        $("#otherjob").fadeOut("fast");
                        $("#school").fadeOut("fast");
                        
                        $("#undergraduate").fadeIn("medium");
                        $("#gradyear").fadeIn("medium");

                    }
                    break;                    
                case "Graduated":
                    {
                        $("#work").fadeOut("fast");
                        
                        $("#otherjob").fadeOut("fast");
                        $("#school").fadeOut("fast");
                        
                        $("#undergraduate").fadeIn("medium");
                        $("#gradyear").fadeIn("medium");

                    }
                    break;
                case "خريج":
                    {
                        $("#work").fadeOut("fast");
                        
                        $("#otherjob").fadeOut("fast");
                        $("#school").fadeOut("fast");
                        
                        $("#undergraduate").fadeIn("medium");
                        $("#gradyear").fadeIn("medium");

                    }
                    break;
                case "Working":
                    {
                        $("#gradyear").fadeOut("fast");
                        $("#mentionotherstudent").fadeOut("fast");
                        $("#undergraduate").fadeOut("fast");
                        $("#school").fadeOut("fast");
                        $("#otherUniversity").fadeOut("fast");
                        $("#otherFaculty").fadeOut("fast");
                        $("#otherjob").fadeOut("fast");
                        $("#work").fadeIn("medium");
                    }
                    break;
                case "موظف":
                    {
                        $("#gradyear").fadeOut("fast");
                        $("#mentionotherstudent").fadeOut("fast");
                        $("#undergraduate").fadeOut("fast");
                        $("#school").fadeOut("fast");
                        $("#otherUniversity").fadeOut("fast");
                        $("#otherFaculty").fadeOut("fast");
                        $("#otherjob").fadeOut("fast");
                        $("#work").fadeIn("medium");
                    }
                    break;
                case "Other":
                    {
                        $("#work").fadeOut("fast");
                        $("#mentionotherstudent").fadeOut("fast");
                        $("#gradyear").fadeOut("fast");
                        $("#undergraduate").fadeOut("fast");
                        $("#school").fadeOut("fast");
                        $("#otherUniversity").fadeOut("fast");
                        $("#otherFaculty").fadeOut("fast");
                        $("#otherjob").fadeIn("medium");

                    }
                    break;
                case "أخرى":
                    {
                        $("#work").fadeOut("fast");
                        $("#mentionotherstudent").fadeOut("fast");
                        $("#gradyear").fadeOut("fast");
                        $("#undergraduate").fadeOut("fast");
                        $("#school").fadeOut("fast");
                        $("#otherUniversity").fadeOut("fast");
                        $("#otherFaculty").fadeOut("fast");
                        $("#otherjob").fadeIn("medium");

                    }
                    break;
                default:
                    {
                        $("#otherjob").hide();
                        $("#mentionotherstudent").hide();
                        $("#work").hide();
                        $("#undergraduate").hide();
                        $("#school").hide();
                        $("#otherFaculty").hide();
                        $("#otherUniversity").hide();
                        $("#gradyear").hide();
                    }
            }
        });

        $('#selFaculty').on('change', function () {
            var selection = $(this).val();
            switch (selection) {
                case "Other":
                    {
                        $("#otherFaculty").fadeIn("medium");
                        $("#mentionotherstudent").fadeIn("medium");

                    }
                    break;
                case "أخرى":
                    {
                        $("#otherFaculty").fadeIn("medium");
                        $("#mentionotherstudent").fadeIn("medium");

                    }
                    break;
                default:
                    {
                        $("#otherFaculty").fadeOut("fast");

                    }
            }
        });

        $('#selUniversity').on('change', function () {
            var selection = $(this).val();
            switch (selection) {
                case "Other":
                    {
                        $("#otherUniversity").fadeIn("medium");
                        $("#mentionotherstudent").fadeIn("medium");

                    }
                    break;
                case "أخرى":
                    {
                        $("#otherUniversity").fadeIn("medium");
                        $("#mentionotherstudent").fadeIn("medium");

                    }
                    break;
                default:
                    {
                        $("#otherUniversity").fadeOut("fast");

                    }
            }
        });

        


       
             $('#seljobtitle').on('change', function () {
            var selection = $(this).val();
            switch (selection) {
                case "Other":
                    {
                        $("#otherjobtitle").fadeIn("medium");

                    }
                    break;
                case "أخرى":
                    {
                        $("#otherjobtitle").fadeIn("medium");

                    }
                    break;
                default:
                    {
                        $("#otherjobtitle").fadeOut("fast");

                    }
            }
        });

   


        $('#yesfreelancer').click(function () {
            if ($(this).is(':checked')) {
                $("#freelancer").fadeIn("medium");
                $('#nofreelancer').removeAttr('checked');  
            }
        });
        $('#nofreelancer').click(function () {
            if ($(this).is(':checked')) {
                $("#freelancer").fadeOut("fast");
                $('#yesfreelancer').removeAttr('checked');  
            }
        });

    });

if ($('body#page-top').length){
    //... code specific to the home page

(function () {
   'use strict';

	// Hide .navbar first
	$(".navbar").hide();
	
	// Fade in .navbar
	$(function () {
		$(window).scroll(function () {
            // set distance user needs to scroll before we fadeIn navbar
			if ($(this).scrollTop() > 200) {
				$('.navbar').fadeIn();
			} else {
				$('.navbar').fadeOut();
			}
		});

	
	});
	
	

   // Page scroll
  	$('a.page-scroll').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top - 40
            }, 900);
            return false;
          }
        }
      });

    // Show Menu on Book
    $(window).bind('scroll', function() {
        var navHeight = $(window).height() - 100;
        if ($(window).scrollTop() > navHeight) {
            $('.navbar-default').addClass('on');
        } else {
            $('.navbar-default').removeClass('on');
        }
    });

    $('body').scrollspy({ 
        target: '#mainNav',
        offset: 80
    })

  

  	// Portfolio Isotope Filter
    $(window).load(function() {
        var $container = $('.portfolio-items');
        
         
        $('.cat a').click(function() {
            $('.cat .active').removeClass('active');
            $(this).addClass('active');
            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });

    });
	
     
     //Animation Using Waypoints.JS
          $(".js-wp-1").waypoint(function(direction){
          $(".js-wp-1").addClass("animated fadeInUp");
          
     },{
          offset: '60%'
     });
     $(".js-wp-2").waypoint(function(direction){
          $(".js-wp-2").addClass("animated bounceInLeft");
          
     },{
          offset: '60%'
     });
     $(".js-wp-3").waypoint(function(direction){
          $(".js-wp-3").addClass("animated bounceInRight");
          
     },{
          offset: '60%'
     });
     $(".js-wp-4").waypoint(function(direction){
          $(".js-wp-4").addClass("animated fadeIn");
          
     },{
          offset: '60%'
     });
	

  // jQuery Parallax
  function initParallax() {
    $('#intro').parallax("100%", 0.3);
    $('#aboutimg').parallax("100%", 0.3);	
    
  }
  initParallax();

  	// Pretty Photo
	$("a[rel^='prettyPhoto']").prettyPhoto({
		social_tools: false
	});	

}());


  }


}
main();
