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

