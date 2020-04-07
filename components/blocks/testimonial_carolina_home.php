<?php
/**
 * Display Testimonial Homepage Block
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
?>

<div class="container">
	<div class="row">
		<div class="col-12">
			<h5>Testimonials</h5>
			<h2><?php echo esc_attr( $content_title ); ?></h2>
			<div class="slider--container">
				<?php get_template_part( 'components/svg/quote' ); ?>
				<?php
				$testimonials = get_sub_field( 'testimonials' );
				if ( $testimonials ) :
					?>
						<div class="swiper-container testimonials--slider">
							<div class="swiper-wrapper">
								<?php foreach ( $testimonials as $post ) : ?>
										<?php setup_postdata( $post ); ?>
										<div class="swiper-slide" data-name="<?php echo esc_attr( get_the_title() ); ?>">
											<?php the_content(); ?>
										</div>
								<?php endforeach; ?>
							</div>
							<div class="swiper-pagination testimonial--pagination"></div>
							<?php get_template_part( 'components/swiper-nav' ); ?>
						</div>
						<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php get_template_part( 'components/svg/gray-curve' ); ?>
