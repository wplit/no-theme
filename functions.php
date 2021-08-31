<?php
/**
 * Theme functions and definitions
 *
 * @package NoTheme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Register at least one menu for the menu settings to appear in the dashboard
function zero_register_menus() { 
    register_nav_menus(
        array(
            'main-menu' => 'Main Menu',
        )
    ); 
}
add_action( 'init', 'zero_register_menus' );


// Add support for post thumbnails
function zero_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'editor-styles' );
add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'zero_post_thumbnails' );
