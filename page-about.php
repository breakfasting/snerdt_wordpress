<?php get_header(); ?>

        <div class="blog-main">

          <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                <div class="blog-post-title">
                      <div class="container">
                            <h3 class="mb-0"><?php the_title(); ?></h3>
                      </div>
                </div>
                <div class="blog-post blog-text">
                    <div class="container">
                        <div class="row justify-content-center">
                          <div class="col-lg-10">
                            <?php the_content(); ?>
                            </div>
                      </div>
                    </div><!-- /.blog-post -->
          <?php endwhile; ?>
        <?php else : ?>
          <p><?php __('No Page Found'); ?></p>
        <?php endif; ?>
          </div>
        </div><!-- /.blog-main -->
    <?php get_footer(); ?>
