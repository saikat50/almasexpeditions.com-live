<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package TCFTHEME
 */

get_header();
?>
    <div class="banner-text-area-all-trips bg-5 bg-black-transparent-layer mb-50" style="background-image: url(<?php the_field('background_image', get_option('page_for_posts')); ?>)">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-lg-12">
                    <div class="content">
                        <h2 class="banner-head color-yellow">
                            <?php the_field('page_title', get_option('page_for_posts')); ?>
                        </h2>
                        <h3 class="banner-head-2 text-white mt-15"><?php the_field('page_sub_title',get_option('page_for_posts')); ?> </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="primary" class="content-area">
        <main id="main" class="site-main pb-50">

            <div class="container">
                <div class="row">
                    <div class="col-md-8">

                        <?php
                        while ( have_posts() ) :
                            the_post();

                            include(TEMPLATEPATH . '/template-parts/content-single.php');


                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;

                        endwhile; // End of the loop.
                        ?>

                    </div>
                    <div class="col-md-4">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php

get_footer();

