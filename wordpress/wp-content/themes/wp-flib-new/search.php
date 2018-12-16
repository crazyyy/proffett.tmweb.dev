<?php get_header(); ?>

<section role="main" class="container">
  <div class="row">
    <!-- header end -->

    <?php get_sidebar(); ?>

    <article class="col-md-8 col-sm-12">

      <h1 class="page-title"><?php echo sprintf( __( '%s Search Results for ', 'wpeasy' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

      <?php get_template_part('loop'); ?>
      <?php get_template_part('pagination'); ?>

    </article><!-- block-looper -->

<?php get_footer(); ?>
