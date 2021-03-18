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



<div class="container pt-5 pb-5">
	
	
	
	<h2><?php the_title();?></h2>
	<br>
	<br>

			
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
	<div class="row"><div class="col-12"><h2>NEWS FOR THE HEART</h2></div><br>
	</div><br>
	<div class="row">
		<div class="col-3">
			<img src="../wp-content/uploads/laurie.jpg" alt="" width="200" height="150"/>
		</div>
		<div class="col-9">
		<p><strong>News for the Heart</strong> is dedicated to helping you give a voice to your own Soul. Our hearts have the power to free us from pain and the struggle that keep us from awakening to our true essence. Join us as we delve into our Heart and Soul to find the path that will open us to the possibilities and lead us to the life we will LOVE to live. Join Laurie as she discusses all types of relationships, contemplating our connections whether they are intimate, friends, family or work. How our relationships impact our business, careers opportunities and/or starting a business. We will explore all areas of Relationships, for this is the quickest way to grow our consciousness.
			News for the Heart is my Newest Show.  I have been a radio host for over 10 years now. Check out my audio shows!!</p><br>
		</div></div>
		<div class="row">
			<div class="col-12">
			<h3>Different Places to Listen</h3></div></div><br>
		<div class="row">
		<div class="col-2"><img src="../wp-content/uploads/blogtalkradio.jpg" alt+""/></div>
		<div class="col-2"><img src="../wp-content/uploads/iheart.jpg" alt+"" width="150"/></div>
		<div class="col-2"><img src="../wp-content/uploads/bemajor.jpg" alt+""/></div>
		<div class="col-2"><img src="../wp-content/uploads/apple.jpg" alt+""/></div>
		<div class="col-2"><img src="../wp-content/uploads/spreaker.jpg" alt+""/></div>
		<div class="col-2"><img src="../wp-content/uploads/stitcher.jpg" alt+""/></div>
		</div>


<?php get_footer();?>