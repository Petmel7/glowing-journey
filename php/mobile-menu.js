
document.addEventListener('DOMContentLoaded', function() {
    const burgerIcon = document.querySelector('.burger-icon');
    const menuClose = document.querySelector('.menu-close');
    const mobileMenu = document.querySelector('.mobile-menu');

    // Відкриття меню при кліку на SVG
    burgerIcon.addEventListener('click', function() {
        mobileMenu.classList.add('open');
    });

    // Закриття меню при кліку на кнопку "Close"
    menuClose.addEventListener('click', function() {
        mobileMenu.classList.remove('open');
    });
});


