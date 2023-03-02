import './bootstrap'
import $ from 'jquery'
import Masonry from 'masonry-layout'
import Lightbox from 'lightbox2'
import "../../node_modules/lightbox2/dist/css/lightbox.css"
import ImagesLoaded from 'imagesloaded'
window.jQuery = window.$ = $


$(function() {
    const grid = document.querySelector('.grid')
    let msnry
    ImagesLoaded( grid, function() {
        msnry = new Masonry( grid, {
            itemSelector: '.grid-item',
            columnWidth: '.grid-sizer',
            gutter : 10,
            percentPosition: true
        });
    });

});

