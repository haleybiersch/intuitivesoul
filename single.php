<?php @include('header.php'); ?>

<main>

	<!-- Main Content -->
	<section class="main pt-5" id="main">
    

    <div class="blog-post">
        <div class="post">
            <h1><?php the_title() ?></h1>
            <?php if(has_post_thumbnail()): ?>
            <div class="text-center featured-img"><?php the_post_thumbnail(); ?></div>
            <?php endif; ?>
            <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; endif;?>
        </div>
    </div>
	
	</section>

    <?php include('sidebar.php') ?>

</main>    

<?php @include('footer.php'); ?>
