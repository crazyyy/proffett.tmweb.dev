<?php get_header(); ?>

<section role="main" class="container">
  <div class="row">
    <!-- header end -->

    <?php get_sidebar(); ?>

    <article class="col-md-8 col-sm-12">

      <h1 class="page-title"><?php _e( 'Page not found', 'wpeasy' ); ?></h1>
      <h2><a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'wpeasy' ); ?></a></h2>

    </article><!-- block-looper -->

<?php get_footer(); ?>
