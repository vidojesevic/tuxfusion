$(document).ready(function() {
    slideShow();
});

function slideShow() {
    const current = $('#carousel-inner active');
    console.log(current);
    const next = current.next().length ? current.next() : current.parent().chindren(':first');
    current .removeClass('active');
    next.addClass('active');
    setTimeout(slideShow, 150);
}
