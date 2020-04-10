<?php
/**
 * Display Page Header
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

$image = get_sub_field( 'background_image' );
?>

<div class="container-fluid">
	<?php if ( ! empty( $image ) ) : ?>
		<div class="image--holder">
			<img src="<?php echo esc_url( $image['sizes']['page_header_thumb'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
		</div>
	<?php endif; ?>
	<h1><?php echo esc_attr( get_the_title() ); ?></h1>
</div>
