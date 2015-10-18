<!DOCTYPE html>

<html>
	<head>
		<meta charset="<?php bloginfo('charset');?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name');?></title>
		<?php wp_head(); ?>
	</head>
	
<body <?php body_class() ?>>

	<div class="container">
	
	<!--site-header-->
	
	<header class="site-header">
		
			<h5><?php bloginfo('description');?></h5>
		<nav class="site-nav">
			<?php
			$args = array(
					'theme_location'=>'primary'
				); 
			wp_nav_menu( $args ); ?>
		</nav>		

	</heaader><!-- /site-header -->	

