<?php 

/*
 =====================================================================
  Include Scripts 
 =====================================================================
*/
function wppc_script_enqueue(){
        //css
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), 'V4.0.0', 'all');
        wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/wppc-theme.css', array(), 'V0.1 Alpha', 'all');
        //JS
	wp_enqueue_script('jquery');
        wp_enqueue_script('bootstrapjs',   get_template_directory_uri() . '/js/bootstrap.min.js',   array(), 'V4.0.0',  true);
        wp_enqueue_script('customjs',   get_template_directory_uri() . '/js/wppc-theme.js',   array(), 'V0.1 Alpha',  true);
        
}

add_action('wp_enqueue_scripts', 'wppc_script_enqueue');

/*
=======================================================================
 Activate menus
=======================================================================
 */
function wppc_theme_setup() {
    
    add_theme_support('menus');
    
    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Primary Footer Navigation');
    
}

add_action('init', 'wppc_theme_setup');

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');

add_theme_support('post-formats', array('aside', 'image', 'video'));


