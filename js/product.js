// Переключение вкладок Описание и Характеристики
let productNav = document.querySelectorAll('.product-info__nav-item');
let productInfo = document.querySelectorAll('.product-info__content-item');
productNav.forEach((item, ind) => {
    item.addEventListener('click', (e) => {
        let id = item.getAttribute('data-info');
        productNav.forEach((item, ind) => {
            item.classList.remove('product-info__nav-item--active');
            console.log('привет сыч');
        });
        item.classList.add('product-info__nav-item--active');
        productInfo.forEach((elem, ind) => {
            if (elem.getAttribute('id') !== id) {
                elem.classList.add('unvisible');
            } else {
                elem.classList.remove('unvisible');
            }
        });
    });
});