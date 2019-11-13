<?php if(have_posts()) {the_post(); rewind_posts();} ?>

<?php if('tour' == get_post_type()){

    include (TEMPLATEPATH . '/single-tour.php');

}else{

    include (TEMPLATEPATH . '/template-parts/content-single-template.php');
}
