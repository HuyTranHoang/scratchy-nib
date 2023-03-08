import './bootstrap';

$(function() {
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

    $(document).on('click','.delete-style',function() {
        const id = $(this).attr('data-id');
        const styleName = $(this).attr('data-name');
        $('#style_id').val(id);
        $('#style_name').val(styleName);
    });

    $(document).on('click','.delete-calligraphy',function() {
        const id = $(this).attr('data-id');
        const calligraphyName = $(this).attr('data-name');
        const calligraphyStyle = $(this).attr('data-style');
        $('#calligraphy_id').val(id);
        $('#calligraphy_name').val(calligraphyName);
        $('#calligraphy_style').val(calligraphyStyle);
    });

    $(document).on('click','.delete-feedback',function() {
        const id = $(this).attr('data-id');
        const feedbackMessage = $(this).attr('data-message');
        $('#feedback_id').val(id);
        $('#feedback_message').val(feedbackMessage);
    });

    $(document).on('click','.delete-users',function() {
        const id = $(this).attr('data-id');
        const userName = $(this).attr('data-name');
        const userEmail = $(this).attr('data-email');
        $('#user_id').val(id);
        $('#user_name').val(userName);
        $('#user_email').val(userEmail);
    });


    // Handle Image Preview
    function previewImage(event) {
        const output = document.getElementById('ImgOutput');
        output.src = URL.createObjectURL(event.target.files[0]);
        $('#previewCard').css('display', 'block');
    }
    $('#image').on('change',previewImage);
});


