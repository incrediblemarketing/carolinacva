<?php
/**
 * Template Name: Landing Page
 * Template Post Type: page
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

$current_id = get_the_ID();
get_header( 'landing-page' );  ?>

<div class="container-fluid landing-page">
	<div class="row justify-content-center">
		<div class="col-12 px-0">
				<div class="landing--flex">
					<div class="landing--half hovered">
						<?php get_template_part( 'components/svg/carolina-logo' ); ?>
						<?php
						$carolina_image = get_field( 'carolina_cva_image', 'options' );
						if ( ! empty( $carolina_image ) ) :
							?>
								<img src="<?php echo esc_url( $carolina_image['url'] ); ?>" alt="<?php echo esc_attr( $carolina_image['alt'] ); ?>" />
						<?php endif; ?>
						<h2>Carolina Cardiology & Vascular Associates</h2>
						<h5>The Vein, Heart & Blood Center</h5>
						<a href="/cardiology/" class="btn btn--red">ENTER SITE</a>
					</div>
					<div class="landing--half hovered">
							<?php get_template_part( 'components/svg/men-logo' ); ?>
						<?php
						$men_image = get_field( 'mens_clinic_image', 'options' );
						if ( ! empty( $men_image ) ) :
							?>
								<img src="<?php echo esc_url( $men_image['url'] ); ?>" alt="<?php echo esc_attr( $men_image['alt'] ); ?>" />
						<?php endif; ?>
						<h2>The Men’s Clinic</h2>
						<h5>Restoring the Prime in Men</h5>
						<a href="/men/" class="btn btn--blue">ENTER SITE</a>
					</div>
				</div>
		</div>
	</div>
</div>
<?php get_footer( 'landing-page' ); ?>
