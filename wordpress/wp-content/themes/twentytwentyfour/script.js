jQuery(document).ready(function($) {
    // Your JavaScript code here
    // Example: AJAX call
    $('#my_button').click(function() {
        $.ajax({
            url: '/wp-admin/admin-ajax.php',
            type: 'post',
            data: {
                action: 'my_ajax_action'
            },
            success: function(response) {
                // Handle response
            }
        });
    });
});
