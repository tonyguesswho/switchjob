const app = {
	focusOnForm: function(){
    	const $form = document.querySelector(".forms");
    	const firstInput = $form.querySelectorAll("input")[0];
    	firstInput.focus();
    },
	pageTransition: function(){
		$('.animsition').animsition({
			inClass:'zoom-in',
      		outClass:'zoom-out',
      		inDuration: 800,
		    outDuration: 800,
		    linkElement: '.animsition-link',
		    // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
		    loading: true,
		    loadingParentElement: 'body', //animsition wrapper element
		    loadingClass: 'animsition-loading',
		    loadingInner: '', // e.g '<img src="loading.svg" />'
		    timeout: false,
		    timeoutCountdown: 5000,
		    onLoadEvent: true,
		    browser: [ 'animation-duration', '-webkit-animation-duration'],
		    overlay : false,
		    overlayClass : 'animsition-overlay-slide',
		    overlayParentElement : 'body',
		    transition: function(url){ window.location.href = url; }
		}).on('animsition.inEnd', function(){
			$(".navbar-brand").addClass("bounceIn");
			$(".navbar-nav>li:first").addClass("bounceIn");
			$(".navbar-nav>li:nth-child(2)").addClass("bounceIn");
			$(".navbar-nav>li:nth-child(3)").addClass("bounceIn");
			$(".navbar-nav>li:nth-child(4)").addClass("bounceIn");
			$(".navbar-nav>li:nth-child(5)").addClass("bounceIn");
			$(".navbar-nav>li:nth-child(6)").addClass("bounceIn");
			$(".navbar-nav>li:nth-child(7)").addClass("bounceIn");
			$(".welcome").addClass("bounceInDown");
			$(".buttons").addClass("bounceInUp");
			//focus on form after page animation..
			app.focusOnForm();
			//$(".buttons a:first").addClass("fadeInLeft");
		});
	},

	navbarController: function(){
		$('.main-nav-list').onePageNav({
			 scrollThreshold: 0.2, // Adjust if Navigation highlights too early or too late
    		scrollOffset: 75, //Height of Navigation Bar
		    currentClass: 'active'
		});
	},
	sticker: function(){
		var top = $('#main-nav').offset().top - parseFloat($('#main-nav').css('margin-top').replace(/auto/, 0));
		console.log(top);
		$(window).scroll(function (event) {
		    // what the y position of the scroll is
		    var y = $(this).scrollTop();

		    // toggle between these two.
		    if (y >= top) {
		      // if so, ad the fixed class
		      $('#main-nav').addClass('stuck');
		      $('.logo-nav').css({"display": "block"});
		      $('.logo-default').css({"display": "none"});
		    } else {
		      // otherwise remove it
		      $('#main-nav').removeClass('stuck');
		      $('.logo-nav').css({"display": "none"});
		      $('.logo-default').css({"display": "block"});
		    }
		});
	},
	vegasController: function(){
		$.vegas('slideshow', {
		  delay:7000,
		  backgrounds:[
		    { src:'switch/assets/img/CUP.jpg', fade:1000 },
		    //{ src:'switch/assets/img/code.jpeg', fade:1000 },
		    { src:'switch/assets/img/laptop.jpg', fade:1000 },
		    { src:'switch/assets/img/meeting.jpg', fade:1000 },
		    { src:'switch/assets/img/startup.jpg', fade:1000 }
		  ],
		  transitionDuration:1000,
		  transition: 'fade',
		  animation: 'random'
		});
	},

	parallax: function(){
		var $window = $(window);
		  $('div[data-type="background"], header[data-type="background"], section[data-type="background"]').each(function(){
		    var $bgEl = $(this);
		    $(window).scroll(function() {
		      var yPos = -($window.scrollTop() / $bgEl.data('speed'));
		      var coords = '50% '+ yPos + 'px';
		      $bgEl.css({
		        backgroundPosition: coords
		      });
		    });
		});
	},

	ouibounce: function(){
		ouibounce(document.getElementById('ouibounce-modal'), {
            timer: 5000,
            callback: function() {
			$('#ouibounce-modal').modal('show');
		}});
	},
	knobs: function(){
		$(".skill1").knob({
		    'max':100,
		    'width': 200,
		    'readOnly':true,
		    'inputColor':' #FFFFFF ',
		    'bgColor':' #222222 ',
		    'data-linecap':'round',
		    'fgColor':' #e96656 '
		    });
		$(".skill2").knob({
		    'max':100,
		    'width': 200,
		    'readOnly':true,
		    'inputColor':' #FFFFFF ',
		    'bgColor':' #222222 ',
		    'fgColor':' #34d293 '
		    });
		$(".skill3").knob({
		    'max': 100,
		    'width': 200,
		    'readOnly': true,
		    'inputColor':' #FFFFFF ',
		    'bgColor':' #222222 ',
		    'fgColor':' #3ab0e2 '
		    });
		$(".skill4").knob({
		    'max': 100,
		    'width': 200,
		    'readOnly': true,
		    'inputColor':' #FFFFFF ',
		    'bgColor':' #222222 ',
		    'fgColor':' #E7AC44 '
		    });
	},
	maps: function(){

		const mapLocation = new google.maps.LatLng(6.507210, 3.383519); //change coordinates here
		var marker;
		var map;

		function initialize() {
		    var mapOptions = {
		        zoom: 11, //change zoom here
		        center: mapLocation,
		        scrollwheel: false,
					styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#dbdbdb"},{"visibility":"on"}]}]

		    };

		    map = new google.maps.Map(document.getElementById('map-canvas'),
		    mapOptions);


		    //change address details here
		    var contentString = '<div class="map-info-box">'
		    + '<div class="map-head">'
		    + '<h3>Switch</h3></div>'
		    + '<p class="map-address"><i class="fa fa-map-marker"></i> No. 10 Alara street Yaba <br><i class="fa fa-phone"></i> +2348051319795<br><span class="map-email"><i class="fa fa-envelope"></i> info@switch.ng</span></p>'
		    + '<p><a href="https://www.google.com.ng/maps/place/Alara+St/@6.5072531,3.3814272,17z/data=!3m1!4b1!4m5!3m4!1s0x103b8cf1574d8123:0x8c4a350ba88caf29!8m2!3d6.5072531!4d3.3836159" target="_blank">Open on Google Maps</a></p></div>';


		    var infowindow = new google.maps.InfoWindow({
		        content: contentString,
		    });


		    var image = 'switch/assets/img/flag.png';
		    marker = new google.maps.Marker({
		        map: map,
		        draggable: true,
		        title: 'Switch Jobs', //change title here
		        icon: image,
		        animation: google.maps.Animation.DROP,
		        position: mapLocation
		    });

		    google.maps.event.addListener(marker, 'click', function() {
		        infowindow.open(map, marker);
		    });

		}

		google.maps.event.addDomListener(window, 'load', initialize);
	},
	scrollable: function(){
		$.jScrollability([
            {
                'selector': '.buttons a:first',
                'start': 'parent',
                'end': 'parent',
                'fn': {
                	'margin-right': {
                        'start': 10,
                        'end': 200,
                        'unit': 'px'
                    }
                }

            },
            {
                'selector': '.welcome',
                'start': 'parent',
                'end': 'parent',
                'fn': {
                    'opacity': {
                        'start': 0,
                        'end': 1,
                        'unit': '%'
                    }
                }
            },
            {
                'selector': '#focus',
                'start': function($el) { return $el.offset().top + $el.height() },
                'end': 'parent',
                'fn': function($el,pcnt) {
                    var $spans = $el.find('.sub-sections');
                    var point = Math.floor(($spans.length+1) * pcnt);
                    $spans.each(function(i,el) {
                        var $span = $(el);
                        if (i < point) {
                            $span.addClass('visible');
                        } else {
                            $span.removeClass('visible');
                        }
                    });
                }
            }
        ]);
	},
	stylishInput: function(){
        // trim polyfill
		if (!String.prototype.trim) {
			(function() {
				// Make sure we trim BOM and NBSP
				var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
				String.prototype.trim = function() {
					return this.replace(rtrim, '');
				};
			})();
		}

		[].slice.call( document.querySelectorAll( '.input-field' ) ).forEach( function( inputEl ) {
		// in case the input is already filled..
		if( inputEl.value.trim() !== '' ) {
			//classie.add( inputEl.parentNode, 'input--filled' );
	    	inputEl.parentNode.classList.add('input--filled');
		}

		// events:
			inputEl.addEventListener( 'focus', onInputFocus );
			inputEl.addEventListener( 'blur', onInputBlur );
		});

		function onInputFocus( ev ) {
				//classie.add( ev.target.parentNode, 'input--filled' );
	  		ev.target.parentNode.classList.add('input--filled');
		}

		function onInputBlur( ev ) {
			if( ev.target.value.trim() === '' ) {
					//classie.remove( ev.target.parentNode, 'input--filled' );
	     		ev.target.parentNode.classList.remove('input--filled');
			}
		}
    },
    switchForm : function(){

        var current_fs, next_fs, previous_fs; //fieldsets
        var left, opacity, scale; //fieldset properties which we will animate
        var animating; //flag to prevent quick multi-click glitches

        $(".next").click(function(){
          if(animating) return false;
          animating = true;

          current_fs = $(this).parent();
          next_fs = $(this).parent().next();

          //activate next step on progressbar using the index of next_fs
          $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

          //show the next fieldset
          next_fs.show();
          //hide the current fieldset with style
          current_fs.animate({opacity: 0}, {
            step: function(now, mx) {
              //as the opacity of current_fs reduces to 0 - stored in "now"
              //1. scale current_fs down to 80%
              scale = 1 - (1 - now) * 0.2;
              //2. bring next_fs from the right(50%)
              left = (now * 50)+"%";
              //3. increase opacity of next_fs to 1 as it moves in
              opacity = 1 - now;
              current_fs.css({'transform': 'scale('+scale+')'});
              next_fs.css({'left': left, 'opacity': opacity});
            },
            duration: 800,
            complete: function(){
              current_fs.hide();
              animating = false;
            }//,
            //this comes from the custom easing plugin
            //easing: 'easeInOutBack'
          });
        });

        $(".previous").click(function(){
          if(animating) return false;
          animating = true;

          current_fs = $(this).parent();
          previous_fs = $(this).parent().prev();

          //de-activate current step on progressbar
          $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

          //show the previous fieldset
          previous_fs.show();
          //hide the current fieldset with style
          current_fs.animate({opacity: 0}, {
            step: function(now, mx) {
              //as the opacity of current_fs reduces to 0 - stored in "now"
              //1. scale previous_fs from 80% to 100%
              scale = 0.8 + (1 - now) * 0.2;
              //2. take current_fs to the right(50%) - from 0%
              left = ((1-now) * 50)+"%";
              //3. increase opacity of previous_fs to 1 as it moves in
              opacity = 1 - now;
              current_fs.css({'left': left});
              previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
            },
            duration: 800,
            complete: function(){
              current_fs.hide();
              animating = false;
            }//,
            //this comes from the custom easing plugin
            //easing: 'easeInOutBack'
          });
        });

        $(".submit").click(function(){
          return false;
        })
      }
}