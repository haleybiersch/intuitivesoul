<?php
/* Template Name: Custom Show */
/**
 * Page template Grid Show
 */
// Exit if accessed directly
if (! defined('ABSPATH')) {
    exit();
}
?>

<?php get_header();?>

<main> <!-- Main Content -->
<section class="main pt-5" id="main">



	<div class="container">
    		<?php

    if (have_posts()) {
        while (have_posts()) {
            the_post();
            the_content();
        }
    }
    ?>
    
    <div class="container media-page">
		<h2>Featured Shows</h2>
		<div class="row">

			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">Item</th>
						<th scope="col">Description</th>
						<th scope="col-5">Audio Track</th>
					</tr>
				</thead>
				<tbody>
              <?php if ($archives->have_posts()) : ?>
                  <?php while ($archives->have_posts()) : $archives->the_post(); ?>
                      <?php
        
                    if (empty($counter)) {
                        $counter = 1;
                    } else {
                        $counter ++;
                    }
        
                    ?>
                <tr>
                <?php
                    $args = array(
                        'post_type' => 'attachment',
                        'post_mime_type' => 'audio',
                        'numberposts' => - 1,
					
                    );
                    $audiofiles = get_posts($args);
        
                    foreach ($audiofiles as $file) {
                        $url = wp_get_attachment_url($file->ID);
                        // echo $url .'<br>';// url
        
                        $attr = array(
                            'src' => $url,
                            'loop' => '',
                            'autoplay' => '',
                            'preload' => 'none'
                        );
                    }
                    ?>
                    <td scope="row"><?php echo $counter; ?></td>
        			<td class="show"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
        			<td class="audio"><?php echo wp_audio_shortcode($attr);?></td>
            	</tr>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php __('No News'); ?></p>
        <?php endif; ?>
	  			  </tbody>
				</table>
			</div>
			
			<div class="row">
				<div class="col-12">
					<h2>News for the Heart</h2>
				</div>
				
			</div>
			
			<div class="row news-heart">
				<div class="col-lg-2 col-md-4">
					<img
						src="<?php echo get_template_directory_uri(); ?>/images/laurie.jpg"
						alt="Portrait of Laurie" class="portrait" max width="200" />
				</div>
				<div class="col-lg-9 col-md-8">
					<p>
						<strong>News for the Heart</strong> is dedicated to helping you
						give a voice to your own Soul. Our hearts have the power to free
						us from pain and the struggle that keep us from awakening to our
						true essence. Join us as we delve into our Heart and Soul to find
						the path that will open us to the possibilities and lead us to the
						life we will LOVE to live. Join Laurie as she discusses all types
						of relationships, contemplating our connections whether they are
						intimate, friends, family or work. How our relationships impact
						our business, careers opportunities and/or starting a business. We
						will explore all areas of Relationships, for this is the quickest
						way to grow our consciousness. News for the Heart is my Newest
						Show. I have been a radio host for over 10 years now. Check out my
						audio shows!!
					</p>
				</div>
			</div>
					<h3>Different Places to Listen</h3>
				<div class="row logos">
					<div class="col-lg-2 col-md-4 col-sm-6">
					<a href="https://bemajor.org/series/news-for-the-heart/"><img 
					src="<?php echo get_template_directory_uri(); ?>/images/be-major.jpg"
					alt="Be Major Logo" /></a>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-6">
					<a href="https://podcasts.apple.com/zw/podcast/be-major/id968164566"
					 target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/apple-podcasts.jpg"
					alt="Apple Podcasts Logo" /></a>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="https://www.iheart.com/podcast/53-news-for-the-heart-laurie-h-26606367/"
					target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/i-heart-radio.jpg"
					alt="I heart radio logo" /></a>
					</div>			
					<div class="col-lg-2 col-md-4 col-sm-6">
					<a href="https://www.spreaker.com/show/news-for-the-heart-laurie-huston_1"
					target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/spreaker.png"
					alt="Spreaker Logo" /></a>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-6">
					<a href="https://www.stitcher.com/show/bemajor-radio"
					target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/stitcher.png"
					alt="Stitcher Logo" /></a>
					</div>
				</div><!--row logos-->
		</div><!--media page-->
	</div><!--container-->
	
	</section>

    <?php include('sidebar.php') ?>

</main>	
<?php get_footer();?>
