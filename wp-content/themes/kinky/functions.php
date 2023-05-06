<?php

/**
 * Kinky Kinky functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Kinky
 * @since Kinky 1.0
 */

/**
 * Table of Contents:
 * Theme Support
 * Required Files
 * Register Styles
 * Register Scripts
 * Register Menus
 * Custom Logo
 * WP Body Open
 * Register Sidebars
 * Enqueue Block Editor Assets
 * Enqueue Classic Editor Styles
 * Block Editor Settings
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since Kinky 1.0
 */


function kinky_register_styles()
{

  $theme_version = wp_get_theme()->get('Version');

  wp_enqueue_style('kinky-style', get_stylesheet_uri(), array(), $theme_version);
  wp_style_add_data('kinky-style', 'rtl', 'replace');

  // Add CSS.
  wp_enqueue_style('kinky-style', get_template_directory_uri() . '/style.css', null, $theme_version, 'style');
}

add_action('wp_enqueue_scripts', 'kinky_register_styles');
