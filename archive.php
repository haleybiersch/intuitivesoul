<?php get_header();?>

    <div class="container blog-page">
        <div class="row">
            <div class="col-12"><h1>Intuitive Soul Blog</h1></div>
        </div>
        <div class="row featured">
            <div class="col-12"><h2>Featured</h2></div>
        <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
            <div class="col-md-4">
                <div class="preview">
                    <?php if(has_post_thumbnail()): ?>
                        <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>"></a>
                    <?php endif; ?>
                    <div>
                        <h3><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
                        <a href="<?php the_permalink(); ?>" class="more btn btn-primary">Continue Reading</a>
                    </div>

                </div>
            </div>
<?php endwhile; endif;?>

        </div>


<?php get_footer(); ?>