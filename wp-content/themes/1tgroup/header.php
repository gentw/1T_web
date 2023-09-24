<!doctype html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header class="header">
		<div class="submenu container-fluid">
			<div class="submenu__icon-box">
				<img inline src="./images/contrast.svg" class="submenu__icon">	
			</div>
			<div class="submenu__icon-box">
				<img inline src="./images/cart.svg" class="submenu__icon">
				<span class="submenu_notification">7</span>
			</div>
			<div class="submenu__icon-box">
				<img inline src="./images/menu.svg" class="submenu__icon">
			</div>
		</div><!-- submenu -->
	</header>
	<div class="content">
		<?php get_template_part('template-parts/content', 'nav'); ?>