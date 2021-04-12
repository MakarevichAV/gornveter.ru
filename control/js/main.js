let btnContact = document.getElementById("btnContact");
let btnOrder = document.getElementById("btnOrder");
let btnProduct = document.getElementById("btnProduct");
let btnBrand = document.getElementById("btnBrand");
let btnPrice = document.getElementById("btnPrice");
let btnFeedback = document.getElementById("btnFeedback");
let btnProfile = document.getElementById("btnProfile");
// let btnProfile = document.getElementById("btnProfile");
btnContact.addEventListener('click', function(){
    window.location = "./contact.php";
});
btnBrand.addEventListener('click', function(){
    window.location = "./brand.php";
});
btnProduct.addEventListener('click', function(){
    window.location = "./product.php";
});
btnPrice.addEventListener('click', function(){
    window.location = "./price.php";
});
btnFeedback.addEventListener('click', function(){
    window.location = "./feedback.php";
});