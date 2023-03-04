
 export default function handleDeleteModal() {
    $(document).on('click','.delete-category',function() {
        const id = $(this).attr('data-id');
        const categoryName = $(this).attr('data-name');
        $('#category_id').val(id);
        $('#category_name').val(categoryName);
    });

     $(document).on('click','.delete-role',function() {
         const id = $(this).attr('data-id');
         const roleName = $(this).attr('data-name');
         $('#role_id').val(id);
         $('#role_name').val(roleName);
     });

     $(document).on('click','.delete-calligraphy',function() {
         const id = $(this).attr('data-id');
         const calligraphyName = $(this).attr('data-name');
         let calligraphyStyle = $(this).attr('data-style');
         $('#calligraphy_id').val(id);
         $('#calligraphy_name').val(calligraphyName);
         $('#calligraphy_style').val(calligraphyStyle);
     });
}



