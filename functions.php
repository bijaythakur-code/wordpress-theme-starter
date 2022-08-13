<?php

// Setup
define('ESCHOOL_DEV_MODE', true);


// Theme Styles and Scripts
function eschool_scripts()
{

  $uri                =   get_theme_file_uri();
  $ver                =   ESCHOOL_DEV_MODE ? time() : false;

  // Template Google fonts
  wp_enqueue_style('eschool-google-fonts', '//fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto&display=swap');

  // Template Styles
  wp_enqueue_style('eschool-template-general-style', $uri . '/assets/css/general.css', array(), $ver, 'all');
  wp_enqueue_style('eschool-template-main-style', $uri . '/assets/css/style.css', array(), $ver, 'all');
  wp_enqueue_style('eschool-template-query-style', $uri . '/assets/css/queries.css', array(), $ver, 'all');

  // Template  Scripts
  wp_enqueue_script('eschool-template-main-script', $uri . '/assets/js/script.js', array('jquery'), $ver, true);

  // Theme's main stylesheet
  wp_enqueue_style('eschool-theme-main-style', get_stylesheet_uri(), array(), $ver, 'all');

  // Theme's main Scripts
  wp_enqueue_script('eschool-theme-main-script', $uri . '/assets/js/eschool.js', array('jquery'), $ver, true);
}
add_action('wp_enqueue_scripts', 'eschool_scripts');
