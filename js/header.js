const navSlide = () => {
    const navButton = document.querySelector('.nav-button');
    const nav = document.querySelector('.navigation');
    const navLinks = document.querySelectorAll('.navigation li');


    navButton.addEventListener('click', () =>  {
        // toggle nav
        nav.classList.toggle('nav-active');

        //animate  links
        navLinks.forEach((link, index) => {
            if(link.style.animation) {
                link.style.animation = '';
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.25}s`;
            }
        });

        // menu animation
        navButton.classList.toggle('toggle');

    });
}

navSlide();

// Drop down menu
const dropDown = () => {
   const childNav = document.querySelector('.menu-item-has-children');
    const dropLink = document.querySelectorAll('.menu-item-has-children a');
    childNav.addEventListener('click', (e)=> {
    childNav.classList.toggle('drop');
    e.preventDefault();

        dropLink.forEach((child) => {
            child.addEventListener('click', (e) => {
                e.stopPropagation();});

        });
    });

}
dropDown();

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.menu-item-has-children')) {
        var dropdowns = document.getElementsByClassName("sub-menu")
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}



const btn = document.querySelector('.btn-top');


// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollDown()};

function scrollDown() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20 || document.scrollTop > 100) {
        btn.style.display = "block";
    } else {
        btn.style.display = "none";
    }
}
// back to top
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

function backToTop() {
    btn.addEventListener('click', () => {
        topFunction();
    });
}

backToTop();