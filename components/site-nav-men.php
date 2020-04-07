<?php
/**
 * Display Site Nav Men
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

?>

<nav class="site-nav site-nav-men">
	<button data-toggle="menu">
		<div class="menu--holder">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<p>MENU</p>
	</button>

	<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
		<?php get_template_part( 'components/svg/men-logo' ); ?>
	</a>

	<?php get_template_part( 'components/call' ); ?>
</nav>
