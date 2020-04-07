<?php
/**
 * Footer Men
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
	$image        = get_field( 'men_schedule_image', 'option' );
	$footer_image = get_field( 'men_footer_image', 'option' );
?>

<section class="block block--schedule-consultation block--men">
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
				<?php echo do_shortcode( '[gravityforms id="2" title="false" description="false" ajax="true"]' ); ?>
			</div>
		</div>
	</div>
</section>

<footer class="footer footer-men">
	<?php if ( ! empty( $footer_image ) ) : ?>
		<div class="image--holder">
			<img src="<?php echo esc_url( $footer_image['sizes']['hero_thumb'] ); ?>" alt="<?php echo esc_attr( $footer_image['alt'] ); ?>" />
		</div>
	<?php endif; ?>

	<?php get_template_part( 'components/svg/men-icon' ); ?>

	<?php
		$args = array(
			'theme_location' => 'footer-men-menu',
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
