<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8>
  <title>Orthrus Studio</title>
  <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.1.1/css/bootstrap-combined.min.css" rel="stylesheet">
  
  
  <link rel="stylesheet" href="./assets/fonts/fonts.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="./assets/css/supersized.css" type="text/css" media="screen" />
  <!-- <link rel="stylesheet" href="./assets/theme/bx_styles/bx_styles.css" type="text/css" media="screen" />  -->
  <!--	<link rel="stylesheet" href="./assets/theme/supersized.shutter.css" type="text/css" media="screen" /> -->
  <link rel="stylesheet" href="./application.css" type="text/css" charset="utf-8">
  
  
 
  
  
</head>
<body>


<div  class='row-fluid' style='z-index:800'>
 <div id="logo" class="span3 offset2 accordion-group-noop"  >
     <div class="accordion-heading-noop">
    <a class="accordion-toggle-noop" data-toggle="collapse" data-parent="#accordion2" href="#collapseLogo">
    <img id="logo-img" alt="Orthrus" src='./assets/img/logo.gif'  />
    
    </a>
    </div>
    <div id="collapseLogo" class="accordion-body collapse ">
      <ul style='list-style-type:none;'>
      <li><a href="#">Contact</a></li>
      <li><a href="#">Blog</a></li>					
      </ul>
    </div>
</div>
  
  
</div>

    
<div id="wrapper" class="row-fluid">


</div>
	
	
	 
<footer id='footer'  class="navbar navbar-fixed-bottom ">
   
     
   
