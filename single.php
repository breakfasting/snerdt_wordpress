<?php get_header(); ?>
  <div class="blog-main">
  <?php
  if(have_posts()) :
    while(have_posts()) :
      the_post();
  ?>
    <div class="blog-post-title">
      <div class="container">
        <h3 class="mb-0"><?php the_title(); ?> | <span class="disease"><?php echo get_the_date(); ?></span></h3>
      </div>
    </div>

    <div class="blog-post">
      <div class="container">
                  <?php the_content(); ?>
      </div><!-- /.blog-post -->
          <?php endwhile; ?>
        <?php else : ?>
          <p><?php __('No Page Found'); ?></p>
        <?php endif; ?>
      </div>
    </div><!-- /.blog-main -->
  <?php get_footer(); ?>
