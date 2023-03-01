import './bootstrap';
import $ from 'jquery'
window.jQuery = window.$ = $


$(function() {
    $('.grid').masonry({
        // options
        itemSelector: '.grid-item',
        columnWidth: 200
    });

});

