<?php
/**
 * Display CTA Text Block
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

<svg class="top-blue-curve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1919.98 759.91" preserveAspectRatio="xMaxYMin slice">
	<defs>
		<mask id="blue-curve-mask">
			<rect id="Rectangle" fill="#000" x="0" y="0"></rect>
			<path fill="#fff" d="M1919.9,425q0,285.13.09,570.26c0,3.59-.55,4.7-4.5,4.7q-955.5-.16-1911,0c-4,0-4.47-1.18-4.47-4.72q.14-358.09.08-716.2c1.33.67,2.64.09,3.87-.23a1258.8,1258.8,0,0,1,127.5-25A1342,1342,0,0,1,273.55,241c1.5-.06,3.34.91,4.51-.94h96c.3,1.09,1.2.91,2,.93,57,1.61,113.66,6.78,170.19,13.94,51.17,6.47,102,14.88,152.7,24.46,74.78,14.13,149,30.83,223.12,48.08,101.11,23.54,202,47.84,303.87,68.22,46.94,9.39,94,17.95,141.37,25.12,44.6,6.76,89.35,12.35,134.28,16.46,44,4,88,6.67,132.17,7.52a1573,1573,0,0,0,158.8-4.69c29.87-2.45,59.66-5.51,89.33-9.77C1894.56,428.55,1907.23,426.81,1919.9,425Z" transform="translate(-0.01 -240.09)"/>
		</mask>
	</defs>
	<image class="blue-curve-image" preserveAspectRatio="xMinYMid slice" x="0" y="0" viewBox="0 0 1919.98 759.91" mask="url(#blue-curve-mask)" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php echo $image['sizes']['hero_thumb']; ?>" width="1920" height="760"></image>
</svg>
<?php get_template_part( 'components/svg/top-curve' ); ?>
<div class="container">
	<div class="row">
		<div class="col-xl-6 offset-xl-6">
			<div class="text--holder">
				<h2><?php echo esc_attr( $content_title ); ?></h2>
				<?php echo $content; ?>
				<a href="<?php echo $page_link; ?>" class="btn btn--red">Schedule Consultation</a>
			</div>
		</div>
	</div>
</div>
