import './bootstrap'
import $ from 'jquery'
import Masonry from 'masonry-layout'
import ImagesLoaded from 'imagesloaded'
window.jQuery = window.$ = $


$(function() {
    const grid = document.querySelector('.grid')
    let msnry
    ImagesLoaded( grid, function() {
        msnry = new Masonry( grid, {
            itemSelector: '.grid-item',
            columnWidth: '.grid-sizer',
            percentPosition: true
        });
    });

});

