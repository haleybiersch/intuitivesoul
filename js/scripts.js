
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
