/* JS pour le slider de la page d'accueil */

var index = 0;
sliding(index);

var interval;

function slidingCurrent(n) {
    sliding(index += n);
    clearInterval(
        interval
    );
    interval = setInterval(function() {
        sliding(index += 1);
    }, 3000);
}

function sliding(n) {
    var slides = document.getElementsByClassName("slider-elements");
    if (n > slides.length-1) {index = 0}
    if (n < 0) {index = slides.length-1}
    for (var i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[index].style.display = "flex";
}

function slidingStart() {
    interval = setInterval(function() {
        sliding(index += 1);
    }, 3000);
}

function slidingStop() {
    clearInterval(
        interval
    );
}

$(function() {
    slidingStart();
    $('.slider-elements IMG').hover(function() {
        slidingStop();
    }, function() {
        slidingStart();
    })
});