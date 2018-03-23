<?php 

function wppc_script_enqueue(){
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/wppc-theme.css', array(), 'V0.1 Alpha', 'all');
	wp_enqueue_script('customjs',   get_template_directory_uri() . '/js/wppc-theme.js',   array(), 'V0.1 Alpha',  true);
}

add_action('wp_enqueue_scripts', 'wppc_script_enqueue');

?>