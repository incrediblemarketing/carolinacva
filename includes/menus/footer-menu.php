<?php
/**
 * Footer menu
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

/**
 * Register Footer Menu
 */
function im_register_footer_menu() {
	register_nav_menus(
		array(
			'footer-menu' => __( 'Footer Menu' ),
		)
	);
}
add_action( 'init', 'im_register_footer_menu' );
