<?php get_header(); ?>

<section role="main" class="container">
  <div class="row">
    <!-- header end -->

    <?php get_sidebar(); ?>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class('col-md-8 col-sm-12'); ?>>

        <h1 class="page-title">советы от шеф-повара</h1>

        <?php if ( has_post_thumbnail()) : ?>
          <span class="advice-thumb"><?php the_post_thumbnail('medium'); ?></span>
        <?php endif; ?>

        <h2 class="page-subtitle"><?php the_title(); ?></h2>

        <?php if( get_field('slide_text') ) { ?>
          <div class="article-inner">
        <?php } ?>

        <?php the_content(); ?>

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
