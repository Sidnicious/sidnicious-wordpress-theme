<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
<? if (is_home()): ?>
		<meta name="description" content="I’m Sidney San Martín. I live in New York City, work at OkCupid, and enjoy poking buttons on computers (usually).">
<? endif ?>
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
		<title>Sidnicious! <?php wp_title('&ndash;'); ?></title>

		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen">
		<link rel="alternate" type="text/xml" title="<?php bloginfo('name'); ?> RSS 0.92 Feed" href="<?php bloginfo('rss_url'); ?>">
		<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS 2.0 Feed" href="<?php bloginfo('rss2_url'); ?>">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_enqueue_script('jquery'); ?>
		<?php wp_head(); ?>

		<script src="<?php bloginfo('template_directory'); ?>/javascript/h5.js"></script>

	</head>
	<body <?php body_class(); ?>>

		<header>
			<h1><a href="<?php bloginfo('url'); ?>/">(<?php bloginfo('name'); ?>)</a></h1>
			<p id="explanation">
				I’m a software engineer at <a href="http://okcupid.com/">OkCupid</a>. I sometimes help at <a href="http://distro.fm">DISTRO.fm</a>, and I did batch[2] of <a href="http://www.hackerschool.com/">Hacker School</a>. You can find me on <a href="https://github.com/Sidnicious">GitHub</a> and <a href="https://twitter.com/Sidnicious">Twitter</a>, among other places.
			</p>
		</header>