</footer>


  <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>   -->
  <script src="./application.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript" charset="utf-8">
    var jQuery  = require("jqueryify-all");
    var exports = this;
  </script>
    
  
  
  <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.1.1/js/bootstrap.min.js"></script> 
  <script type="text/javascript" src="./assets/js/jquery.debounce-1.0.5.js"></script>
  <script type="text/javascript" src="./assets/js/jquery.easing.min.js"></script>		 
	<script type="text/javascript" src="./assets/js/supersized.3.2.7.js"></script>  
  <!-- <script type="text/javascript" src="./assets/theme/supersized.shutter.min.js"></script>  -->
  <!-- <script type="text/javascript"   src="./assets/js/jquery.bxSlider.min.js"></script> -->
  <!-- <script type="text/javascript"  src="./assets/js/preloader.js"></script> -->
  
  
  <script type="text/javascript" charset="utf-8">
    // var jQuery  = require("jqueryify-all");
    // var exports = this;
    $(document).ready(function(){
      
	  
	  
	  //Logo
	   $('#logo').on('mouseover.collapse.data-api', '[data-toggle=collapse]', function(e) {
        var $this = $(this),
            href, target = $this.attr('data-target') || e.preventDefault() || (href = $this.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, '') //strip for ie7
            ,
            option = $(target).data('collapse') ? 'show' : $this.data()
			if($(target).hasClass('in') == false) {
              $(target).collapse(option);
			}
        }).on('mouseleave',function(e) {
		    $('#collapseLogo').collapse('hide').delay(500);
		});
		
		$('#footer').on('shown', function() {
		   console.log('show');	
		   $('#afooter-up').css({
		    display: 'none',
			vibility: 'hidden'
		   });
           
		});
		
		$('#footer').on('shown', function() {
		   console.log('shown');	
		   $('#slideshowpagenav').addClass('footer-up');
           //#slideshowpagenav   .filler-content, .filler-mask, .filler-img		   
		});
		
		
		$('#footer').on('hide', function() {
		   console.log('hide');	
		   $('#afooter-up').css({
		    display: 'block',
			vibility: 'visible'
		   });
           
		});
		
		$('#footer').on('hidden', function() {
		   console.log('hidden');	
		  $('#slideshowpagenav').removeClass('footer-up');
           //#slideshowpagenav   .filler-content, .filler-mask, .filler-img		   
		});
		
		// Scroll Event
		var tempScrollTop, currentScrollTop = 0;
        $("nobody").scroll(function(){
		  currentScrollTop = $("body").scrollTop();
		 if (tempScrollTop < currentScrollTop ) {
		  //scrolling down
		  //$(window).trigger('scrolldown', {});
		 }
		 else if (tempScrollTop > currentScrollTop ) {
		  //scrolling up
		  tempScrollTop = currentScrollTop;
		  //$(window).trigger('scrollup', {});
		 }
		});
		
		var mousewheelevt = (/Firefox/i.test(navigator.userAgent)) ? "DOMMouseScroll" : "mousewheel" //FF doesn't recognize mousewheel as of FF3.x
		$('body').bind(mousewheelevt, $.debounce( function(e){

			var evt = window.event || e //equalize event object     
			evt = evt.originalEvent ? evt.originalEvent : evt; //convert to originalEvent if possible               
			var delta = evt.detail ? evt.detail*(-40) : evt.wheelDelta //check for detail first, because it is used by Opera and FF
      var activespine = $('.spine').find('div.active');
      console.log(activespine);
			if(delta > 0) {
				//scroll up
        
				$(activespine).trigger('scrollup', {});
			}
			else{
				//scroll down
				$(activespine).trigger('scrolldown', {});
			}   
		},300));
      
	  $(window).on('scrolldown', function() { 
	    console.log('Scroll Down w!'); 	
      //if($('.slideshow').hasClass('active')) {
      //  console.log('slideshow Down!'); 	  
      //  //api.nextSlide()      ;
      //  $('.slideshow').trigger('scrolldown',{});
      //}
	  });
	  
	  $(window).on('scrollup', function() { 
	   console.log('Scroll Up w!'); 	
      //if($('.slideshow').hasClass('active')) {
      //  console.log('slideshow Up!'); 
      //  //api.prevSlide();
      //  $('.slideshow').trigger('scrollup',{});
     // }
	  });
	  
      var initarr = $.makeArray( [ {image : './assets/img/BG-Image.jpg', title : 'Orthrus Background'} ]);	
      // resetSupersized(initarr);			
      
	  
	  
	  $("#wrapper").height(screen.height * 0.75);
	  //$("wrapper").css('height',screen.height);
	  
      var App = require("index");
      exports.app = new App({el: $("body")});       
      exports.app.setPositionInfo(screen.width,screen.height)
	  
      // var sp = $(window);
      // $(sp).resize(function(){
      //  var h = screen.height; // $(sp).height();
      //  var w = $(sp).width();
      //  exports.app.setPositionInfo(w,h)
      // });

      
      $('body').bind('gallerychange',function(e,obj) {
        console.log('GalleryChange event!');
        console.log(obj.data);
        if(obj.data == null || obj.data.length == 0) {
         obj.data = initarr;
        }
        resetSupersized(obj.data);
      });   

       
      $('#anextslide').live('click',function(e,obj) {
        //$(e).preventDefault();     
        // console.log(e);        
        // api.nextSlide();        
        // $('.navgallery-index').html(vars.current_slide + 1);        
      });   

     $('#aprevslide').live('click',function(e,obj) {
        //$(e).preventDefault();
        // console.log(e);
        // api.prevSlide();
        // $('.navgallery-index').html(vars.current_slide + 1);        
      });           

       // $('body').bind('',function(e,obj) {
       //    alert('after slide transition!');
       // });      
    });
    
    
    function resetSupersized(arr)
   {   
     
    $("#play-button").empty().remove();
    $("#thumb-list").empty().remove();
    $("#thumb-back").empty().remove();
    $("#thumb-forward").empty().remove();


    $("#supersized").fadeOut('fast', function() 
    {
        //clearInterval($.supersized.vars.slideshow_interval); //clear interval prevent buildups
		$('.bx-wrapper').empty().remove();
        $('#supersized-loader').empty().remove();
        $('#supersized').empty().remove();
        $('#hzDownscaled').empty().remove();
        
        if(arr != null && arr.length > 0) {
          console.log('ResetSupersized: ');
          console.log(arr);
          $('body').append('<div id="supersized-loader"></div><ul id="supersized"></ul>');
          // Animation complete.
          $("#tray-button").fadeIn();
          $('#thumb-tray').html('<div id="thumb-back"></div><div id="thumb-forward"></div>');
          
          $(arr).each(function(){
                console.log(this.image);
                $('<img/>')[0].src = this.image;
                // Alternatively you could use:
                // (new Image()).src = this;
            });
          
          $.supersized({   
               slideshow: (arr.length == 1) ? 0 : 1, 
                  // Functionality
               slide_interval          :   50000000,		// Length between transitions
               transition              :   8, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
               transition_speed		:	2000,		// Speed of transition
               keyboard_nav            :   0,			// Keyboard navigation on/off
            	 performance				:	1,			// 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed //  (Only works for Firefox/IE, not Webkit)                      
				 /* min_width: 980, */
				 /* min_height: 720, */
				 horizontal_center: 0,
				 vertical_center: 0,
				 fit_portrait: 0,
         fit_always: 0,
         fit_auto: 1,   //Custom code to respect original default resize
              // Components							
              // slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')          
              slides:   arr
          });     
          
           // slider = $('#supersized').bxSlider({
		   //		mode: 'fade',
			//	controls: true,
        	//	auto: true,
			//	pause: 50000000
		//	});
		}
    });
   }



    
  </script>
  
  
</body>
</html>