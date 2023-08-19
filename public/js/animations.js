$(document).ready(function() {
    slideShow();
});

function slideShow() {
    var current = $('#carousel-inner active');
    console.log(current);
    var next = current.next().length ? current.next() : current.parent().chindren(':first');
    current .removeClass('active');
    next.addClass('active');
    setTimeout(slideShow, 150);
}
