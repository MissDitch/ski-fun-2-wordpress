$(function() {
    // cache the window object
    var $window = $(window);

    // Parallax background effect
    $('section[data-type="background"]').each(function() {

        var $bgobj = $(this);  // assigning the object

        $(window).scroll(function() {

            // scroll the background at var speed
            // the yPos is a negative value because we're scrolling it UP!

            var yPos = -($window.scrollTop() / $bgobj.data('speed'));

            // Put together our final background position
            var coords = '50% '+ yPos + 'px';

            // Move the background
            $bgobj.css({ backgroundPosition: coords });

        }); // end window scroll

    });
});

/*
* Open the drawer when the menu icon is clicked.
*/
window.onload = function() {
    var drawer = document.getElementById('navbarToggler');
    var menu = document.getElementsByClassName('navbar-toggler');
    
    menu[0].addEventListener('click', function(e) {
        drawer.classList.toggle('open');   
        e.stopPropagation();
    });

    window.addEventListener('click', function() {
        drawer.classList.remove('open');
    });

    
    // var menu = document.querySelector('#menu');
    // var main = document.querySelector('main');
    // var drawer = document.querySelector('.nav');
    // menu.addEventListener('click', function(e) {
    //   drawer.classList.toggle('open');
    //   e.stopPropagation();
    // });
    // main.addEventListener('click', function() {
    //   drawer.classList.remove('open');
    // });

    }