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