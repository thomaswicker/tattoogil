  </section><!-- container -->

  <!--  BEGIN FACEBOOK CODE  -->
  <div id="fb-root"></div>

  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  <!-- END FACEBOOK CODE -->

  <footer id="footer">
    <div class="footerLeft">        
        <div class="fb-like" data-href="http://www.thomaswicker.com" data-send="false" data-layout="button_count" data-width="200" data-show-faces="false" data-font="arial" data-colorscheme="dark"></div>
    </div>
    <div class="footerMiddle">&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?><span style="padding: 0px 0px 0px 10px; font-style: italic;">All Rights Reserved</span></div>
    <div class="footerRight">Currently Viewing: <span>Post Archives</span></div>

  </footer>

  <?php wp_footer(); ?>

</body>

</html>
