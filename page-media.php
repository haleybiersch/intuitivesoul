<?php
/*Template Name: Custom Show*/
/**
Page template Grid Show
*/
//Exit if accessed directly
if (! defined('ABSPATH')) {
	exit;
}
?>

<?php get_header();?>



<div class="container media-page pt-5 pb-5">
	<h1><?php the_title();?></h1>
    <h2 class="text-center">Featured Shows</h2>
    <div class="featured">
        <div class="row">
            <?php if ($archives->have_posts()) : ?>
                <?php while ($archives->have_posts()) : $archives->the_post(); ?>
                    <div class="col-md-6 col-lg-4">
                                <div class="text">
                                    <h3 class="card-title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
                                    <p><?php the_excerpt(); ?></p>
                                </div>
                            </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php __('No News'); ?></p>
            <?php endif; ?>

    </div>
    </div>

 <div class="container-fluid">
		<?php if (have_posts()) {
	while(have_posts()) {
	the_post();
	the_content();
	}
}
?>
<div id="container-fluid">
<h2>Featured Shows</h2>
<div class="row">
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Author</th>
      <th scope="col">Description</th>
      <th scope="col">Audio Track</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td class="author">Thomas Campbell</td>
      <td class="show">March 2021 - <em><strong>Perceptions</strong></em></td>
      <td><audio class="embed-responsive-item" controls="" preload="none">
 		 <source src="../wp-content/uploads/thomascampbell/2020/NFTHtomperceptionsNY2021.mp3" type="audio/mpeg">
 		</audio></</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td class="author">Thomas Campbell</td>
      <td class="show">2021 February - Love Foundations</td>
      <td><audio class="embed-responsive-item" controls="" preload="none">
 		 <source src="../wp-content/uploads/thomascampbell/2021/NFTHtomlovefoundations21.mp3" type="audio/mpeg">
 		</audio></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td class="author">Thomas Campbell</td>
      <td class="show">2021 January - Moving Forward</td>
      <td><audio class="embed-responsive-item" controls="" preload="none">
 		 <source src="../wp-content/uploads/thomascampbell/2021/NFTHtommovingforward0221.mp3" type="audio/mpeg">
 		</audio></td>
    </tr>
  </tbody>
</table>
</div>	<br>
	<div class="row"><div class="col-12"><h2>News for the Heart</h2></div><br>
	</div><br>
	<div class="row">
		<div class="col-lg-2 col-md-3">
			<img src="<?php echo get_template_directory_uri(); ?>/images/laurie.jpg" alt="Portrait of Laurie" class="portrait"/>
		</div>
		<div class="col-lg-10 col-md-9">
		<p><strong>News for the Heart</strong> is dedicated to helping you give a voice to your own Soul. Our hearts have the power to free us from pain and the struggle that keep us from awakening to our true essence. Join us as we delve into our Heart and Soul to find the path that will open us to the possibilities and lead us to the life we will LOVE to live. Join Laurie as she discusses all types of relationships, contemplating our connections whether they are intimate, friends, family or work. How our relationships impact our business, careers opportunities and/or starting a business. We will explore all areas of Relationships, for this is the quickest way to grow our consciousness.
			News for the Heart is my Newest Show.  I have been a radio host for over 10 years now. Check out my audio shows!!</p><br>
		</div></div>
		<div class="row">
			<div class="col-12">
			<h3>Different Places to Listen</h3></div></div><br>
		<div class="row logos">
		<div class="col-lg-2 col-md-4 col-sm-6"><img src="<?php echo get_template_directory_uri(); ?>/images/blog-talk-radio.png" alt="Blog Talk Radio Logo"/></div>
		<div class="col-lg-2 col-md-4 col-sm-6"><img src="<?php echo get_template_directory_uri(); ?>/images/i-heart-radio.jpg" alt="I heart radio logo" /></div>
		<div class="col-lg-2 col-md-4 col-sm-6"><img src="<?php echo get_template_directory_uri(); ?>/images/be-major.jpg" alt="Be Major Logo"/></div>
		<div class="col-lg-2 col-md-4 col-sm-6"><img src="<?php echo get_template_directory_uri(); ?>/images/apple-podcasts.jpg" alt="Apple Podcasts Logo"/></div>
		<div class="col-lg-2 col-md-4 col-sm-6"><img src="<?php echo get_template_directory_uri(); ?>/images/spreaker.png" alt="Spreaker Logo"/></div>
		<div class="col-lg-2 col-md-4 col-sm-6"><img src="<?php echo get_template_directory_uri(); ?>/images/stitcher.png" alt="Stitcher Logo"/></div>
		</div>
</div>
 </div>
</div>


<?php get_footer();?>