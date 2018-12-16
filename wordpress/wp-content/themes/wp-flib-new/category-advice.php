<?php get_header(); ?>
<section role="main" class="container">
  <div class="row">
    <!-- header end -->

    <?php get_sidebar(); ?>

    <article class="col-md-8 col-sm-12">

      <h1 class="page-title"><?php the_category(', '); ?></h1>

      <div class="chiefs-advice-main">
        <h5>Советы и рецепты шеф-повара, полезно и увлекательно!</h5>
        <h6>Наш шеф-повар знает, как сделать блюдо настоящим хитом.  В его руках простая еда превращается в изысканный гастрономический шедевр.</h6>
      </div><!-- /.chiefs-advice-main -->

      <div class="chiefs-advice-loop">

        <?php query_posts("showposts=3&cat=9"); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <a rel="nofollow" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="chiefs-advice-inner">
            <?php if ( has_post_thumbnail()) :
              the_post_thumbnail('medium');
            else: ?>
              <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
            <?php endif; ?>
            <h5><?php the_title(); ?></h5>
          </a><!-- /.chiefs-advice-inner -->
        <?php endwhile; endif; ?>
        <?php wp_reset_query(); ?>

      </div><!-- /.chiefs-advice-loop -->

      <h6 class="chiefs-advice-after">приятного аппетита!</h6>

    </article><!-- block-looper -->

<?php get_footer(); ?>
