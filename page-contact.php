<?php /* Template Name: Test */ ?>
<?php include 'header.php' ;?>

<main>

	<!-- Main Content -->
	<section class="main pt-5" id="main">
    
    <h1><?php the_title() ?></h1>

	<?php cn_include_content(44); ?>
	
	</section>

    <?php include('sidebar.php') ?>

</main>

<?php include 'footer.php'; ?>
