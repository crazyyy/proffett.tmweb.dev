<?php if( have_rows('home_page_slider', 22) ): ?>
  <div class="home-slider">
    <div class="home-owl-carousel">
      <?php while ( have_rows('home_page_slider', 22) ) : the_row(); ?>
        <div>
          <?php $image = get_sub_field('slide_image'); if( !empty($image) ): ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          <?php endif; ?>
          <h5><?php the_sub_field('slide_title'); ?></h5>
        </div><!-- slider-item -->
      <?php endwhile; ?>
    </div><!-- home-owl-carousel -->
  </div><!-- home-slider -->
  <div class="home-slider-bg"></div>
  <ul class="carousel-custom-dots owl-dots"></ul>
<?php endif; ?>
