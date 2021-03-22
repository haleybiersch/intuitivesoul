<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Joseph Krogman, March 14 2021">
	<meta name="description" content="Intuitive Soul">
	<meta name="generator" content="Eclipse IDE, PHP module">
    <?php wp_head(); // include CSS and includes ?>
    <title>Intuitive Soul</title>

</head>

<body <?php body_class();?>>

	<a href="#main" class="skip-to-content-link">Skip to content</a>

	<header>
		<div class="container">
			<div class="search">
				<form class="searchbox">
					<input type="search" placeholder="Search..." name="search"
						class="searchbox-input" required> <input type="submit"
						class="searchbox-submit"> <span class="searchbox-icon"><i
						class="fa fa-search" aria-hidden="true"></i></span>
				</form>
			</div>
			<nav>
				<h4 class="logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
				</h4>
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

