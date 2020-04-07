<?php
/**
 * Display Hero Block
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

$content   = get_sub_field( 'content' );
$image     = get_sub_field( 'background_image' );
$page_link = get_sub_field( 'page_link' );
?>
<?php if ( ! empty( $image ) ) : ?>
	<div class="image--holder">
		<img src="<?php echo esc_url( $image['sizes']['hero_thumb'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
	</div>
<?php endif; ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<?php echo $content; ?>
			<?php if ( $page_link ) : ?>
				<a class="btn btn--red btn--large" href="<?php echo esc_url( $page_link ); ?>">Schedule Consultation</a>
			<?php endif; ?>
		</div>
	</div>
</div>
