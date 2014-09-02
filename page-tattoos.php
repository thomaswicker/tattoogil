<?php

/*
	Template Name: Tattoos Page
*/

?>

<?php get_header(''); ?>

	<section class="row bodyMainPortfolio">
		<div class="small-12 columns"><h1>Tattoos</h1></div>
        <a href="http://www.tattoogil.com" class="button small">Back to Main Page</a>
	</section>

    <?php if ( function_exists( 'envira_gallery' ) ) { envira_gallery( 'tattoos', 'slug' ); } ?>

<?php get_footer(''); ?>