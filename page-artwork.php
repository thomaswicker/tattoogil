<?php

/*
	Template Name: ArtWork TEMPLATE
*/

?>

<?php get_header(''); ?>

    <section class="row bodyMainPortfolio">
      <div class="small-12 columns"><h1>Paintings & Crafts</h1></div>
      <div class="small-12 columns">
        <a href="https://www.tattoogil.com" class="button btn-outline small">Back to Main Page</a>
      </div>
    </section>

    <?php if ( function_exists( 'envira_gallery' ) ) { envira_gallery( 'art-work', 'slug' ); } ?>

<?php get_footer(''); ?>
