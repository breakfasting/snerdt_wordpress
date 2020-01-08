<?php get_header(); ?>
<div class="container">
        <div id="carouselnews" class="carousel slide" data-ride="carousel">
            <!-- <ol class="carousel-indicators">
                <li data-target="#carouselnews" data-slide-to="0" class="active"></li>
                <li data-target="#carouselnews" data-slide-to="1"></li>
                <li data-target="#carouselnews" data-slide-to="2"></li>
            </ol> -->
            <div class="carousel-inner">
                <?php 
                    $args = array(
                        'post_type' => 'post',
                        'category_name' => 'focus',
                        'posts_per_page' => 3
                    );

                    $notice_list = new WP_Query( $args );

                    if ( $notice_list->have_posts() ) { 

                        while ( $notice_list->have_posts() ): $notice_list->the_post(); 
                            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                            ?>
                                <div class="carousel-item <?php if ($notice_list->current_post == 0) echo 'active'; ?>">
                                    <a href="<?php the_permalink(); ?>">
                                        <img class="d-block w-100" src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
                                    </a>
                                </div>
                            <?php
                        endwhile; 

                        //* Restore original Post Data
                        wp_reset_postdata();

                    }
                ?>
                <!-- <div class="carousel-item active">
                    <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/2017annual.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/caro1.jpg" alt="Second slide">
                </div> -->
            </div>
            <a class="carousel-control-prev" href="#carouselnews" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
            <a class="carousel-control-next" href="#carouselnews" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
        </div>
    </div>

    <section class="boxes">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <?php 
                        $args = array(
                            'post_type' => 'post',
                            'category_name' => 'event',
                            'posts_per_page' => 3
                        );

                        $notice_list = new WP_Query( $args );

                        if ( $notice_list->have_posts() ) { 

                            while ( $notice_list->have_posts() ): $notice_list->the_post(); 
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                                ?>
                                    <div class="carousel-item <?php if ($notice_list->current_post == 0) echo 'active'; ?>">
                                        <a href="<?php the_permalink(); ?>">
                                            <img class="d-block w-100" src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
                                        </a>
                                    </div>
                                <?php
                            endwhile; 

                            //* Restore original Post Data
                            wp_reset_postdata();

                        }
                        ?>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="notice col-sm-12 col-md-6 col-lg-3">
                    <div class="card text-left h-100">
                        <h5 class="card-header">[會議通知]</h5>
                        <ul class="list-group list-group-flush">
                            <?php 
                            $args = array(
                                'post_type' => 'post',
                                'category_name' => 'notice',
                                'posts_per_page' => 3
                            );

                            $notice_list = new WP_Query( $args );

                            if ( $notice_list->have_posts() ) { 

                                while ( $notice_list->have_posts() ): $notice_list->the_post(); 
                                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                                    ?>
                                        <li class="list-group-item">
                                            <small><?php the_time( get_option( 'date_format' ) ); ?></small><br>
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </li>
                                    <?php
                                endwhile; 

                                //* Restore original Post Data
                                wp_reset_postdata();

                            }?>
                        </ul>
                    </div>
                </div>
                <div class="notice col-sm-12 col-md-6 col-lg-3">
                    <div class="card text-left h-100">
                        <h5 class="card-header ">[公告]</h5>
                        <ul class="list-group list-group-flush">
                        <?php 
                            $args = array(
                                'post_type' => 'post',
                                'category_name' => 'announce',
                                'posts_per_page' => 3
                            );

                            $notice_list = new WP_Query( $args );

                            if ( $notice_list->have_posts() ) { 

                                while ( $notice_list->have_posts() ): $notice_list->the_post(); 
                                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                                    ?>
                                        <li class="list-group-item">
                                            <small><?php the_time( get_option( 'date_format' ) ); ?></small><br>
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </li>
                                    <?php
                                endwhile; 

                                //* Restore original Post Data
                                wp_reset_postdata();
                            }?>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
<?php get_footer(); ?>
