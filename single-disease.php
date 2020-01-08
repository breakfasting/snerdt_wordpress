<?php get_header(); ?>
  <div class="blog-main">
  <?php
  if(have_posts()) :
    while(have_posts()) :
      the_post();
  ?>
    <div class="blog-post-title">
      <div class="container">
        <h3 class="mb-0">疾病專欄 | <span class="disease"><?php the_title(); ?></span></h3>
      </div>
    </div>

    <div class="blog-post">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-lg-8">
                    <h1 class="diseaseh1"><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </div>
                <div class="col-lg-3">
                    <h6 class="text-muted">關於作者</h6>
                    <div class="card align-items-center shadow">
                        <img width="120px" height="120px" src="<?php echo wp_get_attachment_image_src( get_post_meta( $post->ID, 'snapshot' , true))[0]; ?>" alt="..." class="m-3 ml-4 rounded-circle">
                        <div class="card-body">
                            <h3 class="mb-0">
                                <a class="text-dark" href="#"><?php echo esc_html( get_post_meta( $post->ID, 'name' , true)); ?></a>
                            </h3>
                            <div class="mb-2 text-muted"><?php echo esc_html( get_post_meta( $post->ID, 'title-snerd' , true)); ?></div>
                            <p class="card-text mb-1"><?php echo esc_html( get_post_meta( $post->ID, 'title' , true)); ?></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
          <?php endwhile; ?>
        <?php else : ?>
          <p><?php __('No Page Found'); ?></p>
        <?php endif; ?>
      </div>
    </div><!-- /.blog-main -->
  <?php get_footer(); ?>
