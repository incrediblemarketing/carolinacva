<?php
/**
 * Footer
 *
 * Main footer file for the theme.
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

	$copyright    = get_field( 'copyright', 'option' );
	$address      = get_field( 'business_street_address', 'option' );
	$address2     = get_field( 'business_city_state_zip', 'option' );
	$address_link = get_field( 'business_address_link', 'option' );
	$phone        = get_field( 'business_phone_display', 'option' );
	$phone_url    = get_field( 'business_phone_url', 'option' );
	$image        = get_field( 'schedule_image', 'option' );
	$footer_image = get_field( 'footer_image', 'option' );
?>

<section class="block block--schedule-consultation">
	<?php if ( ! empty( $image ) ) : ?>
		<div class="image--holder">
			<img src="<?php echo esc_url( $image['sizes']['hero_thumb'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
		</div>
	<?php endif; ?>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-8 px-0">
				<h3>Schedule Consultation</h3>
				<p>Call us at <?php echo do_shortcode( '[call_number]' ); ?> or fill out the form below to schedule a consultation with us!</p>
				<?php echo do_shortcode( '[gravityforms id="1" title="false" description="false" ajax="true"]' ); ?>
			</div>
		</div>
	</div>
</section>

<footer class="footer">
	<?php get_template_part( 'components/svg/footer-red' ); ?>
	<svg class="footer-curve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 710.9" preserveAspectRatio="xMidYMid slice">
		<defs>
			<mask id="footer-curve-mask">
				<rect id="Rectangle" fill="#000" x="0" y="0"></rect>
				<path fill="#fff" d="M978,169.07c-285,0-598.1-230-978-145.21V716H1920V23.86C1483-42.12,1263,169.07,978,169.07Z" transform="translate(0 -5.1)"/>
			</mask>
		</defs>
		<image class="footer-image" preserveAspectRatio="xMidYMax slice" x="0" y="0" viewBox="0 0 1920 710.9" mask="url(#footer-curve-mask)" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php echo $footer_image['sizes']['hero_thumb']; ?>" width="1920" height="710"></image>
	</svg>

	<?php get_template_part( 'components/svg/heart-icon' ); ?>

	<?php
		$args = array(
			'theme_location' => 'footer-menu',
			'container'      => false,
			'menu_class'     => 'menu',
		);
		wp_nav_menu( $args );
		?>

	<?php get_template_part( 'components/social-icons' ); ?>

	<p class="copyright">&copy; <?php echo esc_attr( gmdate( 'Y' ) ); ?> <?php echo esc_attr( $copyright ) ?: esc_attr( get_bloginfo() ); ?> | <a href="/privacy-policy/">Privacy Policy</a> & <a href="/terms-of-use/">Terms of Use</a> | Digital Marketing By <a href="https://www.incrediblemarketing.com/" target="_blank"><?php get_template_part( 'components/svg/incredible-marketing' ); ?>Incredible Marketing</a></p>
</footer>

</div><!-- end of .site-wrap -->
<?php wp_footer(); ?>
</body>

</html>
