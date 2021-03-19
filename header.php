<!DOCTYPE html>
<html>
<head>
  <?php wp_head();?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body <?php body_class();?>>


  <header >
<div class="container">
    <div class="search">
    <form class="searchbox">
        <input type="search" placeholder="Search..." name="search" class="searchbox-input" required>
        <input type="submit" class="searchbox-submit">
        <span class="searchbox-icon"><i class="fa fa-search" aria-hidden="true"></i></span>
    </form>
    </div>
    <nav>
        <h4 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h4>
        <div class="nav-button">
            <p class="d-none">Mobile Nav Button</p>
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <?php wp_nav_menu (
            array(
                'theme_location' => 'top-menu',
                'menu_class' => 'navigation'
            )

        ); ?>

    </nav>
  </div>

  </header>
<body>
<div class="container">


