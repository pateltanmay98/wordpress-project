<?php

function custom_post_types()
{

  // Event Post Type
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

  // Program Post Type
  register_post_type('program', array(
    'supports' => array('title', 'editor', 'excerpt'),
    'rewrite' => array('slug' => 'programs'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Programs',
      'add_new_item' => 'Add New Program',
      'edit_item' => 'Edit Program',
      'all_items' => 'All Programs',
      'singular_name' => 'Program',
      'add_new' => 'Add Program'
    ),
    'menu_icon' => 'dashicons-awards'
  ));

  // Professor Post Type
  register_post_type('professor', array(
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
    'public' => true,
    'labels' => array(
      'name' => 'Professors',
      'add_new_item' => 'Add New Professor',
      'edit_item' => 'Edit Professor',
      'all_items' => 'All Professors',
      'singular_name' => 'Professor',
      'add_new' => 'Add Professor'
    ),
    'menu_icon' => 'dashicons-welcome-learn-more'
  ));
}

add_action('init', 'custom_post_types');