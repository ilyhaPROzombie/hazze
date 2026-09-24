<?php
get_header();
?>
<h1>INDEX.php</h1>

<main id="primary" class="site-main">

	<?php
	// echo get_post_type_archive_link('post') . '<br>'; 
	if (have_posts()) :

		/* Start the Loop */
		while (have_posts()) :

			the_post();

			the_title(); echo '<br>';

		endwhile;

	endif;
	?>

</main>

<?php
get_footer();
