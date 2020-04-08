<?php
/**
 * Display Top Curve Block
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


<svg class="top-curve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1919.95 777.9" preserveAspectRatio="xMinYMid slice">
	<defs>
		<mask id="top-curve-mask">
			<rect id="Rectangle" fill="#000" x="0" y="0"></rect>
			<path fill="#fff" d="M1919.88,27.09q0,373.1.08,746.19c0,3.53-.45,4.72-4.46,4.72q-955.5-.16-1911,0C.56,778,0,776.89,0,773.31Q.16,498.68.1,224c1.95-.63,3.58.57,5.24,1.12C113.69,261.33,225,277.85,339.17,276.39c66.95-.86,133.31-7.58,199.26-18.63,65.47-11,130.05-26,194.13-43.29,89.5-24.11,177.75-52.31,266.13-80.13,80.48-25.33,161-50.33,242.67-71.83,74.18-19.53,149-36,224.92-47.18A1388,1388,0,0,1,1620.9,1c1,0,2.4.66,3-.9h84c.31,1.08,1.21.9,2,.93,21.14.56,42.22,2.06,63.28,3.92A1163.06,1163.06,0,0,1,1890.67,21.6C1900.39,23.47,1909.93,26.41,1919.88,27.09Z" transform="translate(-0.01 -0.1)"/>
		</mask>
	</defs>
	<image class="top-curve-image" preserveAspectRatio="xMinYMid slice" x="0" y="0" viewBox="0 0 1919.95 777.9" mask="url(#top-curve-mask)" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php echo $image['sizes']['hero_thumb']; ?>" width="1920" height="778"></image>
	<path class="swoosh" fill="#ac5252" d="M1395,48.1c-407,57-880,381-1395,200v48c72.67,29.34,250,63,477,29C760.73,282.61,1150,88.1,1395,48.1Z" transform="translate(0.01 0)"/>
</svg>

<div class="container">
	<div class="row align-items-center">
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
