<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package simpleasy
 */

?>

</div><!-- #content -->

<a href="#" class="topbutton"></a><!-- Back to top button -->

<footer id="colophon" class="site-footer" role="contentinfo">

    <div class="row"><!-- Start Foundation row -->
        <?php get_sidebar( 'footer' ); ?>
    </div><!-- End Foundation row -->
    <div class="copyright small-12 columns text-center">
    <?php echo '&copy; '.date_i18n(__('Y','simpleasy')); ?> <?php bloginfo( 'name' ); ?>
</div>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
