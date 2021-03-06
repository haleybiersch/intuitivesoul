<?php get_header();?>
<main>
   <!-- Main Content -->
   <section class="main pt-5" id="main">
	   <h1><?php the_title() ?></h1>
		 <br>
        <div class="row services">
            <?php if ($services->have_posts()) : ?>
                <?php while ($services->have_posts()) : $services->the_post(); ?>
                    <div class="col-md-8">
                                <div class="text">
									<br>
                                    <p><?php the_content(); ?></p>
                                    <div class="text-center">
                                        <a href="<?php the_permalink(); ?>" class="u-btn-submit">Learn More About <?php the_title() ?></a>
																					<br>
																		</div>
                                </div>
                    </div>
                    <div class="col-md-4">
						<br>
                        <?php if(has_post_thumbnail()): ?>
                            <a href="<?php the_permalink(); ?>"
                               class="thumbnail"><?php the_post_thumbnail(); ?></a>
                        <?php endif; ?>
						<br>
                    </div>
                <div>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php __('No News'); ?></p>
            <?php endif; ?>
        </div>
				<br>
       <?php include('sidebar.php') ?>
</main>
<?php get_footer();?>
