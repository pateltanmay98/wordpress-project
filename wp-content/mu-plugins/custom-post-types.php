<?php

function custom_post_types()
{
  register_post_type('event', array(
    'supports' => array('title', 'editor', 'excerpt'),
    'rewrite' => array('slug' => 'events', 'with_front' => true),
    'has_archive' => true,
    'public' => true,
    'show_in_rest' => true,
    'labels' => array(
      'name' => 'Events',
      'add_new_item' => 'Add New Event',
      'edit_item' => 'Edit Event',
      'all_items' => 'All Events',
      'singular_name' => 'Event',
      'add_new' => 'Add Event'
    ),
    'menu_icon' => 'dashicons-calendar-alt'
  ));
}

add_action('init', 'custom_post_types');