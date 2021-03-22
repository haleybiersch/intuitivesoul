<?php include('header.php') ?>
<main>

	<!-- Main Content -->
	<section class="main pt-5" id="main">
	
	<h1><?php single_cat_title() ?></h1>

	<div class="all-posts media-page">
        <div class="latest-stories">
            <div class="row">
                <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="card archives">
                            <div class="card-body">
                                <h3 class="card-title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3><hr>
                                <p><?php the_excerpt(); ?></p>
                                <div class="button">
                                    <a class="btn btn-primary" href="<?php the_permalink(); ?>">Listen Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif;?>
            </div>
        </div

	</section>

    <?php include('sidebar.php') ?>

</main>


<?php @include('footer.php'); ?>
