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
            
            <div class="container">
                <div class="row">
                    
                    <div class="col-xs-12">
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapse" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand" href="#">WPPC Theme</a>
                                </div>
                                <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
                            </div>
                        </nav>
                    </div>
                </div>
            
            <img src=="<?php header_image(); ?>" height=" <?php echo get_custom_header()->height; ?>" width="<?php 
            echo get_custom_header()->width; ?>" alt="" /> 

            
            
	