<?php get_header();?>


<main>

	  <h1><?php the_title() ?></h1>
   <!-- Main Content -->
   <section class="main pt-5" id="main">
	   <h1><?php the_title() ?></h1>
		 <br>
        <div class="row services">
            <?php if ($test->have_posts()) : ?>
                <?php while ($test->have_posts()) : $test->the_post(); ?>
                    <div class="col-md-8">
                                <div class="text">
                                    <p><?php the_content(); ?></p>
                                    <div class="text-center">
                                        <a href="<?php the_permalink(); ?>" class="u-btn-submit">Learn More About <?php the_title() ?></a>
																					<br>
																		</div>
                                </div>
                    </div>
                    <div class="col-md-4">
                        <?php if(has_post_thumbnail()): ?>
                            <a href="<?php the_permalink(); ?>"
                               class="thumbnail"><?php the_post_thumbnail(); ?></a>
                        <?php endif; ?>
                    </div>
                <div>
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
				<br>
</main>
<?php get_footer();?>
