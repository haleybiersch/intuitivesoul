<?php @include('header.php'); ?>
    <div class="blog-post">
        <h1><?php the_title(); ?></h1>
        <div class="post">
            <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; endif;?>
        </div>
    </div>

<?php @include('footer.php'); ?>
