<?php get_header(); ?>
	<div class="blog-imgtitle" style="background-image: url(<?php bloginfo('template_url'); ?>/img/header-img_02.png);">
        <div class="container h-100 d-flex align-items-center justify-content-center">
            <div>
                <h1 class="m-0">相關連結</h1>
                <h4>Links</h4>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-9"> <!--Div of left content-->
                
                <div> <!--Government-->
                    <a id="Government"></a>
                    <h3 class="text-center">政府機關</h3>
                    <hr/>
                    <div class="row justify-content-center mb-4">

                        <?php 
                        $args = array(
                        	'post_type' => 'links',
                        	'linkcategory' => 'government',
                        	'posts_per_page' => -1
                        );

                        $government_links = new WP_Query( $args );

                        if ( $government_links->have_posts() ) { 

						    while ( $government_links->have_posts() ): $government_links->the_post(); 
						    	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );?>

		                        <div class="col-md-5 col-10 linkcard"> 
		                            <div class="card shadow justify-content-center h-100">
		                                <a class="cardbg h-100 d-flex align-items-center" style="background-image: linear-gradient(to bottom, rgba(255,255,255,0.9) 0%,rgba(255,255,255,0.7) 100%), url('<?php echo $image[0]; ?>');" href="<?php echo esc_html( get_post_meta( $post->ID, 'directlink' , true)); ?>">
		                                    <h5 class="font-weight-bold w-100 text-center"><?php echo esc_html( get_post_meta( $post->ID, 'linktitle1' , true)); ?><br><?php echo esc_html( get_post_meta( $post->ID, 'linktitle2' , true)); ?></h5>
		                                </a> 
		                            </div>
		                        </div>  <?php

						    endwhile; 

						    //* Restore original Post Data
						    wp_reset_postdata();

						}?>
                        
                    </div>
                </div>
                
                <div> <!--Medical-->
                    <a id="Medical"></a>
                    <h3 class="text-center">醫療機構</h3>
                    <hr/>
                    <div class="row justify-content-center mb-4">
                        
                        <?php 
                        $args = array(
                        	'post_type' => 'links',
                        	'linkcategory' => 'medical',
                        	'posts_per_page' => -1
                        );

                        $medical_links = new WP_Query( $args );

                        if ( $medical_links->have_posts() ) { 

						    while ( $medical_links->have_posts() ): $medical_links->the_post(); 
						    	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );?>

		                        <div class="col-md-5 col-10 linkcard"> 
		                            <div class="card shadow justify-content-center h-100">
		                                <a class="cardbg h-100 d-flex align-items-center" style="background-image: linear-gradient(to bottom, rgba(255,255,255,0.9) 0%,rgba(255,255,255,0.7) 100%), url('<?php echo $image[0]; ?>');" href="<?php echo esc_html( get_post_meta( $post->ID, 'directlink' , true)); ?>">
		                                    <h5 class="font-weight-bold w-100 text-center"><?php echo esc_html( get_post_meta( $post->ID, 'linktitle1' , true)); ?><br><?php echo esc_html( get_post_meta( $post->ID, 'linktitle2' , true)); ?></h5>
		                                </a> 
		                            </div>
		                        </div>  <?php

						    endwhile; 

						    //* Restore original Post Data
						    wp_reset_postdata();

						}?>
                        
                    </div>
                </div>
                
                <div> <!--Research-->
                    <a id="Research"></a>
                    <h3 class="text-center">研究單位</h3>
                    <hr/>
                    <div class="row justify-content-center mb-4">
                        
                        <?php 
                        $args = array(
                        	'post_type' => 'links',
                        	'linkcategory' => 'research',
                        	'posts_per_page' => -1
                        );

                        $research_links = new WP_Query( $args );

                        if ( $research_links->have_posts() ) { 

						    while ( $research_links->have_posts() ): $research_links->the_post(); 
						    	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );?>

		                        <div class="col-md-5 col-10 linkcard"> 
		                            <div class="card shadow justify-content-center h-100">
		                                <a class="cardbg h-100 d-flex align-items-center" style="background-image: linear-gradient(to bottom, rgba(255,255,255,0.9) 0%,rgba(255,255,255,0.7) 100%), url('<?php echo $image[0]; ?>');" href="<?php echo esc_html( get_post_meta( $post->ID, 'directlink' , true)); ?>">
		                                    <h5 class="font-weight-bold w-100 text-center"><?php echo esc_html( get_post_meta( $post->ID, 'linktitle1' , true)); ?><br><?php echo esc_html( get_post_meta( $post->ID, 'linktitle2' , true)); ?></h5>
		                                </a> 
		                            </div>
		                        </div>  <?php

						    endwhile; 

						    //* Restore original Post Data
						    wp_reset_postdata();

						}?>
                        
                    </div>
                </div>

                <div> <!--Groups-->
                    <a id="Groups"></a>
                    <h3 class="text-center">病友團體</h3>
                    <hr/>
                    <div class="row justify-content-center mb-4">
                        
                        <?php 
                        $args = array(
                        	'post_type' => 'links',
                        	'linkcategory' => 'groups',
                        	'posts_per_page' => -1
                        );

                        $groups_links = new WP_Query( $args );

                        if ( $groups_links->have_posts() ) { 

						    while ( $groups_links->have_posts() ): $groups_links->the_post(); 
						    	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );?>

		                        <div class="col-md-5 col-10 linkcard"> 
		                            <div class="card shadow justify-content-center h-100">
		                                <a class="cardbg h-100 d-flex align-items-center" style="background-image: linear-gradient(to bottom, rgba(255,255,255,0.9) 0%,rgba(255,255,255,0.7) 100%), url('<?php echo $image[0]; ?>');" href="<?php echo esc_html( get_post_meta( $post->ID, 'directlink' , true)); ?>">
		                                    <h5 class="font-weight-bold w-100 text-center"><?php echo esc_html( get_post_meta( $post->ID, 'linktitle1' , true)); ?><br><?php echo esc_html( get_post_meta( $post->ID, 'linktitle2' , true)); ?></h5>
		                                </a> 
		                            </div>
		                        </div>  <?php

						    endwhile; 

						    //* Restore original Post Data
						    wp_reset_postdata();

						}?>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <h6 class="text-muted">導覽相關連結</h6>
                <div class="list-group mb-5">
                    <a href="#Government" class="list-group-item list-group-item-action">政府機關</a>
                    <a href="#Medical" class="list-group-item list-group-item-action">醫療機構</a>
                    <a href="#Research" class="list-group-item list-group-item-action">研究單位</a>
                    <a href="#Groups" class="list-group-item list-group-item-action">病友團體</a>
                </div>

            </div>
        </div>
    </div>
<?php get_footer(); ?>