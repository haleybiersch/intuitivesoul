$DEBUG = false; // turn concole messages on/off

// make it easier to reference different parts of the nav
var $menu = $('#menu'),
$menulink = $('#spinner-form'),
$search = $('#search'),
$search_box = $('.search_box'),
$menuTrigger = $('.has-submenu > a'),
$navwrapper = $('.nav_wrapper'), 
$diagonal = $('.diagonal'),
$horizontal = $('.horizontal'),
$article = $('article'),
$footer = $('footer');

// turn the main navigiation on/off
$menulink.click(function (e) {
	
	// if the search is already on, just turn on the navigation
	if ($search.hasClass('active')) {
		if ($DEBUG) {console.log("Status: (main menu action) search menu active");}
		$menulink.toggleClass('active');
	    $menu.toggleClass('active');
	    if ($DEBUG) {console.log("Action(A): Menu now active");}
	    
	}

	// if the search is off, turn it on
	else {
		if ($DEBUG) {console.log("Status: (main menu action) search menu NOT active");}
		$article.toggleClass('active'); // dim the background
		$footer.toggleClass('active'); // dim the background
		$menulink.toggleClass('active'); //  this is the icon toogle action X/=
		$navwrapper.toggleClass('active'); // this is the icon background color
		$diagonal.toggleClass('active'); // this is the icon color switch
		$menu.toggleClass('active'); // this is the menu display item on/off
		$horizontal.toggleClass('active');
		if ($DEBUG) {console.log("Action(b): Menu now inactive");}
	}

});

// toggle the search menu
$search.click(function (e) {
    e.preventDefault();

    // if the main nav AND the search are both off, turn them both on
    if ((!$navwrapper.hasClass('active')) && (!$search.hasClass('active'))) {
    	if ($DEBUG) {console.log("Status: (search menu action) Main INACTIVE, Search menu INACTIVE");}
        $search.toggleClass('active');
    	$search_box.toggleClass('active');
    	$navwrapper.toggleClass('active');
    	$diagonal.toggleClass('active'); // this is the icon color switch
    	$horizontal.toggleClass('active');
    	$article.toggleClass('active'); // dim the background
    	$footer.toggleClass('active'); // dim the background
    	if ($DEBUG) {console.log("Action(1): Set Search Active with Nav background");}
    }

    // if the main and search are on, turn them both off
    else if (($navwrapper.hasClass('active')) && $search.hasClass('active')) {
    	
    	if ($DEBUG) {console.log("Status: (search menu action) Main ACTIVE, Search menu ACTIVE");}

    	
    	// if main nav toogle is active
    	if ($menu.hasClass('active')) {
        	$search.toggleClass('active');
        	$search_box.toggleClass('active');
        	$('.menu.active').css('padding-top', '0px');
        	if ($DEBUG) {console.log("Action(2A)");}
    	}
    	
    	else {
    		$article.toggleClass('active'); // dim the background
    		$footer.toggleClass('active'); // dim the background
    		$search.toggleClass('active');
        	$search_box.toggleClass('active');
    		$menulink.toggleClass('active'); //  this is the icon toogle action X/=
    		$navwrapper.toggleClass('active'); // this is the icon background color
    		$diagonal.toggleClass('active'); // this is the icon color switch
    		$horizontal.toggleClass('active');
    		if ($DEBUG) {console.log("Action(2B)");}
    	}
		
		//$menu.toggleClass('active'); // this is the menu display item on/off
   		if ($DEBUG) {console.log("Action(2): Search and Nav background inactive");}
    }    
    
    // if the main nav is ON and the search is off, just turn on the search
    else if ($navwrapper.hasClass('active') && (!$search.hasClass('active'))) {
    	if ($DEBUG) {console.log("Status: (search menu action) Main ACTIVE, Search menu INACTIVE");}
    	$search.toggleClass('active');
    	$search_box.toggleClass('active');
    	if ($DEBUG) {console.log("Action(3): Set search active NAV already active");}
    }
   
    
});

// This handles the scrolling functions for the menu/search
$(function () {
    var e = $(document).scrollTop();
    var t = $('.nav_wrapper').outerHeight();
    $(window).scroll(function () {
        var n = $(document).scrollTop();
        if ($(document).scrollTop() >= 50) {
            $('.nav_wrapper').css('position', 'fixed');
        } else {
            $('.nav_wrapper').css('position', 'fixed');
        }

        if (n > e) {
            $('.nav_wrapper').removeClass('no-scroll');
        } else {
            $('.nav_wrapper').addClass('no-scroll');
        }
        e = $(document).scrollTop();
    });
});

// add the home page image parallax srcolling effect
$(document).ready(function() {

	var top_header = $('.skrollable');
	top_header.css({
		'background-position' : 'center center'
	}); // better use CSS

	$(window).scroll(function() {
		var st = $(this).scrollTop();
		top_header.css({
			'background-position' : 'center calc(50% - ' + (st * .25) + 'vh)'
		});
	});
});

/* back to top action */
//Get the button:
mybutton = document.getElementById("myBtn");

//When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
  mybutton.style.display = "block";
} else {
  mybutton.style.display = "none";
}
}

//When the user clicks on the button, scroll to the top of the document
function topFunction() {
	document.body.scrollTop = 0; // For Safari
	document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
