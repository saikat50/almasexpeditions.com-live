<?php
/**
Template Name: Destination Page
 */

get_header();
?>

    <div class="banner-text-area-all-trips bg-5 bg-black-transparent-layer" style="background-image: url(<?php if(get_field('background_image')) the_field('background_image'); ?>);">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-lg-12">
                    <div class="content">
                        <h2 class="banner-head color-yellow"><?php if(get_field('page_title')) the_field('page_title'); ?></h2>
                        <h3 class="banner-head-2 text-white mt-15"><?php if(get_field('page_sub_title')) the_field('page_sub_title'); ?></h3>
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
                    <h3 class="about-us-head color-head-balck"><?php if(get_field('d_list_heading')) the_field('tour_list_heading'); ?></h3>
                </div>
            </div>

            <div class="next-tour mt-50 destination-tour">
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-4 pb-30">
                        <a href="">
                            <div class="place-card">
                                <div class="img-text-holder">
                                    <img src="<?php $image = get_field('image'); echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                    <div class="img-text">
                                        <p><?php if(get_field('name')) the_field('name'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-4 pb-30">
                        <a href="">
                            <div class="place-card">
                                <div class="img-text-holder">
                                    <img src="<?php $image2 = get_field('g_image'); echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>">
                                    <div class="img-text">
                                        <p><?php if(get_field('g_name')) the_field('g_name'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-4 pb-30">
                        <a href="">
                            <div class="place-card">
                                <div class="img-text-holder">
                                    <img src="<?php $image3 = get_field('b_image'); echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>">
                                    <div class="img-text">
                                        <p><?php if(get_field('b_name')) the_field('b_name'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>


        </div>
    </section>





<?php

get_footer();
