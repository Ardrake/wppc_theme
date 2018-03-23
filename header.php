<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>WPPC Theme</title>
		<?php wp_head(); ?>
	</head>
	<?php 
            if(is_front_page()):
                $wppc_classes = array('wppc-class', 'my-class');
            else: 
                $wppc_classes = array('autre-class');
            endif;
        ?>
        
        
       
        
        <body <?php body_class($wppc_classes); ?>>
            
            <?php wp_nav_menu(array('theme_location'=>'primary')); ?>

            
            
	