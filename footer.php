<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tcf-theme
 */

?>


<?php wp_footer(); ?>


<div class="footer p-5 bg-black pl-0 pr-0">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-6">
                <h4>Newsletter</h4>
                <p>Subscribe to receive exclusive deals and offers!</p>
                <form action="">
                    <input type="text" class="form-control" placeholder="Your Email"> <button type="submit" class="btn submit-btn">Sign Up Now</button>
                </form>
            </div>
            <div class="col-6 col-md-2 mob-mt-20">
                <p class="f-meu-head">Menu</p>
                <ul class="footer-menu">
                    <li><a href="">Home</a></li>
                    <li><a href="">All Trips</a></li>
                    <li><a href="">Destinations</a></li>
                    <li><a href="">About us</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Contact us</a></li>
                </ul>
            </div>
            <div class="col-6 col-md-2 mob-mt-20">
                <p class="f-meu-head">Social Media</p>
                <ul class="footer-menu social-media">
                    <li><a href="https://www.facebook.com/almasexpeditions" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="https://www.instagram.com/almasexpeditions/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCkXrj9jGsbMtjhktpRKRUWA?view_as=subscriber" target="_blank"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <p class="f-meu-head">Contact Info</p>
                <ul class="footer-menu">
                    <li> <span>Address</span>
                        <p class="pt-0 pb-0">Carretera Costera Sur Km 3.8 Store # 5 <br>
                            Cozumel, Quintana Roo <br>
                            Mexico</p>
                    </li>
                    <li> <span>Email</span>
                        <p class="pt-0 pb-0">info@almasexpeditions.com</p>
                    </li>
                    <li> <span>Phone</span>
                        <p class="pt-0 pb-0"> 1.801.994.6501</p>
                    </li>

                </ul>
            </div>

        </div>
    </div>
</div>

<!-- Start of Footer area -->
<div class="copyright-area text-center ptb-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer-text">
                                    <span class="text-white block" style="text-align: left;color: #B4A6A6!important;font-size: 20px;font-family: 'Roboto-r"> Copyright © 2019 Alma’s Expeditions. Designed and Developed by <a
                                                href="https://thecodeframe. com"><img style="max-width: 200px;"
                                                                                      src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/Logo-final.png" alt=""></a></span>
                </div>
            </div>
        </div>
    </div>
</div>
</footer>
<!-- End of Footer area -->
</div>
<!--End of Main Wrapper Area-->




<!-- right-sidebar -->
<div class="main-sidebar main-sidebar-right" id="main-sidebar">
    <div class="main-sidebar-wrapper" id="main-sidebar-wrapper">
        <div class="section">
            <div class="side-bar-logo"><a href="index.html"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/logo/Almas.png" alt="Almas Expedition"></a></div>
            <div class="cross-brn"><button class="btn close-btn" onclick="sidebarClose(this)">X</button></div>

            <!-- content -->

            <div class="sidecontent">
                <h4 >Personalize your travel</h4>
                <p>Complete the form and receive a Custom Travel quote</p>


                <?php
                // query for the about page
                $your_query = new WP_Query( 'pagename=home' );
                // "loop" through query (even though it's just one page)
                while ( $your_query->have_posts() ) : $your_query->the_post();
                    the_content();
                endwhile;
                // reset post data (important!)
                wp_reset_postdata();
                ?>


            </div>

        </div>
    </div>
</div>
<!-- right-sidebar -->



<!-- jquery latest version
========================================================= -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/vendor/jquery-1.12.4.min.js"></script>

<!-- Bootstrap framework js
========================================================= -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/popper.js"></script>

<!-- Owl Carousel js
========================================================= -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/owl.carousel.min.js"></script>

<!-- Jquery nice select js
========================================================= -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery.nice-select.min.js"></script>

<!-- nivo slider js
========================================================= -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/lib/nivo-slider/js/jquery.nivo.slider.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/lib/nivo-slider/home.js"></script>

<!-- Js plugins included in this file
========================================================= -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/plugins.js"></script>

<!-- Video Player JS
========================================================= -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery.mb.YTPlayer.js"></script>

<!-- AJax Mail JS
========================================================= -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/ajax-mail.js"></script>

<!-- Mail Chimp JS
========================================================= -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Waypoint Js
========================================================= -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/waypoints.min.js"></script>

<!-- Main js file contents all jQuery plugins activation
========================================================= -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/main.js"></script>

<!-- FAQ -->

<!-- sidebar open -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery-ui.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery.simpler-sidebar.min.js"></script>
<script>

    $( "#main-sidebar" ).simplerSidebar( {
        selectors: {
            trigger: ".toggle-sidebar",
        },
        animation: {
            easing: "easeOutQuint"
        }
    } );

</script>
<script>
    $(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function(){
            $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });

        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
            $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
        }).on('hide.bs.collapse', function(){
            $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        });
    });
</script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/sticky-sidebar.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#sidebar-2').stickySidebar({
            containerSelector: '.container',
            innerWrapperClass: 'sidebar__inner',
            topSpacing: 80,
            bottomSpacing: 0,
            resizeSensor:true

        });

    });
</script>
<script>
    $(document).ready(function(){
        $('.scroll').on('click',function(e) {
            e.preventDefault();
            var offset = 0;
            var target = this.hash;
            if ($(this).data('offset') != undefined) offset = $(this).data('offset');
            $('html, body').stop().animate({
                'scrollTop': $(target).offset().top - offset
            }, 500, 'swing', function() {
                // window.location.hash = target;
            });
        });
    });
</script>
<script type="text/javascript">jssor_1_slider_init();
</script>

<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/slick.js"></script>
<script type="text/javascript">
    $(document).on('ready', function() {
        $(".regular").slick({
            dots: true,
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: true,
            infinite:true,
            pauseOnHover:true,
            arrows:false,
            responsive: [{
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    infinite:true
                }
            }]

        });

    });
</script>



</body>
</html>