<?php get_header();?>
<main>

	<!-- Main Content -->
	<section class="main pt-5" id="main">
    
    <h1><?php single_cat_title() ?></h1>
    
	<?php  if (have_posts()) : while(have_posts()) : the_post(); ?>

		<?php the_content(); ?>

	<?php  endwhile; endif;?>


	</section>

    <?php include('sidebar.php') ?>

</main>


<?php get_footer();?>
