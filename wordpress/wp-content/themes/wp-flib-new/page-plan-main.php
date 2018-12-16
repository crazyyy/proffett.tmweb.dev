<?php /* Template Name: Page Plan Main */ get_header(); ?>
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

        <?php $posts = get_field('plan_items'); if( $posts ): ?>
          <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
              <?php setup_postdata($post); ?>

              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="plan-inner">
                <?php if ( has_post_thumbnail()) :
                  the_post_thumbnail('medium');
                else: ?>
                  <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                <?php endif; ?>
                <h3><?php the_title(); ?></h3>
              </a><!-- plan-inner -->

              <?php endforeach; ?>
            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        <?php endif; ?>

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
