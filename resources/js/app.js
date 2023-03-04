import './bootstrap'
import Masonry from 'masonry-layout'
import ImagesLoaded from 'imagesloaded'


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

    $(document).on('click','.delete-category',function(){
        let id = $(this).attr('data-id');
        let CategoryName = $(this).attr('data-name');
        $('#category_id').val(id);
        $('#category_name').val(CategoryName);
    });


});

