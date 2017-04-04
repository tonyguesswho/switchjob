const app = {
	focusOnForm: function(){
    	const $form = document.querySelector(".forms");
			if ($form === null) {
				return;
			}
    	const firstInput = $form.querySelectorAll("input")[0];

    	firstInput.focus();
    },
	pageTransition: function(){
		$('.animsition').animsition({
			inClass:'zoom-in',
      		outClass:'zoom-out',
      		inDuration: 200,
		    outDuration: 800,
		    linkElement: '.animsition-link',
		    // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
		    loading: true,
		    loadingParentElement: 'body', //animsition wrapper element
		    loadingClass: 'animsition-loading',
		    loadingInner: '', // e.g '<img src="assets/img/logos/switch_2.svg">'
		    timeout: false,
		    timeoutCountdown: 5000,
		    onLoadEvent: true,
		    browser: [ 'animation-duration', '-webkit-animation-duration'],
		    overlay : false,
		    overlayClass : 'animsition-overlay-slide',
		    overlayParentElement : 'body',
		    transition: function(url){ window.location.href = url; }
		}).on('animsition.inEnd', function(){
			$(".animated").css({"visibility": "visible"});
			$(".navbar-brand").addClass("bounceIn");
			$(".navbar-nav>li:first").addClass("bounceIn");
			$(".navbar-nav>li:nth-child(2)").addClass("bounceIn");
			$(".navbar-nav>li:nth-child(3)").addClass("bounceIn");
			$(".navbar-nav>li:nth-child(4)").addClass("bounceIn");
			$(".navbar-nav>li:nth-child(5)").addClass("bounceIn");
			$(".navbar-nav>li:nth-child(6)").addClass("bounceIn");
			$(".navbar-nav>li:nth-child(7)").addClass("bounceIn");
			$(".welcome").addClass("bounceInDown");
			$(".welcome_msg").addClass("flipInX");
			$(".buttons").addClass("bounceInUp");
			//focus on form after page animation..
			app.focusOnForm();
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
		    //{ src:'assets/img/code.jpeg', fade:1000 },
		    { src:'switch/assets/img/laptop.jpeg', fade:1000 },
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


		    var image = 'assets/img/flag.png';
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
    },
	toggleCollapse: function(){
		const mores = Array.from(document.querySelectorAll(".more"));
		const lessers = Array.from(document.querySelectorAll(".less"));
		const interests = Array.from(document.querySelectorAll(".stats .btn"));
		//textcontent varaible;
		let texts;
		//css display properties block and none...
		let c, d;

		//boolean to control toggle function....
		let booled = true;

		//first function to show more
		function showMore(){
			c = "none"; d = "block";
			texts = "Show Less";
			booled = false;
		}
		//second function that show less
		function showLess(){
			 c = "block"; d = "none";
			 texts = "Interested";
			 booled = true;
		}
		//interestHandler handles toggling between first and second function
		function interestHandler(){
				booled ? showMore() : showLess();
				//change button textcontent..
				this.textContent = texts;
				//hide less part or show it instead...
				lessers[interests.indexOf(this)].style.display = c;
				//show more part or hide it instead...
				mores[interests.indexOf(this)].style.display = d;
		}
		interests.forEach(function(interest){
			 interest.addEventListener('click', interestHandler);
		});
	},
	likesController: function(){
		const likes = Array.from(document.querySelectorAll(".stats .likes"));
		const dislikes = Array.from(document.querySelectorAll(".stats .dislikes"));


		function clickHandler(){
			//console.log(this.classList.contains("likes"));
			// increase when I click on likes
		/*	if (this.classList.contains("likes")) {
				this.nextElementSibling.innerHTML = parseInt(this.nextElementSibling.innerHTML) + 1;
			}
			//decrease when I click on dislikes...
			else if(this.classList.contains("dislikes")){
				if (parseInt(this.nextElementSibling.innerHTML) == 0) {
					return;
				}
				this.nextElementSibling.innerHTML = parseInt(this.nextElementSibling.innerHTML) - 1;
			}
			*/
			//console.log(likes.indexOf(this));
			this.nextElementSibling.innerHTML = parseInt(this.nextElementSibling.innerHTML) + 1;
		}

		likes.forEach(function(like){
			like.addEventListener('click', clickHandler)
		});
		dislikes.forEach(function(dislike){
			dislike.addEventListener('click', clickHandler);
		});
	//	console.log(likes);
	},
	barChart: function(){
		if (document.getElementById("myChart") == null) {
			return;
		}
		let ctx = document.getElementById("myChart").getContext("2d");
        let myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["January", "February", "March", "April", "May", "June"],
                datasets: [{
                    label: 'Total Projects',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    xAxes: [{
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)"
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        },
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)"
                        }  
                    }]
                }
            

            }
        });
	},
	doughnutChart: function(){
        if (document.getElementById("allTasks") == null) {
            return;
        }
        let ctx = document.getElementById("allTasks").getContext("2d");
        let allTasks = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: [
                    "Pending",
                    "Behind",
                    "Completed"
                ],
                datasets: [{
                    // label: 'Total Projects',
                    data: [
                        9,
                        1,
                        6
                    ],
                    backgroundColor: [
                        'rgba(199, 87, 87, 1)',
                        'rgba(0, 144, 217, 1)',
                        'rgba(149, 165, 166, 1)'
                    ]
                }]
            }
        });
    },
    pieChart: function(){
        if (document.getElementById("allProjects") == null) {
            return;
        }
        let ctx = document.getElementById("allProjects").getContext("2d");
        let allProjects = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: [
                    "Pending",
                    "Behind",
                    "Completed"
                ],
                datasets: [{
                    // label: 'Total Projects',
                    data: [
                        3,
                        1,
                        0
                    ],
                    backgroundColor: [
                        'rgba(199, 87, 87, 1)',
                        'rgba(0, 144, 217, 1)',
                        'rgba(149, 165, 166, 1)'
                    ]
                }]
            }
        });
    },
    animateTimeline: function(){
        let items = document.querySelectorAll(".timeline .activity");

        // check if an element is in viewport
        function isElementInViewport(elements) {
            let rect = elements.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        function callbackFunc() {
            for (let i = 0; i < items.length; i++) {
                if (isElementInViewport(items[i])) {
                    items[i].classList.add("slideInRight");
                }
            };
        }

        // listen for events
        window.addEventListener("load", callbackFunc);
        window.addEventListener("scroll", callbackFunc);
        window.addEventListener("resize", callbackFunc);
    },
	//move navbar content and sidebar into right bar content.....
	sidebarCtrl: function(){
		let navbar_initialized = false,
		misc = {
        	navbar_menu_visible: 0
    	},
    	initRightMenu =  function(){  
	        if(!navbar_initialized){
	            $navbar = $('nav').find('.navbar-collapse').first().clone(true);
	        
	            $sidebar = $('.sidebar');
	            //undefined
	            sidebar_color = $sidebar.data('color');
	            
	            ul_content = '';
	            
	             
	            // add the content from the sidebar to the right menu
	            content_buff = $sidebar.find('.nav').html();
	            ul_content = ul_content + content_buff;
	            
	            //add the content from the regular header to the right menu
	            $navbar.children('ul').each(function(){
	                content_buff = $(this).html();
	                ul_content = ul_content + content_buff;   
	            });
	             
	            ul_content = '<ul class="nav navbar-nav">' + ul_content + '</ul>';
	            
	            navbar_content = ul_content;
	            
	            $navbar.html(navbar_content);
	             
	            $('body').append($navbar);
	             
	            
	             
	             
	            $toggle = $('.navbar-toggle');
	             
	            $navbar.find('a').removeClass('btn btn-round btn-default');
	            $navbar.find('button').removeClass('btn-round btn-fill btn-info btn-primary btn-success btn-danger btn-warning btn-neutral');
	            $navbar.find('button').addClass('btn-simple btn-block');
	            
	            $toggle.click(function (){    
	                if(misc.navbar_menu_visible == 1) {
	                    $('html').removeClass('nav-open'); 
	                    misc.navbar_menu_visible = 0;
	                    $('#bodyClick').remove();
	                     setTimeout(function(){
	                        $toggle.removeClass('toggled');
	                     }, 400);
	                
	                } else {
	                    setTimeout(function(){
	                        $toggle.addClass('toggled');
	                    }, 430);
	                    
	                    div = '<div id="bodyClick"></div>';
	                    $(div).appendTo("body").click(function() {
	                        $('html').removeClass('nav-open');
	                        misc.navbar_menu_visible = 0;
	                        $('#bodyClick').remove();
	                         setTimeout(function(){
	                            $toggle.removeClass('toggled');
	                         }, 400);
	                    });
	                   
	                    $('html').addClass('nav-open');
	                    misc.navbar_menu_visible = 1;
	                    
	                }
	            });
	            navbar_initialized = true;
	        }
   
        };
        // Init navigation toggle for small screens   
	    if($(window).width() <= 991){
	       initRightMenu();
	    }
	    // activate collapse right menu when the windows is resized 
		$(window).resize(function(){
		    if($(window).width() <= 991){
		        initRightMenu();   
		    }
		});    
	}
}
