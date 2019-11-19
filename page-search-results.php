<?php
/**
Template Name: Tour Search Page
 */

$destination = '';
$duration = '';
$style = '';
$message = 'Search Results For';

$array = array('relation' => 'AND');

if(!empty($_GET['destination'])){
    $destination = $_GET['destination'];
    array_push($array,array(
        'key' => 'destination',
        'value' => $destination,
        'compare' => 'LIKE'
    ));

    $message = $message . " Destination : <span>".$destination.",</span>";
}

if(!empty($_GET['duration'])){
    $duration = $_GET['duration'];
    array_push($array, array(
        'key' => 'd_duration',
        'value' => $duration,
        'compare' => '='
    ));

    $message = $message . " Duration : <span>".$duration." Days,</span>";
}

if(!empty($_GET['style'])){
    $style = $_GET['style'];
    array_push($array, array(
        'key' => 'style',
        'value' => $style,
        'compare' => 'LIKE'
    ));

    if($style == "family"){
        $style = "Family fun";
    }else if($style == "holiday"){
        $style = "Holiday & Seasonal";
    }else if($style == "book"){
        $style = "Book of Mormon Tours";
    }

    $message = $message . " Style : <span>".$style."</span>";
}


$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
    'post_type'		=> 'tour',
    'posts_per_page' => 20,
    'paged' => $paged,
    'meta_query'	=> $array
);


get_header();
?>
    <div class="banner-text-area-all-trips bg-5 bg-black-transparent-layer" style="background-image: url(<?php if(get_field('background_image')) the_field('background_image'); ?>);">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-lg-12">
                    <div class="content">
                        <h2 class="banner-head color-yellow"><?php if(get_field('page_title')) the_field('page_title'); ?></h2>
                        <h3 class="banner-head-2 text-white mt-15"><?php if(get_field('page_sub_title')) the_field('page_sub_title'); ?> </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="about-section p-5 pr-0 pl-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="about-us-head color-head-balck result-text">
                      <?php echo $message; ?>
                    </h3>
                </div>
            </div>

            <div class="next-tour mt-50">
                <div class="row">

                    <?php $loop = new WP_Query($args); ?>


                    <?php if($loop->have_posts()){?>

                        <?php while($loop->have_posts()) : $loop->the_post(); ?>
                            <div class="col-md-4 col-lg-4 col-sm-4 pb-30">
                                <a href="<?php the_permalink(); ?>">
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

                    <?php }else{?>

                       <div class="col-md-12">
                           <div class="card alert alert-danger">
                               <div class="card-body">
                                   <h2 style="text-align: Center"><i class="fa fa-meh-o" aria-hidden="true"></i> Oops ! Not Found.</h2>
                                   <h3 style="text-align: center">Try Another</h3>
                               </div>
                           </div>
                       </div>


                    <?php } ?>

                    <!-- row ended -->

                </div>
            </div>
        </div>
    </section>
<?php include(TEMPLATEPATH . '/template-parts/shared/find-tour.php') ?>

<?php

get_footer();
