<?php

 
function new_theme_script() {
    
    wp_enqueue_style('new-theme-custom-style', get_template_directory_uri().'/assets/css/style.css', [], '1.0.0' );

    wp_enqueue_style('new-theme-style', get_template_directory_uri().'/style.css', array(), '1.0.0');
}

add_action('wp_enqueue_scripts', 'new_theme_script');