<?php /* Template Name: Gallery Single  */ get_header(); ?>
<section role="main" class="container">
  <div class="row">
    <!-- header end -->

    <?php get_sidebar(); ?>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class('col-md-8 col-sm-12'); ?>>

        <h1 class="page-title"><?php the_title(); ?></h1>
        <h4 class="page-subtitle"><?php the_field('subtitle') ?></h4>

        <?php $images = get_field('gallery'); if( $images ): ?>
          <div id="owl-gallery-main" class="owl-carousel owl-theme">
            <?php foreach( $images as $image ): ?>
              <div class="item">
                  <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
              </div>
            <?php endforeach; ?>
          </div><!-- owl-gallery-main" -->
        <?php endif; ?>

        <?php $images = get_field('gallery'); if( $images ): ?>
          <div id="owl-gallery-thumbs" class="owl-carousel owl-theme">
            <?php foreach( $images as $image ): ?>
              <div class="item">
                  <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
              </div>
            <?php endforeach; ?>
          </div><!-- owl-gallery-thumbs -->
        <?php endif; ?>

      </article>
    <?php endwhile; else: // If 404 page error ?>
      <article>

        <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>

      </article>
    <?php endif; ?>

<?php get_footer(); ?>
