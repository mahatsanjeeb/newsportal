<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Newsium
 */

get_header();

?>
    <div class="af-container-block-wrapper clearfix">
        <div id="primary" class="content-area ">
            <main id="main" class="site-main ">
                <?php
                while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="entry-content-wrap read-single">
                            <div class="post-meta-share-wrapper">
                                <div class="post-meta-detail">
                                    <span class="min-read-post-format">
                                        <?php echo newsium_post_format(get_the_ID()); ?>
                                    </span>
                                    <span class="entry-meta">
                                        <?php newsium_post_item_publish_author(); ?>
                                    </span>
                                    <?php newsium_post_item_publish_date();?>
                                    <?php newsium_count_content_words($post->ID); ?>
                                </div>
                                <?php
                                    newsium_single_post_social_share_icons($post->ID);
                                ?>
                            </div>
                            <?php
                                $single_post_featured_image_view = newsium_get_option('single_post_featured_image_view');
                                if ($single_post_featured_image_view == 'default') {
                                    do_action('newsium_action_single_featured_image');
                                }
                                if ('post' === get_post_type(get_the_ID())) :
                                    if (has_excerpt(get_the_ID())):
                
                                    ?>
                                    <div class="post-excerpt">
                                        <?php echo esc_html(get_the_excerpt(get_the_ID())); ?>
                                    </div>
            
                                <?php endif; ?>
                                
            
                                <?php endif;
            
                                get_template_part('template-parts/content', get_post_type());
                            ?>
                        </div>
                        <div class="aft-comment-related-wrap">
                            <?php
                            // If comments are open or we have at least one comment, load up the comment template.
                            if (comments_open() || get_comments_number()) :
                                comments_template();
                            endif;
                            ?>
                            
                            <?php
                            $show_related_posts = esc_attr(newsium_get_option('single_show_related_posts'));
                            if ($show_related_posts):
                                if ('post' === get_post_type()) :
                                    newsium_get_block('related');
                                endif;
                            endif;
                            ?>
                        </div>
                        
                        
                    </article>
                <?php

                endwhile; // End of the loop.
                ?>

            </main><!-- #main -->
        </div><!-- #primary -->
        <?php ?>
        <?php
        get_sidebar(); ?>
    </div>    
<?php
get_footer();

