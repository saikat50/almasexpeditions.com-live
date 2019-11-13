<?php
/**
Template Name: About Us Page
 */

get_header();
?>
    <div class="banner-text-area bg-5 bg-black-transparent-layer" style="background-image: url(<?php if(get_field('banner_background')) the_field('banner_background'); ?>);">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-lg-12">
                    <div class="content">
                        <h2 class="banner-head color-yellow"><?php if(get_field('banner_heading')) the_field('banner_heading'); ?></h2>
                        <h3 class="banner-head-2 text-white max-w-450 mt-15"><?php if(get_field('b_sub_heading')) the_field('b_sub_heading'); ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Form End -->


    <section class="about-section p-5 pr-0 pl-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="about-us-head color-head-balck"><?php if(get_field('top_heading')) the_field('top_heading'); ?></h3>
                    <p class="about-us-head-2 color-gray mt-20"><?php if(get_field('top_description')) the_field('top_description'); ?></p>
                </div>
            </div>
            <div class="row mt-30">
                <div class="col-md-6 col-sm-6 col-lg-6">
                    <img class="img-fluid" src="<?php if(get_field('left_comtent_picture')) {$image = get_field('left_comtent_picture'); echo $image['url']; } ?>" alt="About Us">
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6">
                    <h3 class="about-us-head color-head-balck mt-30"><?php if(get_field('right_heading')) the_field('right_heading'); ?></h3>
                    <p class="about-us-head-2 color-gray mt-20"><?php if(get_field('right_content_description')) the_field('right_content_description'); ?></p>
                </div>

            </div>

            <div class="row mt-50">
                <div class="col-md-12">
                    <h3 class="about-us-head color-head-balck"><?php if(get_field('our_g_heading')) the_field('our_g_heading'); ?></h3>
                    <p class="about-us-head-2 color-gray mt-20"><?php if(get_field('our_g_sub_heading')) the_field('our_g_sub_heading'); ?></p>
                </div>
            </div>

            <div class="row mt-30">

                <?php

                if( have_rows('guides_man') ):

                    while ( have_rows('guides_man') ) : the_row(); ?>

                        <div class="col-md-5">
                            <img class="img-fluid" src="<?php $img1 = the_sub_field('image'); echo $img1; ?>" alt="<?php the_sub_field('name'); ?>">
                            <p class="person-name color-gray mt-40 mob-mb-30 mob-mt-20"><?php the_sub_field('name'); ?></p>
                        </div>
                        <div class="col-md-1"></div>

                    <?php

                    endwhile;

                else :

                endif;

                ?>

            </div>

        </div>
    </section>

    <?php include(TEMPLATEPATH . '/template-parts/shared/find-tour.php') ?>

<?php

get_footer();
