<?php @include('header.php'); ?>
</div>
<main>


    <!-- Parallax image scroller. The image is specified in the class -->
    <section class="skrollable hero">
    	<div class="skrollable-text">
    		<h1>INTUITIVE SOUL</h1>
    		<div id="divider"></div>
    		<p>Intuitive Counselor, Energy Clearing &amp; Producer</p>
    	</div>
    </section>

<!-- End Parallax -->
	<div class="container">
<!-- Featured Audio-->
<section class="main pt-5" id="main">
	
     <div class="container media-page pt-5">
		<h2>FEATURED SHOW</h2>
		<div class="row">
		<table class="table table-responsive table-striped">
		<tbody>
                <tr>
                <?php
                    $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
						'category_name' => 'archives',
                        'posts_per_page' => 1,
	              );
					
             $arr_posts = new WP_Query( $args );
                if ( $arr_posts->have_posts() ) :
                while ( $arr_posts->have_posts() ) :
                    $arr_posts->the_post();
                    ?>
			<tr>
                        <td class="show"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
                        <td><?php 
                            if ( get_post_meta($post->ID, 'enclosure', true) ) {
                                $thefile = get_post_meta($post->ID, 'enclosure', true);
                                $thefile = str_replace("\n", '', $thefile); // remove new lines
                                $thefile = str_replace("0audio/mpeg", '', $thefile); // remove extra characters
                                echo '<audio controls="controls">
                                <source src="' . $thefile . '" />
                                <p>Your browser does not support the audio element. Here is a <a href="' . $thefile . '">link to the audio</a> 	instead.</p>
                                        </audio>'; 
                            }
                        ?>
                        </td>             
			</tr>                    
                    <?php
                endwhile;
	        endif;
        	    ?>
	  	</tbody>
		</table>
	</div>
	</div>
	</section>
	
    
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
									<a href="<?php the_permalink(); ?>" class="u-btn-submit">Continue Reading<span class="d-none"><?php the_title() ?></span></a>
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
									<a href="<?php the_permalink(); ?>" class="u-btn-submit">Continue Reading<span class="d-none"><?php the_title() ?></span></a>
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
    <div class="modal">
        <div class="modal-content text-center">
            <i class="close-modal fas fa-times"><span class="d-none">Close Form</span></i>
            <img src="<?php echo get_template_directory_uri(); ?>/img/favicon.png" alt="Intuitive Soul Logo">
            <!-- Begin Mailchimp Signup Form -->

            <div id="mc_embed_signup">
                <form action="https://Intuitivesoul.us9.list-manage.com/subscribe/post?u=39bcdfdbb8f7793099c55f10d&amp;id=ebe549107d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate pop-subscribe" target="_blank" novalidate>
                    <div id="mc_embed_signup_scroll">
                        <h2>Subscribe to Intuitive Soul's Newsletter:</h2>
                        <div class="mc-field-group">
                            <label for="mce-EMAIL" >Email Address <span class="asterisk">*</span>
                            </label>
                            <input type="email" value="" name="EMAIL" class="required email pop-email" id="mce-EMAIL">
                        </div>
                        <div id="mce-responses" class="clear">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_39bcdfdbb8f7793099c55f10d_ebe549107d" tabindex="-1" value=""></div>
                        <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                    </div>
                </form>
            </div>
            <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
            <!--End mc_embed_signup-->
            <p>Sign up and receive an exclusive discount and free download!</p>
        </div>
    </div>
<?php

@include ('footer.php');

	    
