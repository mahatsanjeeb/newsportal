<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Newsium
 */

?>


</div>

<?php if (is_active_sidebar('off-canvas-panel')) : ?>
    <div id="sidr" class="primary-background">
        <a class="sidr-class-sidr-button-close" href="#sidr-nav">
            <i class="fa primary-footer fa-window-close"></i>
        </a>
        <?php dynamic_sidebar('off-canvas-panel'); ?>
    </div>
<?php endif; ?>

<?php do_action('newsium_action_full_width_upper_footer_section'); ?>

<footer class="site-footer">
    <?php echo do_shortcode('[INSERT_ELEMENTOR id="314"]'); ?>
</footer>
</div>
<a id="scroll-up" class="secondary-color">
    <i class="fa fa-angle-up"></i>
</a>
<?php wp_footer(); ?>

</body>
</html>
