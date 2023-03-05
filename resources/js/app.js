import './bootstrap';
import Masonry from 'masonry-layout'
import ImagesLoaded from 'imagesloaded'
import handleDeleteModal from './handleDeleteModal'


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

    // Handle Delete Category
    handleDeleteModal();
});
