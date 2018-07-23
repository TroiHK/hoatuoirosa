/* Global variables and functions */
var rosa = (function ($, window, undefined) {
    'use strict';
    var $win = $(window),
        $header = $('#header'),
        $main = $('#wrap-main'),
        $footer = $('#footer');

    /*-----------------------------------------------------*/
    /*------------------  Slick slider  -------------------*/
    /*-----------------------------------------------------*/

    function _slickSlider() {
        $('.slider-product').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 4,
            focusOnSelect: true,
            arrows: true,
            rows: 0,
            prevArrow:"<button type='button' class='slick-prev'><i class='mo-arrow-left' aria-hidden='true'></i></button>",
            nextArrow:"<button type='button' class='slick-next'><i class='mo-arrow-right' aria-hidden='true'></i></button>"
        });

        $('.slider-promotion').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            focusOnSelect: true,
            arrows: true,
            rows: 0,
            prevArrow:"<button type='button' class='slick-prev'><i class='mo-arrow-left' aria-hidden='true'></i></button>",
            nextArrow:"<button type='button' class='slick-next'><i class='mo-arrow-right' aria-hidden='true'></i></button>"
        });

        $('.slider-bestseller').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 4,
            focusOnSelect: true,
            arrows: true,
            rows: 0,
            prevArrow:"<button type='button' class='slick-prev'><i class='mo-arrow-left' aria-hidden='true'></i></button>",
            nextArrow:"<button type='button' class='slick-next'><i class='mo-arrow-right' aria-hidden='true'></i></button>"
        });
    }


    return {
        init: function () {
            _slickSlider();
        }
    };

}(jQuery, window));

jQuery(document).ready(function () {
    rosa.init();
});