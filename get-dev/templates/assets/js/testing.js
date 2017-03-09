/* scroll to target */
  var scrollToTarget = (function() {

    var elementPosition = function(a) {
        return function() {
            return a.getBoundingClientRect().top;
        };
    };

    var scrolling = function( elementID ) {

    var el = document.getElementById( elementID ),
    elPos = elementPosition( el ),
    duration = 300,
    increment = Math.round( Math.abs( elPos() )/50 ),
    time = Math.round( duration/increment ),
    last = 0,
    E;

    function scrollController() {
        E = elPos();

        if (E === last) {
            return;
        } else {
            last = E;
        }

        increment = (E > -20 && E < 20) ? ((E > - 5 && E < 5) ? 1 : 5) : increment;

        if (E > 1 || E < -1) {

            if (E < 0) {
                window.scrollBy( 0,-increment );
            } else {
                window.scrollBy( 0,increment );
            }

            setTimeout(scrollController, time);

        } else {

            el.scrollTo( 0,0 );

        }
    }

    scrollController();
  };

  return {
    To: scrolling
  }

  })();

  const navList  = document.querySelector('.main-nav-list');
  const menus = navList.querySelectorAll('a');

  function navigatorHandler(e){
    //https://jsfiddle.net/BnPck/rdetuhyL/1/
    //scrollToMe((this.hash).slice(1, (this.hash).length));
    //scrollToTarget.To((this.hash).slice(1, (this.hash).length));
  }

  /*function scroller (value) {
    if (value === '') {return;}
    const target = document.getElementById(value);
  };*/



  menus.forEach(function(menu){
    menu.addEventListener('click', navigatorHandler);
  });

  //http://stackoverflow.com/questions/10063380/javascript-smooth-scroll-without-the-use-of-jquery