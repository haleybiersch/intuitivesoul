<?php get_header();?>

    <div class="all-posts media-page">
        <div class="row">
            <div class="col-12"><h1><?php the_title(); ?> <hr></h1></div>
        </div>
        <div class="latest-stories">
            <div class="row">
                <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="card archives">
                            <div class="card-body">
                                <h3 class="card-title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3><hr>
                                <p><?php the_excerpt(); ?></p>
                                <div class="button">
                                    <a class="btn btn-primary" href="<?php the_permalink(); ?>">Listen Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif;?>
            </div>
        </div>
    </div>


<?php get_footer(); ?>