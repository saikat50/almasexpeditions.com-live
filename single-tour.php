<?php
/*
 Template Name: Tour Page
 */

get_header();
?>

    <script type="text/javascript">
        window.jssor_1_slider_init = function() {

            var jssor_1_options = {
                $AutoPlay: 1,
                $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$
                }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 770;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
<div class="banner-text-area-single-page bg-5 bg-black-transparent-layer" style="background-image: url(<?php $bg_image = get_field('thumbnail _image'); echo $bg_image['url'];  ?>);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 col-lg-12">
                            <div class="content">
                                <h2 class="banner-head color-yellow"><?php if(get_field('title')) the_field('title') ;?></h2>
                                <h3 class="banner-head-2 text-white mt-15"><?php if(get_field('sub_title')) the_field('sub_title') ;?></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Search Form End -->


            <section class="tour-details p-5 pl-0 pr-0">


                <!-- ##################### ONLY DISPLAY FOR MOBILE VERSION ######################### -->

                <div class="col-md-4 relative-sidebar mob-display">
                    <div class="position-sidebar">
                        <div id="mob-side-bar-2">
                            <div class="sidebar__inner">
                                <div class="clearfix"></div>
                                <div class="sidebar-inner-content">
                                    <div class="clearfix"></div>
                                    <p class="roboto-black color-head-balck">Price</p>
                                    <p class="tag-price"><i class="far fa-tag"></i><span class="s-text">From</span><span class="price-one roboto-black color-head-balck">$<?php if(get_field('price')) the_field('price'); ?></span></p>
                                    <p class="book-availability color-gray">Click to see pricing and availability</p>
                                    <button type="button" class="btn bg-color-yellow btn-block mt-15"><a href="" class="btn-block color-head-balck book-btn">BOOK NOW</a></button>
                                    <p class="booking-note book-availability color-gray mt-60">The initial price based on 1 adult with
                                        the lowest price in low season</p>
                                </div>


                                <div id="sidebar-3" class="mt-70">
                                    <div class="tourmaster-tour-booking-bar-widget  traveltour-sidebar-area"><div id="text-11" class="widget widget_text traveltour-widget">			<div class="textwidget"><span class="gdlr-core-space-shortcode" style="margin-top: -20px ;"></span>
                                        <div class="gdlr-core-widget-list-shortcode" id="gdlr-core-widget-list-0"><h3 class="gdlr-core-widget-list-shortcode-title">Why Book With Us?</h3>
                                            <ul>
                                                <li><i class="fa fa-dollar" style="font-size: 15px ;color: #ffa127 ;margin-right: 13px ;"></i>Book online hassle-free</li>
                                                <li><i class="fa fa-headphones" style="font-size: 15px ;color: #ffa127 ;margin-right: 10px ;"></i>Customer service available 24/7</li>
                                                <li><i class="fa fa-star" style="font-size: 15px ;color: #ffa127 ;margin-right: 10px ;"></i>Hand-picked Tours &amp; Activities</li>
                                                <li><i class="fa fa-support" style="font-size: 15px ;color: #ffa127 ;margin-right: 10px ;"></i>Best price online guaranteed</li>
                                            </ul>
                                        </div></div>
                                    </div>
                                    </div>
                                </div>

                                <div id="sidebar-4">
                                    <h4 class="destination-contact-h color-head-balck">TALK WITH A DESTINATION EXPERT</h4>
                                    <h5>We tailor itineraries to your dates and interests, adjusting hotels, excursions and length as desired.
                                    </h5>
                                    <div class="contact-by-voice">
                                        <ul>
                                            <li>
                                                <p class="rotate-3"><i class="fas fa-phone-alt"></i></p>
                                                <p class="icon-text">Call</p>
                                            </li>
                                            <li>
                                                <p><i class="fas fa-envelope"></i></p>
                                                <p class="icon-text">Email</p>
                                            </li>
                                            <li>
                                                <p><i class="fas fa-comment-lines"></i></p>
                                                <p class="icon-text">Chat</p>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>


                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>

                </div>

                <!-- ##################### ENDED ONLY DISPLAY FOR MOBILE VERSION ######################### -->



                <div class="tour-menu">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <ul class="tour-menu">
                                    <li><a class="scroll" href="#section1" data-offset="170">Overview</a></li>
                                    <li><a class="scroll" href="#section2" data-offset="170">Photos</a></li>
                                    <li><a class="scroll" href="#section3" data-offset="170">Itinerary</a></li>
                                    <li><a class="scroll" href="#section4" data-offset="170">Map</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tour-content mt-28">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="tour-features">
                                    <ul class="features">
                                        <li><i class="far fa-clock"></i> <span><?php if(get_field('d_duration')) the_field('d_duration'); ?> Days <?php if(get_field('n_duration')) { echo the_field('n_duration') ." "."Nights";} ?></span></li>
                                        <li><i class="far fa-calendar-alt"></i> <span>Availability: <?php if(get_field('availability')) the_field('availability'); ?></span></li>
                                        <li><i class="far fa-plane-departure"></i> <span> <?php if(get_field('departs_from')) the_field('departs_from'); ?></span></li>
                                        <li><i class="fas fa-plane-arrival"></i> <span><?php if(get_field('arrival_to')) the_field('arrival_to'); ?></span></li>
                                        <li><i class="fas fa-user"></i> <span><?php if(get_field('min_age')) the_field('min_age'); ?></span></li>
                                        <li><i class="fas fa-users"></i> <span><?php if(get_field('max_people')) the_field('max_people'); ?></span></li>

                                    </ul>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="tour-overview" id="section1">
                                    <h3 class="tour-head color-head-balck mt-30">Tour Overview</h3>
                                    <p class="tour-regular color-gray mt-15">
                                        <?php if(get_field('overview')) the_field('overview'); ?>
                                       </p>
                                </div>

                                <div class="tour-overview-details mt-30">
                                    <ul class="tour-overview-topic">
                                        <!--******************* LIST START *******************-->

                                        <?php
                                        if( have_rows('overview_feature') ):
                                            while ( have_rows('overview_feature') ) : the_row(); ?>
                                                <li>
                                                    <ul class="tour-topic">
                                                        <!-- Heading Left-->
                                                        <li class="tour-topic-li"><span class="topic-head"><?php the_sub_field('title'); ?></span><span class="sub-topic-head"><?php the_sub_field('sub_title'); ?></span></li>
                                                        <!-- Details Right -->
                                                        <li class="tour-topic-li">


                                                            <?php
                                                            if( have_rows('details') ):
                                                                while ( have_rows('details') ) : the_row() ?>
                                                                    <ul class="features">
                                                                            <li class="features-li">
                                                                                <!-- for bold text with check -->
                                                                                <ul class="features-details">
                                                                                    <li class="features-details-li i-list">
                                                                                        <?php if(get_sub_field('bold_icon') != 3){
                                                                                            if(get_sub_field('bold_icon') == 1){?>
                                                                                                <i class="fas fa-check"></i>
                                                                                            <?php }else if(get_sub_field('bold_icon') == 2){?>
                                                                                                <i class="fas fa-times"></i>
                                                                                            <?php }
                                                                                        }else{
                                                                                            if(get_sub_field('normal_icon') == 1){?>
                                                                                                <i class="fas fa-check"></i>
                                                                                            <?php }else if(get_sub_field('normal_icon') == 2){?>
                                                                                                <i class="fas fa-times"></i>
                                                                                            <?php }

                                                                                        } ?>

                                                                                    </li>
                                                                                    <li class="features-details-li">

                                                                                        <?php if(!empty(get_sub_field('bold_text'))){?>
                                                                                            <span class="bold-text"><?php the_sub_field('bold_text'); ?></span>
                                                                                        <?php } ?>
                                                                                        <?php if(!empty(get_sub_field('normal_text'))){?>
                                                                                            <span class="normal-text"><?php the_sub_field('normal_text'); ?></span>
                                                                                        <?php } ?>

                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </li>
                                                                    </ul>
                                                                <?php endwhile;
                                                            else :
                                                            endif;
                                                            ?>


                                                        </li>

                                                    </ul>
                                                </li>

                                            <?php endwhile;
                                        else :
                                        endif;
                                        ?>




                                    </ul>
                                </div>

                                <div class="clearfix"></div>

                                <!--######################## what to expect ###########################-->
                                <div class="expectations">
                                    <ul>
                                        <li><i class="far fa-thumbs-up"></i></li>
                                        <li><h4 class="menu-des-head">What to Expect</h4>

                                            <?php
                                                if(have_rows('expectations')){
                                                    while(have_rows('expectations')) : the_row() ?>
                                                        <ul class="features-details">
                                                            <li class="features-details-li i-list"><i class="fas fa-check"></i></li>
                                                            <li class="features-details-li"><span class="normal-text color-gray"><?php the_sub_field('list'); ?></span> </li>
                                                        </ul>
                                                    <?php endwhile;
                                                }
                                            ?>

                                        </li>
                                    </ul>
                                </div>

                                <div class="clearfix"></div>

                                <!--######################## Itinerary ###########################-->
                                <div class="expectations itinerary" id="section3">
                                    <ul>
                                        <li><i class="far fa-bus"></i></li>
                                        <li><h4 class="menu-des-head">Itinerary</h4>
                                            <div class="accordion mt-20" id="accordionExample">

                                                <?php

                                                 $count = 0;

                                                    if(have_rows('itinerary')){
                                                        while(have_rows('itinerary')) : the_row(); $count++; ?>

                                                            <div class="card">
                                                                <div class="card-header" id="headingOne<?php echo $count; ?>">
                                                                    <h2 class="mb-0">
                                                                        <a data-toggle="collapse" data-target="#collapseOne<?php echo $count; ?>"><i class="fa fa-plus"></i><span><?php the_sub_field('heading'); ?></span></a>
                                                                    </h2>
                                                                </div>
                                                                <div id="collapseOne<?php echo $count; ?>" class="collapse" aria-labelledby="headingOne<?php echo $count; ?>" data-parent="#accordionExample">
                                                                    <div class="card-body">
                                                                        <p><?php the_sub_field('description'); ?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endwhile;
                                                    }
                                                ?>

                                            </div>

                                        </li>
                                    </ul>
                                </div>


                                <div class="clearfix"></div>
                                <!--######################## Photos ###########################-->
                                <div class="expectations Photos mt-30" id="section2">
                                    <ul>
                                        <li><i class="far fa-images"></i></li>
                                        <li><h4 class="menu-des-head">Photos</h4></li>
                                    </ul>

                                    <div class="clearfix"></div>
                                    <!-- photo slider -->
                                    <div class="slider-photo pt-30">
                                        <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:770px;height:490px;overflow:hidden;visibility:hidden;">
                                            <!-- Loading Screen -->
                                            <div data-u="loading" class="jssorl-004-double-tail-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                                                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/slider/double-tail-spin.svg" />
                                            </div>
                                            <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:770px;height:490px;overflow:hidden;">

                                                <?php
                                                    $first_img = true;
                                                    while($first_img && has_sub_field('photos')): ?>

                                                        <div>
                                                            <img data-u="image" src="<?php $image = get_sub_field('photo'); echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                                        </div>
                                                        <?php $first_img = true; ?>

                                                    <?php endwhile; ?>


                                            </div>
                                            <!-- Bullet Navigator -->
                                            <!-- Bullet Navigator -->
                                            <div data-u="navigator" class="jssorb031" style="position:absolute;bottom:-40px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                                                <div data-u="prototype" class="i" style="width:16px;height:16px;">
                                                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                                        <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- #endregion photo Slider End -->
                                </div>


                                <div class="row"></div>
                                <!--######################## MAP ###########################-->
                                <div class="expectations Photos mt-40" id="section4">
                                    <ul>
                                        <li><i class="far fa-map"></i></li>
                                        <li><h4 class="menu-des-head">Map</h4></li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                                <div class="single-page-map mt-30">
                                    <?php if(get_field('map')) the_field('map'); ?>
                                </div>

                            </div>

                            <div class="col-md-4 relative-sidebar desk-display">
                                <div class="position-sidebar">
                                    <div id="sidebar-2">
                                        <div class="sidebar__inner">
                                            <div class="clearfix"></div>
                                            <div class="sidebar-inner-content">
                                                <div class="clearfix"></div>
                                                <p class="roboto-black color-head-balck">Price</p>
                                                <p class="tag-price"><i class="far fa-tag"></i><span class="s-text">From</span><span class="price-one roboto-black color-head-balck">$<?php if(get_field('price')) the_field('price'); ?></span></p>
                                                <p class="book-availability color-gray">Click to see pricing and availability</p>
                                                <button type="button" class="btn bg-color-yellow btn-block mt-15"><a href="" class="btn-block color-head-balck book-btn">BOOK NOW</a></button>
                                                <p class="booking-note book-availability color-gray mt-60">The initial price based on 1 adult with
                                                    the lowest price in low season</p>
                                            </div>


                                            <div id="sidebar-3" class="mt-70">
                                                <div class="tourmaster-tour-booking-bar-widget  traveltour-sidebar-area"><div id="text-11" class="widget widget_text traveltour-widget">			<div class="textwidget"><span class="gdlr-core-space-shortcode" style="margin-top: -20px ;"></span>
                                                    <div class="gdlr-core-widget-list-shortcode" id="gdlr-core-widget-list-0"><h3 class="gdlr-core-widget-list-shortcode-title">Why Book With Us?</h3>
                                                        <ul>
                                                            <li><i class="fa fa-dollar" style="font-size: 15px ;color: #ffa127 ;margin-right: 13px ;"></i>Book online hassle-free</li>
                                                            <li><i class="fa fa-headphones" style="font-size: 15px ;color: #ffa127 ;margin-right: 10px ;"></i>Customer service available 24/7</li>
                                                            <li><i class="fa fa-star" style="font-size: 15px ;color: #ffa127 ;margin-right: 10px ;"></i>Hand-picked Tours &amp; Activities</li>
                                                            <li><i class="fa fa-support" style="font-size: 15px ;color: #ffa127 ;margin-right: 10px ;"></i>Best price online guaranteed</li>
                                                        </ul>
                                                    </div></div>
                                                </div>
                                                </div>
                                            </div>

                                            <div id="sidebar-4">
                                                <h4 class="destination-contact-h color-head-balck">TALK WITH A DESTINATION EXPERT</h4>
                                                <h5>We tailor itineraries to your dates and interests, adjusting hotels, excursions and length as desired.
                                                </h5>
                                                <div class="contact-by-voice">
                                                    <ul>
                                                        <li>
                                                            <p class="rotate-3"><i class="fas fa-phone-alt"></i></p>
                                                            <p class="icon-text">Call</p>
                                                        </li>
                                                        <li>
                                                            <p><i class="fas fa-envelope"></i></p>
                                                            <p class="icon-text">Email</p>
                                                        </li>
                                                        <li>
                                                            <p><i class="fas fa-comment-lines"></i></p>
                                                            <p class="icon-text">Chat</p>
                                                        </li>
                                                    </ul>
                                                    <div class="clearfix"></div>


                                                </div>
                                            </div>

                                        </div>
                                    </div>


                            </div>

                        </div>
                    </div>
                </div>
                </div>
            </section>




<?php

get_footer();