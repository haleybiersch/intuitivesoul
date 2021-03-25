<?php
/* Template Name: Custom Show - Use custom field (trim 0audio/mpeg) */
/**
 * This displays the audio file in an HTML5 player. Since the enclosure contains extra characters, we remove them before outputing them.
 */
// Exit if accessed directly
if (! defined('ABSPATH')) {
    exit();
}
?>

<?php get_header();?>

<main> <!-- Main Content -->
<section class="main pt-5" id="main">

	<h1><?php the_title() ?></h1>

	<div class="container">
    		<?php

    if (have_posts()) {
        while (have_posts()) {
            the_post();
            the_content();
        }
    }
    ?>
    
    <div class="container media-page pt-5">
		<h2>Featured Shows</h2>
		<div class="row">

			<table class="table table-responsive table-striped">
				<tbody>

			<?php 
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => 'archives',
                'posts_per_page' => 10,
            );
            $arr_posts = new WP_Query( $args );
             
            if ( $arr_posts->have_posts() ) :
             
                while ( $arr_posts->have_posts() ) :
                    $arr_posts->the_post();
                    ?>
					<tr>
                        <td class="show"><span><?php the_date('Y-m-d'); ?></span> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
                        <td><?php 
                            if ( get_post_meta($post->ID, 'enclosure', true) ) {
                                $thefile = get_post_meta($post->ID, 'enclosure', true);
                                $thefile = str_replace("\n", '', $thefile); // remove new lines
                                $thefile = str_replace("0audio/mpeg", '', $thefile); // remove extra characters
                                echo '<audio controls="controls">
                                        <source src="' . $thefile . '" />
                                        <p>Your browser does not support the audio element. Here is a <a href="' . $thefile . '">link to the audio</a> instead.</p>
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
			<br>
			<div class="row">
				<div class="col-12">
					<h2>News for the Heart</h2>
				</div>
				<br>
			</div>
			<br>
			<div class="row news-heart">
				<div class="col-lg-3 col-md-4">
					<img
						src="<?php echo get_template_directory_uri(); ?>/images/laurie.jpg"
						alt="Portrait of Laurie" class="portrait" />
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
					<br>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<h3>Different Places to Listen</h3>
				</div>
			</div>
			<br>
			<div class="row logos">
				<div class="col-lg-3 col-md-4 col-sm-6">
					<a
						href="https://www.iheart.com/podcast/53-news-for-the-heart-laurie-h-26606367/"
						target="_blank"><img
						src="<?php echo get_template_directory_uri(); ?>/images/i-heart-radio.jpg"
						alt="I heart radio logo" /></a>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6">
					<a href="https://bemajor.org/series/news-for-the-heart/"><img
						src="<?php echo get_template_directory_uri(); ?>/images/be-major.jpg"
						alt="Be Major Logo" /></a>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6">
					<a
						href="https://podcasts.apple.com/zw/podcast/be-major/id968164566"
						target="_blank"><img
						src="<?php echo get_template_directory_uri(); ?>/images/apple-podcasts.jpg"
						alt="Apple Podcasts Logo" /></a>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6">
					<a
						href="https://www.spreaker.com/show/news-for-the-heart-laurie-huston_1"
						target="_blank"><img
						src="<?php echo get_template_directory_uri(); ?>/images/spreaker.png"
						alt="Spreaker Logo" /></a>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6">
					<a href="https://www.stitcher.com/show/bemajor-radio"
						target="_blank"><img
						src="<?php echo get_template_directory_uri(); ?>/images/stitcher.png"
						alt="Stitcher Logo" /></a>
				</div>
			</div>
		</div>
	</div>
	
	</section>

    <?php include('sidebar.php') ?>

</main>	
<?php get_footer();?>
