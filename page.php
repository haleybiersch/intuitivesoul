<?php @include('header.php'); ?>
<div class="page">
<h1 class="text-center"><?php the_title(); ?></h1>

<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
    <?php the_content(); ?>

<?php endwhile; endif;?>
</div>
<?php @include('footer.php'); ?>
