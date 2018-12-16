<?php /* Template Name: Gallery Category */ get_header(); ?>
<section role="main" class="container">
  <div class="row">
    <!-- header end -->

    <?php get_sidebar(); ?>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class('col-md-8 col-sm-12'); ?>>

        <h1 class="page-title"><?php the_title(); ?></h1>

        <?php if( get_field('subtitle') ) { ?>
          <h2 class="page-subtitle"><?php the_field('subtitle'); ?></h2>
        <?php } ?>

        <?php $posts = get_field('gallery_elements'); if( $posts ): ?>
          <ul class="page-gallery-main">
          <?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>
            <li>
              <a href="<?php echo get_permalink( $p->ID ); ?>">
                <?php echo get_the_post_thumbnail($p->ID); ?>
                <h3><?php echo get_the_title( $p->ID ); ?></h3>
              </a>
            </li>
          <?php endforeach; ?>
          </ul>
        <?php endif; ?>

      </article>
    <?php endwhile; else: // If 404 page error ?>
      <article>
        <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
      </article>
    <?php endif; ?>

<?php get_footer(); ?>
