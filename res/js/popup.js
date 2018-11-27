/* Popup Logic */
$(document).ready(function() {
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('header').outerHeight();

    $('.open-popup-link').magnificPopup({
       type:'inline',
       midClick: true,
       alignTop: false,
     closeBtnInside: true
    });
});