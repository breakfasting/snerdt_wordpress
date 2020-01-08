<?php get_header(); ?>
  <div class="blog-main">


    <div class="blog-imgtitle" style="background-image: url(<?php bloginfo('template_url'); ?>/img/header-img_research.png);">
      <div class="container h-100 d-flex align-items-center justify-content-center">
        <div>
          <h1 class="m-0"><?php echo single_term_title( '', false ); ?></h1>
          <h4><?php echo term_description();?></h4>
        </div>
      </div>
    </div>
    <?php if(have_posts()) : ?>
    <div class="blog-post">
      <div class="container">
          <div class="row justify-content-center mt-5 mb-5">
              <div class="col-lg-9">

                <div class="card-columns">
                    <!-- Start of loop -->
                    <?php 
                    while(have_posts()): the_post();
                      if ( has_post_thumbnail() ) {
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                      }
                      else {
                        $url = get_bloginfo('template_directory');
                        $image[0] = "$url/img/placeholder.png";
                      }
                      ?>
                        <div class="card shadow">
                            <img class="card-img-top" src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
                            <div class="card-body">
                                <h4 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <p>
                                  <?php the_excerpt(); ?>
                                </p>
                                <p class="card-text"><small class="text-muted"><?php the_time( get_option( 'date_format' ) ); ?></small></p>
                            </div>
                        </div>
                      <?php
                    endwhile;
                    ?>
                    <!-- End of loop -->
                </div>

              </div>
              <div class="col-lg-2">
                  <h6 class="text-muted">導覽疾病專欄</h6>
                  <div class="list-group">
                      <a href="<?php echo get_site_url(); ?>/research/column/" class="list-group-item list-group-item-action <?php if(is_category(3)) : echo 'lightactive'?><?php endif;?> ">疾病專欄</a>
                      <a href="<?php echo get_site_url(); ?>/research/researches/" class="list-group-item list-group-item-action <?php if(is_category(4)) : echo 'lightactive'?><?php endif;?>">研究分享</a>
                      <a href="<?php echo get_site_url(); ?>/research/videos/" class="list-group-item list-group-item-action <?php if(is_category(5)) : echo 'lightactive'?><?php endif;?>">相關影片</a>
                  </div>

              </div>
          </div>
      </div>


      <?php if( $wp_query->max_num_pages > 1 ) : ?>
        <div class="navigation">
          <?php
            if ( ( ! get_query_var( 'paged' ) && 1 == $wp_query->max_num_pages ) || ( get_query_var( 'paged' ) < $wp_query->max_num_pages ) ) :
          ?>
                    <div class="alignleft"><?php next_posts_link( '&laquo; 前一頁' ); ?></div>
          <?php
            endif;
            if ( get_query_var( 'paged' ) ) :
          ?>
                    <div class="alignright"><?php previous_posts_link( '下一頁 &raquo;' ); ?></div>
          <?php
            endif;
          ?>
        </div>
      <?php endif; ?>

    <?php else : ?>
          <p><?php __('No Page Found'); ?></p>
    <?php endif; ?>
      </div>
    </div><!-- /.blog-main -->
  <?php get_footer(); ?>
