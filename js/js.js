let headerHeight = document.querySelector('header').clientHeight;
let headerPicture = document.querySelector('.info').clientHeight;
let header = document.querySelector('.fixed-header');
console.dir(headerHeight);
// header.classList.add('fixed-header');

window.addEventListener('wheel', () => {
    if (window.scrollY >= headerPicture + headerHeight) {
        header.classList.add('drop-down');
    } else {
        header.classList.remove('drop-down');
    }
});