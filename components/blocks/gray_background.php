<?php
/**
 * Display Gray Background Block
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

$content_title    = get_sub_field( 'content_title' );
$content_subtitle = get_sub_field( 'content_subtitle' );
$content          = get_sub_field( 'content' );
$content2         = get_sub_field( 'content_2' );
?>

<?php if ( $image ) : ?>
	<div class="image--holder">
		<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
	</div>
<?php endif; ?>
<div class="container">
	<div class="row">
		<div class="col-12">
			<h2><?php echo esc_attr( $content_title ); ?></h2>
			<?php if ( $content_subtitle ) : ?>
				<h5><?php echo esc_attr( $content_subtitle ); ?></h5>
			<?php endif; ?>
			<?php if ( $content2 && $content ) : ?>
			<div class="row content--area">
				<div class="content_1 col-lg-6 col-12">
					<?php echo $content; ?>
				</div>
				<div class="content_2 col-lg-6 col-12">
					<?php echo $content2; ?>
				</div>
			</div>
			<?php else : ?>
				<?php echo $content; ?>
			<?php endif; ?>
		</div>
	</div>
</div>
