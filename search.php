<?php @include('header.php'); ?>
<main>
    <div class="container search-results">
        <h1 class="search-title">
            <?php echo $wp_query->found_posts; ?> <?php _e( 'Search Results Found For', 'locale' ); ?>: "<?php the_search_query(); ?>"
        </h1>
        <?php while ( have_posts() ) : the_post(); ?>
            <h2 class="search-post-title"><a class="search-post-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p class="search-post-excerpt"><?php the_excerpt(); ?></p>
        <?php endwhile; ?>
        <?php echo paginate_links(); ?>
        <?php get_sidebar(); ?>
    </div>
</main>

<?php @include('footer.php');