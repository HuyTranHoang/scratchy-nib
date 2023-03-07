import './bootstrap';
import InitLocationTime from './geolocation'

// Lightbox
import Lightbox from 'lightbox2'
// Aos
import AOS from 'aos';

AOS.init({
    offset: 50,
    delay: 50,
    duration: 650,
    easing: 'ease-in-out',
    mirror: true,
    once: false,
    anchorPlacement: 'top-center',
});

// Mansory
import Masonry from 'masonry-layout'
import ImagesLoaded from 'imagesloaded'

const grid = document.querySelector('.grid')
let msnry

if (grid ?? false) {
    ImagesLoaded( grid, function() {
        msnry = new Masonry( grid, {
            itemSelector: '.grid-item',
            columnWidth: '.grid-sizer',
            gutter : 10,
            percentPosition: true
        });
    });
}

$(function() {
    // Handle GeoLocation
    InitLocationTime();
});
