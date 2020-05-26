<?php

/*
	Template Name: American Traditional TEMPLATE
*/

?>

<?php get_header(''); ?>

    <section class="row bodyMainPortfolio">
      <div class="small-12 columns"><h1>American Traditional</h1></div>
      <div class="small-12 columns">
        <a href="https://www.tattoogil.com" class="button btn-outline small">Back to Main Page</a>
      </div>
    </section>

	<?php if ( function_exists( 'envira_gallery' ) ) { envira_gallery( '504' ); } ?>

<?php get_footer(''); ?>
