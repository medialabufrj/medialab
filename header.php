<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<title><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<!-- <link rel="icon" href="<?php echo WP_THEME_URL ?>/img/favicon.ico" /> -->
	
	<link href="https://fonts.googleapis.com/css?family=Rajdhani:300,500,700|Source+Sans+Pro:300,300i,600,600i" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo WP_THEME_URL ?>/css/main.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<header class="is-hidden-touch">

		<div class="section-wrapper header">

			<a href="<?php echo site_url(); ?>" class="header--marca">
				<img src="<?php echo WP_THEME_URL ?>/img/medialab-marca.svg" width="128">
			</a>
			
			<nav class="display site-menu columns">
				<div class="column">
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
				</div>
				<div class="column site-search is-narrow">
					<?php get_search_form(); ?>
				</div>
			</nav>
			
			<nav class="display site-categories is-hidden-touch">
				<?php wp_list_categories( array('title_li'=>'') ) ?>
			</nav>

		</div>

	</header>

	<nav class="navbar is-transparent is-hidden-desktop">
		<div class="navbar-brand">
			<a class="navbar-item" href="<?php echo site_url(); ?>">
				<img src="<?php echo WP_THEME_URL ?>/img/medialab-marca.svg">
			</a>
			<div class="navbar-burger burger" data-target="mobile_menu">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
		<div id="mobile_menu" class="navbar-menu">
			<div class="has-text-centered is-uppercase"></div>
		</div>
	</nav>

