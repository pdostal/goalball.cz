<!doctype html>
<html lang="cs">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php bloginfo('name'); ?></title>
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="author" content="goalball.cz">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS feed" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/icon.png">
		<!-- START WP_HEAD --><?php wp_head(); ?><!-- STOP WP_HEAD -->
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" media="all" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/print.css" media="print" />
	</head>
	<body>
		<header>
			<h1><a href="<?php //bloginfo('url'); ?>"><img src="<?php header_image(); ?>" alt="Logo" /></a></h1>
            <div class="clear"></div>
			<nav>
				<?php wp_nav_menu(array('theme_location' => 'headermenu', 'link_before' => '<div>', 'link_after' => '</div>')); ?>
			</nav>
		</header>