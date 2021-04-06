// Валидация форм
let reviewsForm = document.querySelector('.reviews__form');
let reviewTxt = document.querySelector('.reviews__form textarea');
reviewsForm.addEventListener('submit', (e) => {
    e.preventDefault();
    if (reviewTxt.value !== '') {
        alert('всё хорошо');
    } else {
        alert('не заполнено поле текста');
    }
});