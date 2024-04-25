jQuery(document).ready(function($) {
    // Função para encolher a barra de navegação
    function navbarShrink() {
        const navbarCollapsible = $('#mainNav');
        if (!navbarCollapsible.length) {
            return;
        }
        if ($(window).scrollTop() === 0) {
            navbarCollapsible.removeClass('navbar-shrink');
        } else {
            navbarCollapsible.addClass('navbar-shrink');
        }
    }

    // Encolher a barra de navegação
    navbarShrink();

    // Encolher a barra de navegação quando a página é rolada
    $(document).scroll(navbarShrink);

    // Ativar Bootstrap scrollspy no elemento principal da navegação
    const mainNav = $('#mainNav');
    if (mainNav.length) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            rootMargin: '0px 0px -40%'
        });
    }

    // Fechar a barra de navegação responsiva quando o botão de alternância é visível
    const navbarToggler = $('.navbar-toggler');
    $('.nav-link').click(function() {
        if (navbarToggler.is(':visible')) {
            navbarToggler.click();
        }
    });
});
