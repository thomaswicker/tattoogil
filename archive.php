<?php get_header('archive'); ?>

<div id="slideout">
  <div class="searchBTN"></div>
  <div id="slideout_inner">
    <?php get_search_form(); ?>
  </div>
</div>

<section id="archivesBody" class="col-lg-8 col-md-10 col-sm-10 col-xs-12">

		<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h2 class="archivesHeaderMain">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>

			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h2>Archive for <?php the_time('F jS, Y'); ?></h2>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h2>Archive for <?php the_time('F, Y'); ?></h2>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h2>Archive for <?php the_time('Y'); ?></h2>

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h2>Author Archive</h2>

			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h2>Blog Archives</h2>
			
			<?php } ?>

			<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

			<?php while (have_posts()) : the_post(); ?>
			
				<div <?php post_class() ?>>
				
					<h2 class="archivesHeader" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					
					<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

					<div class="entry archivesEntry">
						<?php the_content(); ?>
					</div>

				</div>

			<?php endwhile; ?>

			<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
			
	<?php else : ?>

		<h2>Nothing found</h2>

	<?php endif; ?>

</section>

<?php get_sidebar(); ?>

  <!-- BEGIN CONTACT MODAL BOX -->

<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><img src="http://www.thomaswicker.com/btns/closeBTN_contactForm_up.png" alt=""></button>
                <h4 class="modal-title contactMeHeader" id="myModalLabel">Contact Me</h4>
            </div>
            <div class="modal-body" id="form">

                <form name="contact" action="http://www.thomaswicker.com/processForm.php" method="post" role="form">

                    <fieldset>

                        <p class="contactBlurb">Hit me up with the form below and include as many details as you can about your project — it will help me get back to you sooner.</p>

                        <div class="form-group"> 
                            <label id="formLabel" for="name">Name:</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name"  title="Please enter your name."/>
                        </div>

                        <div class="form-group">
                            <label class="formLabel" for="phone"/>Phone:</label>
                            <input name="phone" class="form-control required digits" type="tel" id="phone" size="30" value="" placeholder="Enter your phone #" title="Please enter a valid phone number."/>
                        </div>

                        <div class="form-group">
                            <label id="formLabel" for="email"/>Email:</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" title="Please enter a valid email address."/>
                        </div>

                        <div class="form-group">
                            <label class="formLabel" for="comments" id="comments">Comments:</label>
                            <textarea class="form-control" name="comments" id="comments"></textarea>
                        </div>

                        <fieldset class="contactButtonContainer">
                            <button type="submit" name="submit" class="submit btn btn-primary" >Send</button>
                            <button type="reset" name="reset"  class="submit btn btn-default" >Reset</button>
                        </fieldset>

                    </fieldset>

                </form>
            </div>
        </div>
    </div>
</div>

<!--- END CONTACT MODAL BOX -->

<?php get_footer('archive'); ?>