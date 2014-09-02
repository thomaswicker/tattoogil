<?php

/*
	Template Name: ArtWork Page
*/

?>

<?php get_header(''); ?>

    <section class="row bodyMainPortfolio">
      <div class="small-12 columns"><h1>Paintings & Crafts</h1></div>
      <div class="small-12 columns">
        <a href="http://www.tattoogil.com" class="button small">Back to Main Page</a>
      </div>
    </section>

    <?php if ( function_exists( 'envira_gallery' ) ) { envira_gallery( 'art-work', 'slug' ); } ?>

<?php get_footer(''); ?>