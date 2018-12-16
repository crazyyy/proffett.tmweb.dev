<?php /* Template Name: Page Plan Single */ get_header(); ?>
<section role="main" class="container">
  <div class="row">
    <!-- header end -->

    <?php get_sidebar(); ?>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class('col-md-8 col-sm-12'); ?>>

        <h1 class="page-title"><?php the_title(); ?></h1>
        <?php if( get_field('page_subtitle') ) { ?>
          <h2 class="page-subtitle"><?php the_field('page_subtitle'); ?></h2>
        <?php } ?>

        <?php if( get_field('slide_text') ) { ?>
          <div class="article-inner">
        <?php } ?>

        <div class="page-plans">

          <?php $image = get_field('image'); if( !empty($image) ): ?>
            <a href="<?php echo $image['url']; ?>" class="feature-image" rel="lightbox">
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            </a>
          <?php endif; ?>

          <?php if( have_rows('bottom_links') ): while ( have_rows('bottom_links') ) : the_row(); ?>
            <a href="<?php the_sub_field('link_anchor'); ?>" class="btn btn-green other-plan"><?php the_sub_field('link_title'); ?></a>
          <?php endwhile; endif; ?>

        </div><!-- /.page-plans -->

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
