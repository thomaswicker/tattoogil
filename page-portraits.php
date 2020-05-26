<?php

/*
	Template Name: Portraits TEMPLATE
*/

?>

<?php get_header(''); ?>

	<section class="row bodyMainPortfolio">
		<div class="small-12 columns"><h1>Portraits</h1></div>
        <a href="https://www.tattoogil.com" class="button btn-outline small">Back to Main Page</a>
	</section>

	<?php if ( function_exists( 'envira_gallery' ) ) { envira_gallery( '122' ); } ?>

<?php get_footer(''); ?>
