<?php
/**
 Template Name: Home Page
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

            <div class="banner">

                <div class="video-container">
                    <div class="color-overlay">
                        <div class="explore-img">
                            <img class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/explore-outline-3.png" alt="">
                        </div>
                        <h3 class="text-explore">IT’S TIME TO</h3>
                    </div>
                    <video controls poster="<?php bloginfo('stylesheet_directory'); ?>/assets/images/default-banner.jpg" autoplay loop muted>
                        <source src="<?php bloginfo('stylesheet_directory'); ?>/assets/video/video.mp4" type="video/mp4">
                    </video>
                </div>

            </div>
            <!-- Search Form End -->


          <?php include(TEMPLATEPATH . '/template-parts/shared/find-tour.php') ?>

            <!-- Most popular tours Start -->
            <section class="popular-places p-5 pl-0 pr-0">
                <div class="container">
                    <h2 class="text-center header-text-1"><?php if(get_field('m_heading')) the_field('m_heading'); ?></h2>
                    <h3 class="text-center header-text-2"><?php if(get_field('m_sub_heading')) the_field('m_sub_heading'); ?></h3>

                    <!-- tours places -->
                    <div class="next-tour mt-50">
                        <div class="row">

                            <?php

                            $args = array(
                                'post_type' => 'tour',
                                'post_status' => 'publish',
                                'posts_per_page'=>12,
                                'order'=>'DESC',
                                'orderby'=>'ID',
                            );

                            ?>
                            <?php $loop = new WP_Query($args); ?>

                            <?php if($loop->have_posts()){?>

                                <?php while($loop->have_posts()) : $loop->the_post(); ?>
                                    <div class="col-md-4 col-lg-4 col-sm-4 pb-30">
                                        <a href="<?php echo get_permalink(); ?>">
                                            <div class="place-card">
                                                <div class="img-text-holder">
                                                    <img src="<?php $image = get_field('thumbnail _image'); echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                                    <div class="img-text">
                                                        <p><?php the_field('title'); ?></p>
                                                    </div>
                                                </div>
                                                <ul class="place-detail">
                                                    <li><p class="time"><?php the_field('d_duration'); ?> Days</p></li>
                                                    <li><p class="price">Starting From $<?php the_field('price'); ?> per person</p></li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                <?php endwhile; ?>
                                <?php wp_reset_query(); ?>


                            <?php } ?>


                    </div>

                </div>
            </section>



            <section class="expeditions p-5 pl-0 pr-0">
                <div class="container">
                    <h2 class="text-center header-text-1"><?php if(get_field('step_heading')) the_field('step_heading'); ?></h2>
                    <h3 class="text-center header-text-2 mt-10"><?php if(get_field('step_sub_head')) the_field('step_sub_head'); ?></h3>
                    <p class="text-center mt-20"><button class="bg-color-yellow customize-btn customize-btn-sm toggle-sidebar">Customize it now</button></p>

                    <div class="steps">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-lg-4">
                                <div class="img-container">
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/post.jpg" alt="">
                                    <div class="step-img">
                                        <p>1</p>
                                    </div>
                                </div>
                                <div class="step-text">
                                    <h4><?php if(get_field('step_1_title')) the_field('step_1_title'); ?></h4>
                                    <p><?php if(get_field('step_1_des')) the_field('step_1_des'); ?></p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-lg-4 pt-60">
                                <div class="img-container img-container-m">
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/Group%20124.jpg" alt="">
                                    <div class="step-img">
                                        <p>2</p>
                                    </div>
                                </div>
                                <div class="step-text">
                                    <h4><?php if(get_field('step_2_title')) the_field('step_2_title'); ?></h4>
                                    <p><?php if(get_field('step_2_des')) the_field('step_2_des'); ?></p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-lg-4 mob-pt-20">
                                <div class="img-container img-container-l">
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/Mask%20Group%204.jpg" alt="">
                                    <div class="step-img">
                                        <p>3</p>
                                    </div>
                                </div>
                                <div class="step-text">
                                   <h4><?php if(get_field('step_3_title')) the_field('step_3_title'); ?></h4>
                                    <p><?php if(get_field('step_3_des')) the_field('step_3_des'); ?></p>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </section>



            <section class="recent-p bg-black p-5 pl-0 pr-0 pb-50">
                <div class="container">
                    <h4 class="header-text-1 text-white post-header"><?php if(get_field('r_heading')) the_field('r_heading'); ?></h4>
                    <p class="regular-text-1 mt-38 max-w-350"><?php if(get_field('r_sub_heading')) the_field('r_sub_heading'); ?></p>
                    <div class="row mt-80">

                        <?php

                        $args = array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'posts_per_page'=>3,
                            'order'=>'DESC',
                            'orderby'=>'ID',
                        );

                        ?>

                        <?php $loop = new WP_Query($args); ?>

                        <?php if($loop->have_posts()){?>

                            <?php while($loop->have_posts()) : $loop->the_post(); ?>
                                <div class="col-md-4 col-sm-4 col-lg-4 pb-30">
                                    <div class="posts">
                                        <div class="post-img">
                                            <a href="<?php echo get_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></a>
                                        </div>
                                        <h4 class="mt-20"><a class="post-hedline" href="<?php echo get_permalink(); ?>"><?php $title = get_the_title();  echo myTruncate($title,10); ?></a></h4>
                                        <p><?php $content = get_the_content(); echo myTruncate($content,20); ?></p>
                                        <a href="<?php echo get_permalink(); ?>" class="read-more-btn">Read More...</a>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                            <?php wp_reset_query(); ?>


                        <?php } ?>


                    </div>
                </div>
            </section>

 

            <section class="testimonial p-5 pl-0 pr-0 bg-color-yellow">
                <div class="container">
                    <h4 class="testti-head"><?php if(get_field('title')){ the_field('title'); } ?></h4>
                    
                    
                    <div class="regular slider">
                    
                  <?php

                    // check if the repeater field has rows of data
                    if( have_rows('testimonial') ):

                        // loop through the rows of data
                        while ( have_rows('testimonial') ) : the_row(); ?>

                            <div>
                              <div class="people-text">
                                        <p><?php the_sub_field('message'); ?></p>
                                    </div>
                                    <ul class="people-details mt-30">
                                        <li>
                                            <div class="people-img">
                                                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/people.png" alt="">
                                            </div>
                                        </li>
                                        <li>
                                            <h5><?php the_sub_field('name'); ?></h5>
                                            <p><?php the_sub_field('title'); ?><br>
                                               <?php the_sub_field('short_name'); ?></p>
                                        </li>
                                    </ul>
                            </div>
                            

                        <?php endwhile;

                    else :

                        // no rows found

                    endif;

                    ?>
                  
        
                  </div>

                </div>
            </section>


        </main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
