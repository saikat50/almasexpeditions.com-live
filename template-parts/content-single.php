

<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TCFTHEME
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">

        <div class="post-excerpts">
            <?php if(has_post_thumbnail()){?>
                <a href="<?php echo get_permalink(); ?>">
                    <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                </a>
            <?php } ?>
            <p class="date-time"><?php echo get_the_date('d') .'.'. get_the_date('m') .'.'. get_the_date('Y'); ?></p>
            <h3 class="blog-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
            <div class="blog-text"><?php the_content(); ?></div>
        </div>

        <?php if ( 'post' === get_post_type() ) : ?>
            <div class="blog-detail">
                <div class="row">
                    <div class="col-md-12">
                        <?php do_shortcode('[mashshare]'); ?>
                        <ul class="bottom-bar">
                            <li class="comment-line"><i class="fas fa-comment"></i><span style="margin-left: 10px" class="love-num love-num2"><?php comments_number(0, 1, '%'); ?><span style="margin-left: 5px">COMMENTS</span></li>
                            <li class="like-line"><?php heart_this_hearts(); ?><span style="margin-left: 5px">LIKE</span></li>
                            <li class="categories-line"><i class="fas fa-bookmark"></i><?php the_category(','); ?></li>
                            <li><div class="share-icon"><p><i class="fas fa-share-alt"></i></p><div class="share-now"><?php echo do_shortcode('[supsystic-social-sharing id="1"]') ?></div></div></li>
                        </ul>
                    </div>

                </div>
            </div>
        <?php endif; ?>
    </header><!-- .entry-header -->

</article><!-- #post-<?php the_ID(); ?> -->
