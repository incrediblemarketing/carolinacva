<?php
/**
 * Display Left Red Circle
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

$content_title = get_sub_field( 'content_title' );
$content       = get_sub_field( 'content' );
$side_image    = get_sub_field( 'side_image' );
?>

<div class="container">
	<div class="row align-items-center">
		<div class="col-xl-3">
			<?php if ( $side_image ) : ?>
				<div class="image--holder red--circle">
					<img src="<?php echo esc_url( $side_image['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $side_image['alt'] ); ?>" />
				</div>
			<?php endif; ?>
		</div>
		<div class="col-xl-6 content">
			<h2><?php echo esc_attr( $content_title ); ?></h2>
			<?php echo $content; ?>
		</div>
	</div>
</div>
<?php get_template_part( 'components/svg/line-to-right' ); ?>
