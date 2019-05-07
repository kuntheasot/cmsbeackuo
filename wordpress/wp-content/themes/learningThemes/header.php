<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage LearningThemes
 * @since Learning Themes 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php bloginfo('name')?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> > 

<div class="container-fluid">	
	<!-- site header -->
	<header class="site-header">
		<!-- <a href="https://wordpress.org/support/">support forums</a> -->
		<h1><a href="<?php echo home_url();?>"><?php bloginfo('name')?></a></h1>
		

		<nav class="site-nav">
			<?php $args = array('theme_location'=>'primary') ?>	
			<?php wp_nav_menu($args); ?>
		</nav>

	</header>
	<!-- /site header -->

	<?php if(is_page('gallery')) : ?>
        
	<?php endif ?>

	<?php if(is_page('projects')): ?>
		
	<?php endif ?>

	<?php if(is_page('about')): ?>
		<h3>Thank you visitting</h3>
	<?php endif ?>

	
	
  