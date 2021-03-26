<?php @include('header.php'); ?>
<main>

    <!-- Parallax image scroller. The image is specified in the class -->
    <section class="skrollable hero">
    	<div class="skrollable-text">
    		<h1>INTUITIVE SOUL</h1>
    		<div id="divider"></div>
    		<p>Intuitive Counselor, Energy Clearing &amp; Radio Producer</p>
    	</div>
    </section>

    <!-- End Parallax -->

    <!-- Main Content -->

    <section class="blog pb-5">
    	<h2>FEATURED BLOGS</h2>
    	<div class="container">
        	<div class="row featured-posts">
                <?php if ($featured_blogs->have_posts()) : ?>
                    <?php while ($featured_blogs->have_posts()) : $featured_blogs->the_post(); ?>
                        <div class="col-md-6 col-lg-4">
        			<div class="preview card h-100">
        				<div class="card-body">
                                <?php if(has_post_thumbnail()): ?>
                                    <a href="<?php the_permalink(); ?>"
        						class="thumbnail"><?php the_post_thumbnail(); ?></a>
                                <?php endif; ?>
                                <div class="text">
        						<h3>
        							<a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
        						</h3>
        						<hr>
        						<p><?php the_excerpt(); ?></p>
        						<div class="text-center">
        							<a href="<?php the_permalink(); ?>" class="u-btn-submit">Continue Reading</a>
        						</div>
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

    <section class="services pb-5">
    	<h2>SERVICES</h2>
    	<div class="container">

    		<div class="row services">
                  <?php if ($featured_services->have_posts()) : ?>
                      <?php while ($featured_services->have_posts()) : $featured_services->the_post(); ?>
                          <div class="col-md-6 col-lg-4">
    				<div class="preview card h-100">
    					<div class="card-body">
                                  <?php if(has_post_thumbnail()): ?>
                                      <a href="<?php the_permalink(); ?>"
    							class="thumbnail"><?php the_post_thumbnail(); ?></a>
                                  <?php endif; ?>
                                  <div class="text">
    							<h3>
    								<a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
    							</h3>
    							<hr>
    							<p><?php the_excerpt(); ?></p>
    							<div class="text-center">
    								<a href="<?php the_permalink(); ?>" class="u-btn-submit">Continue Reading</a>
    							</div>
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
    		<br>

    </section>

  	<?php include('sidebar.php') ?>

</main>

<?php

@include ('footer.php');

