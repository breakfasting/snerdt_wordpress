<?php get_header(); ?>
  <div class="blog-main">
  <?php if(have_posts()) : ?>
    <div class="blog-post-title">
      <div class="container">
        <h3 class="mb-0">最新消息 | <span class="disease"><?php
          if ( is_category() ) {
            echo single_cat_title( '', false );
          } elseif ( is_tag() ) {
            echo '標籤「' . single_tag_title( '', false ) . '」的文章清單';
          } elseif ( is_day() ) {
            echo '「' . get_the_date( 'Y年n月j日' ) . '」的文章清單';
          } elseif ( is_month() ) {
            echo '「' . get_the_date( 'Y年n月' ) . '」的文章清單';
          } elseif ( is_year() ) {
            echo '「' . get_the_date( 'Y年' ) . '」的文章清單';
          } elseif ( is_tax() ) {
            echo '「' . single_term_title( '', false ) . '」的清單';
          } elseif ( is_search() ) {
            echo '「' . get_search_query() . '」的搜尋結果清單';
          } else {
            echo 'Blog';
          }
        ?></span></h3>
      </div>
    </div>

    <div class="blog-post">
      <div class="container">
          <div class="row justify-content-center mt-5">
              <div class="col-lg-9">
                <?php while(have_posts()) :
                    the_post();

                    if ( has_post_thumbnail() ) {
                      $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                    }
                    else {
                      $url = get_bloginfo('template_directory');
                      $image[0] = "$url/img/placeholder.png";
                    }
                ?>

                  <div class="card shadow news">
                      <div class="row no-gutters">
                          <div class="col-md-4">
                              <div class="card-img-bottom" style="background: url(<?php echo $image[0]; ?>) center no-repeat; background-size: auto 100%;">
                              </div>
                          </div>
                          <div class="col-md-8">
                              <div class="card-body">
                                  <h4 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                  <p class="card-text"><?php the_excerpt(); ?></p>

                                  <div class="d-flex justify-content-end">
                                      <small class="text-muted mt-2"><?php the_time( get_option( 'date_format' ) ); ?></small>
                                      <a href="<?php the_permalink(); ?>" class="btn btn-primary ml-auto">Read More</a>
                                  </div>
                              </div>
                          </div>
                      </div>

                  </div>
                      <?php endwhile; ?>
              </div>
              <div class="col-lg-2">
                  <h6 class="text-muted">導覽最新消息</h6>
                  <div class="list-group">
                      <a href="<?php echo get_site_url(); ?>/category/focus" class="list-group-item list-group-item-action <?php if(is_category('focus')) : echo 'lightactive'?><?php endif;?> ">焦點活動</a>
                      <a href="<?php echo get_site_url(); ?>/category/event" class="list-group-item list-group-item-action <?php if(is_category('event')) : echo 'lightactive'?><?php endif;?>">活動</a>
                      <a href="<?php echo get_site_url(); ?>/category/announce" class="list-group-item list-group-item-action <?php if(is_category('announce')) : echo 'lightactive'?><?php endif;?>">公告</a>
                      <a href="<?php echo get_site_url(); ?>/category/notice" class="list-group-item list-group-item-action <?php if(is_category('notice')) : echo 'lightactive'?><?php endif;?>">會議通知</a>
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
