<?php

/*
	Template Name: Covers TEMPLATE
*/

?>

<?php get_header(''); ?>

	<section class="row bodyMainPortfolio">
		<div class="small-12 columns"><h1>Covers & Reworks</h1></div>
        <a href="https://www.tattoogil.com" class="button btn-outline small">Back to Main Page</a>
	</section>

	<?php if ( function_exists( 'envira_gallery' ) ) { envira_gallery( '123' ); } ?>

<?php get_footer(''); ?>
