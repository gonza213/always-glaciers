// JavaScript Document

/* ==============================================
GO TO TOP
=============================================== */

jQuery(document).ready(function ($) {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 500);
        return false;
    });
    $('.go-to-top').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});