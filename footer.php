<footer>
    <img src="<?php bloginfo( 'template_directory' ); ?>/img/footer.png" alt="footer image">
  </footer>

  <!-- BEGIN GOOGLE ANALYTICS -->
  <script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-28583434-10']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

  </script>
  <!-- END GOOGLE ANALYTICS -->

  <script>
  $('img').bind('mouseenter mouseleave', function() {
      $(this).attr({
          src: $(this).attr('data-other-src') 
          , 'data-other-src': $(this).attr('src') 
      })
  });
  </script>

  <?php wp_footer(); ?>

</body>

</html>
