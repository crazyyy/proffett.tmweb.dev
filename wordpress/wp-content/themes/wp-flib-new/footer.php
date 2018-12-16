      <!-- footer begin -->
    </div><!-- /.row -->
  </section><!-- /section container-->
</div><!-- /wrapper -->

<footer role="contentinfo">
  <div class="container">
    <div class="row">

      <div class="col-md-4 col-sm-6 col-xs-6">
        <p class="copyright">
          <?php bloginfo('name'); ?><br>г. Ижевск, ул. Кирова, 8б
        </p><!-- /copyright -->
      </div><!-- /.col-md-4 -->
      <div class="col-md-4 col-md-offset-4 col-sm-6 col-xs-6 footer-phone">
        <span class="phone">тел.: <a href="tel:3412721841">(3412) 72-18-41</a>, <a href="tel:3412474740">47-47-40</a></span>
        <span class="mail">e-mail: <a href="mailto:fort07@bk.ru">fort07@bk.ru</a></span>
      </div><!-- /.col-md-4 -->

    </div><!-- /.row -->

  </div><!-- /.container -->
</footer><!-- /footer -->

<div class="corner-top-left"></div><!-- /.corner-top-left -->
<div class="bottom-bg"></div><!-- /.bottom-bg -->

  <?php wp_footer(); ?>
  <?php if ( is_page_template('page-gallery-main.php') ) { ?>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel-singlegallery.js"></script>
  <?php } else { ?>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel-home.js"></script>
  <?php } ?>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>

</body>
</html>
