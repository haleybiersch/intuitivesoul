<?php @include('header.php'); ?>

<main>

	<!-- Main Content -->
	<section class="main pt-5" id="main">
    
    <h1><?php single_cat_title() ?></h1>

    <div class="blog-post">
        <div class="post">
            <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; endif;?>
        </div>
    </div>
	
	</section>

    <?php include('sidebar.php') ?>

</main>    

<?php @include('footer.php'); ?>
