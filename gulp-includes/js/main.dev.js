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
	    $('.slider-default').slick({
		    infinite: true,
		    slidesToShow: 1,
		    slidesToScroll: 1,
		    focusOnSelect: true,
		    arrows: false,
		    rows: 0,
            dots: true,
            fade: true,
		    speed: 2000,
		    prevArrow:"<button type='button' class='slick-prev'></button>",
		    nextArrow:"<button type='button' class='slick-next'></button>"
	    });

        $('.slider-product').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 4,
            focusOnSelect: true,
            arrows: true,
            rows: 0,
            prevArrow:"<button type='button' class='slick-prev'></button>",
            nextArrow:"<button type='button' class='slick-next'></button>"
        });

        $('.slider-promotion').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            focusOnSelect: true,
            arrows: true,
            rows: 0,
            prevArrow:"<button type='button' class='slick-prev'></button>",
            nextArrow:"<button type='button' class='slick-next'></button>"
        });

        $('.slider-bestseller').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 4,
            focusOnSelect: true,
            arrows: true,
            rows: 0,
            prevArrow:"<button type='button' class='slick-prev'></button>",
            nextArrow:"<button type='button' class='slick-next'></button>"
        });
    }

	/*-----------------------------------------------------*/
	/*------------------  Slick slider  -------------------*/
	/*-----------------------------------------------------*/
	
	function _initSelect2() {
		var $select = $('select');
		$select.each(function () {
			$(this).select2();
		})
	}

    return {
        init: function () {
            _slickSlider();
            _initSelect2();
        }
    };

}(jQuery, window));

jQuery(document).ready(function () {
    rosa.init();
});
