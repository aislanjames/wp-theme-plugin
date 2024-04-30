jQuery(document).ready(function($) {
    console.log('Document ready!');

    function navbarShrink() {
        const navbarCollapsible = $('#mainNav');
        console.log('Checking navbar:', navbarCollapsible);
        if (!navbarCollapsible.length) {
            console.log('Navbar not found!');
            return;
        }
        console.log('Navbar found, checking scroll position:', $(window).scrollTop());
        if ($(window).scrollTop() === 0) {
            navbarCollapsible.removeClass('navbar-shrink');
        } else {
            navbarCollapsible.addClass('navbar-shrink');
        }
    }

    navbarShrink();
    $(document).scroll(navbarShrink);

    const mainNav = $('#mainNav');
    if (mainNav.length) {
        console.log('Main nav found:', mainNav);
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            rootMargin: '0px 0px -40%'
        });
    } else {
        console.log('Main nav not found');
    }
});
