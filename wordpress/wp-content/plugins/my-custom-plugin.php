<?php
/*
Plugin Name: My Custom Plugin
Description: A custom plugin for your project
Version: 1.0
Author: Your Name
Author URI: https://yourwebsite.com
*/

// Example custom shortcode
function my_custom_shortcode() {
    // Your shortcode logic here
    return 'This is my custom shortcode';
}
add_shortcode( 'my_custom_shortcode', 'my_custom_shortcode' );

// Example AJAX action
add_action( 'wp_ajax_my_ajax_action', 'my_ajax_callback' );
add_action( 'wp_ajax_nopriv_my_ajax_action', 'my_ajax_callback' );

function my_ajax_callback() {
    // Handle AJAX request here
    wp_die();
}

