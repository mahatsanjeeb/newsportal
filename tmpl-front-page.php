<?php
/**
 * The template for displaying home page.
 * Template Name: Front-page Template
 * @package Newsium
 */

get_header();
if ( 'posts' == get_option( 'show_on_front' ) ) {
    include( get_home_template() );
} else {

    /**
     * newsium_action_sidebar_section hook
     * @since Newsium 1.0.0
     *
     * @hooked newsium_front_page_section -  20
     * @sub_hooked newsium_front_page_section -  20
     */
    do_action('newsium_front_page_section');


}
get_footer();