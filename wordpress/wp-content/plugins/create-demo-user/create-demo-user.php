<?php
/*
Plugin Name: Create Demo User
Description: Creates a demo user on activation
Version: 1.0
Author: Your Name
*/

function create_demo_user() {
    if (!username_exists('demouser')) {
        $user_id = wp_create_user('demouser', 'ThisIsForWPClass', 'demouser@example.com');
        if (!is_wp_error($user_id)) {
            $user = new WP_User($user_id);
            $user->set_role('subscriber');
        }
    }
}

register_activation_hook(__FILE__, 'create_demo_user');
