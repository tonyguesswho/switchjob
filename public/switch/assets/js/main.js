

//background slider
$.vegas('slideshow', {
  delay:7000,
  backgrounds:[
    { src:'switch/assets/img/CUP.jpg', fade:1000 },
    { src:'switch/assets/img/code.jpeg', fade:1000 },
    { src:'switch/assets/img/laptop.jpg', fade:1000 },
    { src:'switch/assets/img/meeting.jpg', fade:1000 },
    { src:'switch/assets/img/startup.jpg', fade:1000 }
  ]
});


// makes sure the whole site is loaded
jQuery(window).load(function() {
    // will first fade out the loading animation
  	jQuery(".status").fadeOut();
      // will fade out the whole DIV that covers the website.
  	jQuery(".preloader").delay(1000).fadeOut("slow");
})


// Bootstrap Fix  
if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
  var msViewportStyle = document.createElement('style')
  msViewportStyle.appendChild(
    document.createTextNode(
      '@-ms-viewport{width:auto!important}'
    )
  )
  document.querySelector('head').appendChild(msViewportStyle)
}

// STICKY NAV

$(document).ready(function() {
  $('.main-nav-list').onePageNav({
    currentClass: 'current',
    changeHash: true,
    scrollSpeed: 750,
    scrollThreshold: 0.5,
    filter: '',
    easing: 'swing',
    begin: function() {
      //I get fired when the animation is starting
      //console.log("It's working perfectly!!!");
    },
    end: function() {
      //I get fired when the animation is ending
    },
    scrollChange: function($currentListItem) {
      //I get fired when you enter a section and I pass the list item of the section
    }
  });

  // Sticky Header - http://jqueryfordesigners.com/fixed-floating-elements/
  var top = $('#main-nav').offset().top - parseFloat($('#main-nav').css('margin-top').replace(/auto/, 0));

  $(window).scroll(function (event) {
    // what the y position of the scroll is
    var y = $(this).scrollTop();

    // whether that's below the form
    if (y >= top) {
      // if so, ad the fixed class
      $('#main-nav').addClass('fixed');
    } else {
      // otherwise remove it
      $('#main-nav').removeClass('fixed');
    }
  });

});


/*=================================
===  OWL CROUSEL               ====
===================================*/
$(document).ready(function() {
  const owl = $("#client-feedbacks");
  owl.owlCarousel({
      items : 3, //10 items above 1000px browser width
      itemsDesktop : [1000,2], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,1], // betweem 900px and 601px
      itemsTablet: [600,1], //2 items between 600 and 0
      itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
  });
});


/*=================================
===  SMOOTH SCROLL             ====
=================================== */
var scrollAnimationTime = 1200,
  scrollAnimation = 'easeInOutExpo';
  $('a.scrollto').bind('click.smoothscroll',function (event) {
    event.preventDefault();
    var target = this.hash;
    $('html, body').stop().animate({
    'scrollTop': $(target).offset().top
    }, scrollAnimationTime, scrollAnimation, function () {
       window.location.hash = target;
    });
});

  

  
/* ================================
===  PROJECT LOADING           ====
================================= */
jQuery(document).ready(function($) {
  $('.more').on('click', function(event) {
    event.preventDefault();

    var href = $(this).attr('href') + ' .single-project',
        portfolioList = $('#portfolio-list'),
        content = $('#loaded-content');

    portfolioList.animate({'marginLeft':'-120%'},{duration:400,queue:false});
    portfolioList.fadeOut(400);
    setTimeout(function(){ $('#loader').show(); },400);
    setTimeout(function(){
        content.load(href, function() {
            $('#loaded-content meta').remove();
            $('#loader').hide();
            content.fadeIn(600);
            $('#back-button').fadeIn(600);
        });
    },800);
  });

  $('#back-button').on('click', function(event) {
      event.preventDefault();

      var portfolioList = $('#portfolio-list')
          content = $('#loaded-content');

      content.fadeOut(400);
      $('#back-button').fadeOut(400);
      setTimeout(function(){
          portfolioList.animate({'marginLeft':'0'},{duration:400,queue:false});
          portfolioList.fadeIn(600);
      },800);
  });
});

/* ================================
===  PARALLAX                  ====
================================= */
$(document).ready(function(){
  var $window = $(window);
  $('div[data-type="background"], header[data-type="background"], section[data-type="background"]').each(function(){
    var $bgobj = $(this);
    $(window).scroll(function() {
      var yPos = -($window.scrollTop() / $bgobj.data('speed'));
      var coords = '50% '+ yPos + 'px';
      $bgobj.css({
        backgroundPosition: coords
      });
    });
  });
});

/* ================================
===  KNOB                      ====
================================= */
$(function() {
$(".skill1").knob({
    'max':100,
    'width': 64,
    'readOnly':true,
    'inputColor':' #FFFFFF ',
    'bgColor':' #222222 ',
    'fgColor':' #e96656 '
    });
$(".skill2").knob({
    'max':100,
    'width': 64,
    'readOnly':true,
    'inputColor':' #FFFFFF ',
    'bgColor':' #222222 ',
    'fgColor':' #34d293 '
    });
$(".skill3").knob({
    'max': 100,
    'width': 64,
    'readOnly': true,
    'inputColor':' #FFFFFF ',
    'bgColor':' #222222 ',
    'fgColor':' #3ab0e2 '
    });
$(".skill4").knob({
    'max': 100,
    'width': 64,
    'readOnly': true,
    'inputColor':' #FFFFFF ',
    'bgColor':' #222222 ',
    'fgColor':' #E7AC44 '
    });
});
