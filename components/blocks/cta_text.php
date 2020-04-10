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

<svg class="top-blue-curve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1919.97 811.35" preserveAspectRatio="xMidYMin slice">
	<defs>
		<mask id="blue-curve-mask">
			<rect id="Rectangle" fill="#000" x="0" y="0"></rect>
			<path fill="#fff" d="M1919.89,427.26q0,285.14.09,570.26c0,3.59-.55,4.7-4.5,4.7q-955.5-.15-1911,0c-4,0-4.47-1.18-4.47-4.72Q.15,639.42.09,281.3c1.33.67,2.64.09,3.87-.23a1261.49,1261.49,0,0,1,127.5-25,1344.21,1344.21,0,0,1,142.08-12.81c1.5-.06,3.34.91,4.51-.94h96c.3,1.09,1.2.91,2,.93,57,1.61,113.66,6.78,170.19,13.94,51.17,6.47,102,14.88,152.7,24.46,74.78,14.13,149,30.83,223.12,48.08,101.11,23.54,202,47.84,303.87,68.22,46.94,9.39,94,17.95,141.37,25.12,44.6,6.76,89.35,12.35,134.28,16.46,44,4,88,6.67,132.17,7.52a1569.92,1569.92,0,0,0,158.8-4.69c29.87-2.45,59.66-5.51,89.33-9.77C1894.55,430.81,1907.22,429.07,1919.89,427.26Z" transform="translate(-0.01 -190.87)"/>
		</mask>
	</defs>
	<image class="blue-curve-image" preserveAspectRatio="xMinYMid slice" x="0" y="0" viewBox="0 0 1919.97 811.35" mask="url(#blue-curve-mask)" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php echo $image['sizes']['hero_thumb']; ?>" width="1920" height="811"></image>
	<path fill="#ac5252" d="M1395,406.87C988,364.6,515,124.33,0,258.56V223c72.67-21.75,250-46.72,477-21.5C760.74,233,1150,377.21,1395,406.87Z" transform="translate(-0.01 -190.87)"/>
</svg>
<div class="container">
	<div class="row">
		<div class="col-xl-6 offset-xl-6 col-lg-7 offset-lg-5 col-md-7 offset-md-5 col-12">
			<div class="text--holder">
				<h2><?php echo esc_attr( $content_title ); ?></h2>
				<?php echo $content; ?>
				<a href="<?php echo $page_link; ?>" class="btn btn--red">Schedule Consultation</a>
			</div>
		</div>
	</div>
</div>
