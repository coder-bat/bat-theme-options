(function($) {
    'use strict';

    /**
     * All of the code for your admin-facing JavaScript source
     * should reside in this file.
     *
     * Note: It has been assumed you will write jQuery code here, so the
     * $ function reference has been prepared for usage within the scope
     * of this function.
     *
     * This enables you to define handlers, for when the DOM is ready:
     *
     * $(function() {
     *
     * });
     *
     * When the window is loaded:
     *
     * $( window ).load(function() {
     *
     * });
     *
     * ...and/or other possibilities.
     *
     * Ideally, it is not considered best practise to attach more than a
     * single DOM-ready or window-load handler for a particular page.
     * Although scripts in the WordPress core, Plugins and Themes may be
     * practising this, we should strive to set a better example in our own work.
     */
    $('.color-picker').spectrum({
        type: "component",
        togglePaletteOnly: "true",
        hideAfterPaletteSelect: "true",
        showInput: "true",
        showInitial: "true"
    });

    $('button.nav-tab').on('click', function() {
        $('button.nav-tab').removeClass('nav-tab-active');
        $(this).addClass('nav-tab-active');
        var showContentEl = $(this).attr('data-show');
        $(`.tab-content`).hide();
        $(`.${showContentEl}`).show();
    });

    $('.reset-options').on('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        $('.reset-confirm').empty();
        $('.reset-confirm').append(`
			 <p>Are you sure?</p>
			 <a href="${window.location.href}&reset-vars=true" class="reset-final-confirm btn">YES!!!!</a>
			 <button class="reset-deny">Nah</button>
		 `);
        $('.reset-deny').on('click', function() {
            e.preventDefault();
            e.stopPropagation();
            $('.reset-confirm').empty();
        });
    });
})(jQuery);

var $ = jQuery;

function updateFontsLive(el) {
    $elem = $(el);
    // console.log('setting', $elem.attr('id'), $elem.attr('id').indexOf('-clr-inp'));
    var $txtElem = $('#' + $(el).attr('id').replace("-inp", "").replace("-clr", "") + '-sample');
    if ($elem.attr('id').indexOf('-clr-inp') > -1) {
        $txtElem.css('color', $elem.val());
    } else {
        $txtElem.css('font', $elem.val());
    }
}

function updateBtnLive(el) {
    $elem = $(el);
    var $btnElem = $(`${$(el).attr('data-el')}`);
    console.log($btnElem);
    var cssAttr = $elem.attr('data-css-attr');
    $btnElem.css(cssAttr, $elem.val());
}