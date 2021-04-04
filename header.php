<!DOCTYPE html>
<html id="html">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Joseph Krogman, March 14 2021">
	<meta name="description" content="Intuitive Soul">
	<meta name="generator" content="Eclipse IDE, PHP module">
    <?php wp_head(); // include CSS and includes ?>
    <title>Intuitive Soul</title>
<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/39bcdfdbb8f7793099c55f10d/84c2dc6452047802abaa74432.js");</script>
</head>

<body <?php body_class();?>>
	<a href="<?php get_template_directory_uri(); ?>#main" class="skip-to-content-link">Skip to content</a>
	<header>
		<div class="container">
            <div class="search">
            <?php get_search_form(); ?>
        </div>
			<nav>
                <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/lotus-flower.png" alt="Intuitive Soul Logo" ></a>
				<div class="nav-button">
					<p class="d-none">Mobile Nav Button</p>
					<div class="line1"></div>
					<div class="line2"></div>
					<div class="line3"></div>
				</div>
        <?php wp_nav_menu(array(
                'theme_location' => 'top-menu',
                'menu_class' => 'navigation')
            );
        ?>

    		</nav>
		</div>

	</header>
<body>
<div class="container">

