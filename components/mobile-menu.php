<?php
/**
 * Mobile Menu Display
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

$cardio = get_field( 'men_background_image', 'option' );
$men    = get_field( 'cardiology_background_image', 'option' );
?>
<section class="menu__mobile">
	<button data-toggle="menu">
		<span></span>
		<span></span>
	</button>
	<div class="half-menu cardio--half">
	<?php if ( ! empty( $cardio ) ) : ?>
		<div class="image--holder">
			<img src="<?php echo esc_url( $cardio['sizes']['hero_thumb'] ); ?>" alt="<?php echo esc_attr( $cardio['alt'] ); ?>" />
		</div>
	<?php endif; ?>
		<a class="logo" href="/cardiology/">
			<?php get_template_part( 'components/svg/carolina-logo' ); ?>
		</a>
		<?php
			$args = array(
				'theme_location' => 'header-menu',
				'container'      => false,
				'menu_class'     => 'menu',
			);
			wp_nav_menu( $args );
			?>
	</div>
	<div class="half-menu mens--half">
		<?php if ( ! empty( $men ) ) : ?>
			<div class="image--holder">
				<img src="<?php echo esc_url( $men['sizes']['hero_thumb'] ); ?>" alt="<?php echo esc_attr( $men['alt'] ); ?>" />
			</div>
		<?php endif; ?>
		<a class="logo" href="/men/">
			<?php get_template_part( 'components/svg/men-logo' ); ?>
		</a>
		<?php
			$args = array(
				'theme_location' => 'men-menu',
				'container'      => false,
				'menu_class'     => 'menu',
			);
			wp_nav_menu( $args );
			?>
	</div>
	<?php get_template_part( 'components/social-icons' ); ?>
	<?php get_template_part( 'components/call' ); ?>
</section>
