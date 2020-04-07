<?php
/**
 * Display CTA Men Text Block
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
$page_link     = get_sub_field( 'page_link' );
$image         = get_sub_field( 'background_image' );
?>

<?php if ( ! empty( $image ) ) : ?>
	<div class="image--holder">
		<img src="<?php echo esc_url( $image['sizes']['hero_thumb'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
	</div>
<?php endif; ?>
<div class="container">
	<div class="row">
		<div class="col-xl-6 offset-xl-6">
			<div class="text--holder">
				<h2><?php echo esc_attr( $content_title ); ?></h2>
				<?php echo $content; ?>
				<a href="<?php echo $page_link; ?>" class="btn btn--blue">Schedule Consultation</a>
			</div>
		</div>
	</div>
</div>
