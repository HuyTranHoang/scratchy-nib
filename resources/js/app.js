import './bootstrap';
import InitLocationTime from './geolocation'

// Lightbox

import Lightbox from 'lightbox2'
import "../../node_modules/lightbox2/dist/css/lightbox.css"

import Masonry from 'masonry-layout'
import ImagesLoaded from 'imagesloaded'

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

$(function() {
    // Handle GeoLocation
    InitLocationTime();
});
