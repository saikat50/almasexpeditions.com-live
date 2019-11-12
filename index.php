<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
		<main id="main" class="site-main">

           <div class="container">
               <div class="row">
                   <div class="col-md-8">
                       <?php
                       if ( have_posts() ) :

                           /* Start the Loop */
                           while ( have_posts() ) :
                               the_post();

                               /*
                                * Include the Post-Type-specific template for the content.
                                * If you want to override this in a child theme, then include a file
                                * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                                */
                               get_template_part( 'template-parts/content', get_post_type() );

                           endwhile;

                           the_posts_navigation();

                       else :

                           get_template_part( 'template-parts/content', 'none' );

                       endif;
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
