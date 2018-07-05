
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
 
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
	<?php wp_head() ?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	
</head>
 
<body <?php body_class(); ?>>


 
<header class="site-header">
    <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
    <h1><?php bloginfo( 'name' ); ?></h1>
    <h4><?php 
	
	//bloginfo( 'description' ); 

	?></h4>
    
	<a href="<?php echo home_url();?>"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
	</a>
	<nav class="navigation-menu">
	    <?php $args = [ 'theme_location' => 'primary' ]; ?>
        <?php wp_nav_menu($args) ?>
        </nav>
	
</header>
