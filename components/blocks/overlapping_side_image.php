<?php
/**
 * Display Overlapping Side Image
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
$image         = get_sub_field( 'background_image' );
$side_image    = get_sub_field( 'side_image' );
?>


<?php if ( $image ) : ?>
	<div class="image--bg">
		<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
	</div>
<?php endif; ?>

<div class="container">
	<div class="row align-items-end">
		<div class="col-lg-6">
			<?php if ( $side_image ) : ?>
				<div class="image--holder">
					<img src="<?php echo esc_url( $side_image['url'] ); ?>" alt="<?php echo esc_attr( $side_image['alt'] ); ?>" />
				</div>
			<?php endif; ?>
		</div>
		<div class="col-lg-6 content">
			<h2><?php echo esc_attr( $content_title ); ?></h2>
			<?php echo $content; ?>
		</div>
	</div>
</div>
