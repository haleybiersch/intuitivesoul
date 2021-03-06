<?php /* Template Name: Blog */ ?>
<?php get_header();?>

<main>

	<!-- Main Content -->
	<section class="pt-5" id="main">
    
    <h1><?php the_title() ?></h1>

    <div class="container blog-page">
        <div class="row">
            <div class="col-12"><h2>Latest Posts</h2></div>
        </div>
        <div class="row all-posts">
            <?php  $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

            $args = array(
                'posts_per_page' => 6,// query last 5 posts
                'paged' => $paged,
                'category_name' => 'blog',
            );
            $all_posts = new WP_Query($args); ?>
            <?php if ($all_posts->have_posts()) : ?>
                <?php while ($all_posts->have_posts()) : $all_posts->the_post(); ?>
                    <div class="col-md-6 col-lg-4 post">
                        <div class="preview card h-100">
                            <div class="card-body">
                                <?php if(has_post_thumbnail()): ?>
                                    <a href="<?php the_permalink(); ?>" class="thumbnail"><?php the_post_thumbnail(); ?></a>
                                <?php endif; ?>
                                <div>
                                    <h3 class="card-title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3><hr>
                                    <p><?php the_excerpt(); ?></p>
                                    <div class="text-center"><a href="<?php the_permalink(); ?>" class="u-btn-submit">Continue Reading <span class="d-none"><?php the_title() ?></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php 	if (function_exists("cq_pagination")) {
                    cq_pagination($all_posts->max_num_pages);
                } ?>
            <?php else : ?>
                <p><?php __('No News'); ?></p>
            <?php endif; ?>
        </div>
        <div class="row">
            <div class="col-12"><h2>Featured Posts</h2></div>
        </div>
        <div class="row featured-posts">
            <?php if ($featured_blogs->have_posts()) : ?>
                <?php while ($featured_blogs->have_posts()) : $featured_blogs->the_post(); ?>
                    <div class="col-md-6 col-lg-4 post">
                        <div class="preview card h-100">
                            <div class="card-body">
                            <?php if(has_post_thumbnail()): ?>
                                <a href="<?php the_permalink(); ?>" class="thumbnail"><?php the_post_thumbnail(); ?></a>
                            <?php endif; ?>
                            <div class="text">
                                <h3 class="card-title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3><hr>
                                <p><?php the_excerpt(); ?></p>
                                <div class="text-center"><a href="<?php the_permalink(); ?>" class="u-btn-submit">Continue Reading <span class="d-none"><?php the_title() ?></span></a></div>
                            </div>
                        </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php __('No News'); ?></p>
            <?php endif; ?>
        </div>
    </div>
    

	</section>

    <?php include('sidebar.php') ?>

</main>
    
<?php get_footer();
