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

// AJAX запрос при выборе модели

let select = document.querySelector('.select');
let modelItem = document.querySelectorAll('.select option');
let productId = document.querySelector('select').getAttribute('id');
select.addEventListener('change', () => {
    let modelNumber = select.options[select.options.selectedIndex].value;
    var xhr = new XMLHttpRequest();
    xhr.open('GET', `http://gornveter.ru/pages/product.php?product_id=${productId}&model_number=${modelNumber}`, false);
    xhr.send();
    if (xhr.status != 200) {
        alert(xhr.status + ': ' + xhr.statusText); // пример вывода: 404: Not Found
    } else {
        // alert(xhr.responseText); // responseText -- текст ответа.
    }
});