<?php

function custom_script_files() {
    wp_enqueue_style('main_style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'custom_script_files');