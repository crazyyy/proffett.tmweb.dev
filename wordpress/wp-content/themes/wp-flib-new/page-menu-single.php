<?php /* Template Name: Menu Single Page */ get_header(); ?>

<section role="main" class="container">
  <div class="row">
    <!-- header end -->

    <?php get_sidebar(); ?>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class('col-md-8 col-sm-12'); ?>>

        <h1 class="page-title"><?php the_title(); ?></h1>

          <?php if( get_field('slide_text') ) { ?>
            <div class="article-inner">
          <?php } ?>


          <?php $images = get_field('menus'); if( $images ): ?>
            <div id="owl-gallery-menu" class="owl-carousel owl-theme">
              <?php foreach( $images as $image ): ?>
                <div class="item">
                    <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                </div>
              <?php endforeach; ?>
            </div><!-- owl-gallery-menu -->
          <?php else : ?>
            <h4>Please add menus</h4>
          <?php endif; ?>

          <?php the_content(); ?>

          <span class="btn-download-menu-long">
            <a href="#" class="btn btn-green">скачать <?php the_title(); ?> в формаете PDF</a>
          </span><!-- btn-download-menu-long -->

          <?php if( get_field('slide_text') ) { ?>
            </div><!-- article-inner -->
          <?php } ?>

      </article>
    <?php endwhile; else: // If 404 page error ?>
      <article>

        <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>

      </article>
    <?php endif; ?>

<?php get_footer(); ?>
