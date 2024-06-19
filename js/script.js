$('.btn-menu').on('click', () => {
    $('body').toggleClass('is-nav-open');
});

$('.btn-close').on('click', () => {
    $('body').removeClass('is-nav-open');
});
