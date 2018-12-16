<aside class="col-md-4 col-sm-12 sidebar" role="complementary">

  <div class="widget widget-search">
    <form method="get" name="searchform" action="<?php bloginfo('url'); ?>/">
      <input type="text" name="s" placeholder="поиск по сайту">
      <input type="submit" value="">
    </form>
  </div><!-- /.widget widget-search -->

  <div class="widget widget-social">
    <ul>
      <li class="soc-vk"><a href="http://vk.com/fortrobinzon"></a></li>
      <li class="soc-od"><a href="http://ok.ru/fortrobinzon.ul"></a></li>
      <li class="soc-fb"><a href="https://www.facebook.com/fort.robinzon"></a></li>
    </ul>
  </div><!-- /.widget widget-social -->

  <div class="widget widget-with-bg widget-nav">

    <?php if( get_field('sidenavfull') ) { ?>
      <?php wpeSideNavFull(); ?>
    <?php } else if ( get_field('sidenavfull2') ) { ?>
      <?php wpeSideNavFullTwo(); ?>
    <?php } else if ( get_field('sidenavfull3') ) { ?>
      <?php wpeSideNavFullThree(); ?>
    <?php } else if ( get_field('sidenavfull4') ) { ?>
      <?php wpeSideNavFullFour(); ?>
    <?php } else if ( is_category() ) { ?>
      <?php wpeSideNavCategory(); ?>
    <?php } else { ?>
      <?php wpeSideNav(); ?>
    <?php } ?>

  </div><!-- /.widget widget with-bg widget-nav -->

  <div class="widget widget-with-bg widget-text widget-href widget-href-cake">
    <h6>организация и проведение ваших торжеств</h6>
    <a href="#" class="btn btn-green">заказать банкет</a>
  </div><!-- /.widget widget-text widget-href widget-href-cake -->

  <div class="widget widget-with-bg widget-text widget-href widget-href-reserved">
    <h6>он-лайн бронирование столика</h6>
    <a href="#" class="btn btn-green">забронировать </a>
  </div><!-- /.widget widget-text widget-href widget-href-cake -->

  <?php query_posts("showposts=1&cat=1"); ?>
    <div class="widget widget-with-bg widget-news widget-href">
      <ul>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <li>
          <?php if( get_field('date') ) { ?>
            <?php setlocale(LC_ALL, 'ru_RU') ?>
            <?php $date = get_field('date', false, false); $date = new DateTime($date); ?>

            <span class="date">
              <span class="d"><?php echo $date->format('j'); ?></span>
              <span class="m"><?php echo $date->format('M'); ?></span>
              <span class="y"><?php echo $date->format('Y'); ?></span>
            </span><!-- date -->
          <?php } else { ?>
            <span class="date">
              <span class="d"><?php the_time('j'); ?></span>
              <span class="m"><?php the_time('M'); ?></span>
              <span class="y"><?php the_time('Y'); ?></span>
            </span><!-- date -->
            <?php } ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="title"><?php the_title(); ?></a>
          </li>
        <?php endwhile; endif; ?>
      </ul>
      <a href="<?php echo home_url(); ?>/sobytiya" class="btn btn-green">смотреть все события</a>
    </div><!-- /.widget widget-news widget-href -->
  <?php wp_reset_query(); ?>

  <?php if ( is_active_sidebar('widgetarea1') ) : ?>
    <?php dynamic_sidebar( 'widgetarea1' ); ?>
  <?php else : ?>

  <?php endif; ?>

</aside><!-- /sidebar -->
