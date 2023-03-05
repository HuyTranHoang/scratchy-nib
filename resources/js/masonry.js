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
