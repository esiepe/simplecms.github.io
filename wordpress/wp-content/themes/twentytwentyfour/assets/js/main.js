jQuery(document).ready(function($) {
    $('#load-more').on('click', function() {
        $.ajax({
            url: ajax_object.ajax_url,
            type: 'POST',
            data: {
                action: 'get_more_content'
            },
            success: function(response) {
                $('#content-area').html(response);
            }
        });
    });
});
