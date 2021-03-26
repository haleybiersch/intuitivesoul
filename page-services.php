<?php get_header();?>


<main>

	<!-- Main Content -->
	<section class="main pt-5" id="main">

    <h1><?php the_title() ?></h1>
    <div class="container">
	<?php  if ($services->have_posts()) : while($services->have_posts()) : $services->the_post(); ?>

		<?php the_content(); ?>

	<?php  endwhile; endif;?>
	</div>

	</section>

    <?php include('sidebar.php') ?>

</main>


<?php get_footer();?>
