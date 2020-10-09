<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package duka
 */

?>

	<footer id="colophon" class="footer site-footer">
		
	<!--<div class="footer-widget">
            <h3 class="footer-widget__heading">How can we help? <i class="fa fa-arrow-down"></i></h3>
            <ul class="footer-widget__body">
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
            </ul>
        </div>
        <div class="footer-widget">
            <h3 class="footer-widget__heading">Quick Links <i class="fa fa-arrow-down"></i></h3>
            <ul class="footer-widget__body">
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
            </ul>
        </div>
        <div class="footer-widget">
            <h3 class="footer-widget__heading">Latest Posts <i class="fa fa-arrow-down"></i></h3>
            <ul class="footer-widget__body">
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
            </ul>
        </div>
        <div class="footer-widget">
            <h3 class="footer-widget__heading">Our Philosophy <i class="fa fa-arrow-down"></i></h3>
            <ul class="footer-widget__body">
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
            </ul>
        </div>
</div>-->

	<div class="site-footer__info">
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s. Custom built by %2$s.', 'duka' ), 'Duka', '<a href="http://teambidii.co.ke">Team Bidii Consulting</a>' );
				?>
	</div><!-- .site-info -->
    </footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>


        

