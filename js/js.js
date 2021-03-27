// Выплывание header при скролле страницы
let headerHeight = document.querySelector('header').clientHeight;
let headerPicture = document.querySelector('.info').clientHeight;
let header = document.querySelector('.fixed-header');

window.addEventListener('scroll', () => {
    if (window.scrollY >= headerPicture + headerHeight) {
        header.classList.add('drop-down');
    } else {
        header.classList.remove('drop-down');
    }
});

// Выплывание мобильного меню
let menuButton = document.querySelectorAll('.header__menu-button');
let mobileMenu = document.querySelector('.header__menu-mobile');
menuButton.forEach((el, ind) => {
    el.addEventListener('click', () => {
        mobileMenu.classList.toggle('show-menu');
    });
});

// Исчезновение мобильного меню при клике на пункты меню
let menuItem = document.querySelectorAll('.header__menu-item a');
menuItem.forEach((el, ind) => {
    el.addEventListener('click', () => {
        mobileMenu.classList.remove('show-menu');
    });
});

// Переход к секциям лендинга при клике по пунктам меню
let menuItemRef = document.querySelectorAll('.local-menu a');
menuItemRef.forEach((el, ind) => {
    el.addEventListener('click', (e) => {
        e.preventDefault();
        let id = el.getAttribute('href');
        let targetElement = document.querySelector(id);
        window.scrollTo({
            top: targetElement.offsetTop - 100,
            behavior: 'smooth',
          });
    });
});