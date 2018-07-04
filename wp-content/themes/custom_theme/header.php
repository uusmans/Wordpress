<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo('title'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<div class="container">
			<h1>
				<a href="<?php bloginfo('template_url')/index.php ?>">
					<?php bloginfo('title'); ?>
				</a>
				<small><?php bloginfo('discription'); ?></small>
			</h1>
			<div class="h_right">
				<?php get_search_form(); ?>
			</div>
		</div>
	</header>

	<nav class="nav main-nav">
		<div class="container">
        <?php $args = array(
								'theme_location' => 'header-menu'
							) ?>
            <?php wp_nav_menu($args); ?>
		</div>
	</nav>
