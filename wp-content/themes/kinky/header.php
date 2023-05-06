<?php

/**
 * Header file for the Kinky Kinky WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Kinky
 * @since Kinky 1.0
 */

?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<?php
	wp_body_open();
	?>

	<header id="header" class="header">
		<div class="header_banner"></div>
		<div class="header_menu">
			<nav class="header_nav">
				<a href="" class="header_logo">
					<img src="<?php echo get_template_directory_uri(); ?>/logo.svg" alt="Logo" class="header_logo__img">
				</a>
				<ul class="header_nav__list">
					<li class="header_nav__item">
						<a href="#" class="header_nav__link">Новости</a>
					</li>
					<li class="header_nav__item">
						<a href="#" class="header_nav__link">Статьи</a>
					</li>
					<li class="header_nav__item">
						<a href="#" class="header_nav__link">Уроки</a>
					</li>
				</ul>
				<div class="header_search">
					<input type="search" placeholder="Поиск" class="header_search__input">
				</div>
			</nav>
		</div>
	</header><!-- #header -->

	<?php
	// Output the menu modal.
	get_template_part('template-parts/modal-menu');
