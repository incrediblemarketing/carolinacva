<?php
/**
 * Display White Column Block
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
$content_2 = get_sub_field( 'content_2' );
?>

<div class="container">
	<div class="row">
		<?php if ( $content && $content_2 ) : ?>
			<div class="col-xl-6 col-12">
				<?php echo $content; ?>
			</div>
			<div class="col-xl-6 col-12">
				<?php echo $content_2; ?>
			</div>
		<?php else : ?>
			<div class="col-12">
				<?php echo $content; ?>
			</div>
		<?php endif; ?>
	</div>
</div>
