<?php /* Template Name: Vacancies Page */ get_header(); ?>

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

        <?php if( have_rows('vacancies') ): ?>
          <div class="loop-vacancies">
            <?php while ( have_rows('vacancies') ) : the_row(); ?>
              <div class="loop-vacancies-inner">
                <h3><?php the_sub_field('title'); ?><span>от <?php the_sub_field('salary'); ?> р.</span></h3>
                <?php the_sub_field('description'); ?>
                <a href="<?php echo home_url(); ?>/kontakty.htm" class="btn btn-green">отправить резюме</a>
              </div><!-- /.loop-vacancies-inner -->
            <?php endwhile; ?>

          </div><!-- /.loop-vacancies -->
          <?php else :
            // no rows found
            endif; ?>

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
