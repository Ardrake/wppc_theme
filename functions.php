<?php 

function wppc_script_enqueue(){
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/wppc-theme.css', array(), 'V0.1 Alpha', 'all');
	wp_enqueue_script('customjs',   get_template_directory_uri() . '/js/wppc-theme.js',   array(), 'V0.1 Alpha',  true);
}

add_action('wp_enqueue_scripts', 'wppc_script_enqueue');

function wppc_theme_setup() {
    
    add_theme_support('menus');
    
    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Primary Footer Navigation');
    
}

add_action('init', 'wppc_theme_setup');

