// Выплывание header при скролле страницы
let headerHeight = document.querySelector('header').clientHeight;
let headerPicture = document.querySelector('.info') ? document.querySelector('.info').clientHeight : false;
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
        console.log('привет');
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

// Выплывающий блок пункта меню
let dropDownContainer = document.querySelectorAll(".drop-down-container");
dropDownContainer.forEach((elem, ind) => {
    elem.addEventListener('click', () => {
        elem.querySelector('.drop-down-block').classList.toggle('show-block');
    });
    elem.addEventListener('mouseover', () => {
        elem.querySelector('.drop-down-block').classList.add('show-block');
    });
    elem.addEventListener('mouseout', () => {
        elem.querySelector('.drop-down-block').classList.remove('show-block');
    });
});

// Всплытие Попапов
let popup = document.querySelector('.popup');
let btnPopup = document.querySelectorAll('.btn__popup');
btnPopup.forEach((elem, ind) => {
    elem.addEventListener('click', () => {
        if (elem.classList.contains('btn__popup--1')) {
            popup.style.display = 'block';
            document.querySelector('.popup__type1').style.display = 'block';
        }
        if (elem.classList.contains('btn__popup--2')) {
            popup.style.display = 'block';
            document.querySelector('.popup__type2').style.display = 'block';
        }
        if (elem.classList.contains('btn__popup--3')) {
            popup.style.display = 'block';
            document.querySelector('.popup__type3').style.display = 'block';
        }
    });
});

// Закрытие popup
let popupWindow = document.querySelectorAll('.popup__window');
let croses = document.querySelectorAll('.crose');
popup.addEventListener('click', (e) => {
    if (e.target == popup) {
        popup.style.display = 'none';
        popupWindow.forEach((elem, ind) => {
            elem.style.display = 'none';
        });
    } else {
        croses.forEach((elem, ind) => {
            if (e.target == elem) {
                popup.style.display = 'none';
                popupWindow.forEach((elem, ind) => {
                    elem.style.display = 'none';
                });
            }
        });
    }
});
