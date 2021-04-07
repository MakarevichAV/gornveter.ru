// Валидация форм
let reviewsForm = document.querySelector('.reviews__form');
let reviewTxt = document.querySelector('.reviews__form textarea');
let reviewName = document.querySelector('.reviews__form .form__name');
reviewsForm.addEventListener('submit', (e) => {
    e.preventDefault();
    if (reviewTxt.value !== '' && reviewName.value !== '') {
        reviewsForm.submit();
        alert('Спасибо за Ваш отзыв');
    } else {
        alert('Не заполнено обязательное поле');
    }
});