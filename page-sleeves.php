<?php

/*
	Template Name: Sleeves Page
*/

?>

<?php get_header(''); ?>

	<section class="row bodyMainPortfolio">
		<div class="small-12 columns"><h1>Sleeves</h1></div>
        <a href="http://www.tattoogil.com" class="button btn-outline small">Back to Main Page</a>
	</section>

    <?php if ( function_exists( 'envira_gallery' ) ) { envira_gallery( 'sleeves', 'slug' ); } ?>

<?php get_footer(''); ?>
