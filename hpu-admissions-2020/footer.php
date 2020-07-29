<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HPU_Admissions_2020
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'hpu-admissions-2020' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				//printf( esc_html__( 'Proudly powered by %s', 'hpu-admissions-2020' ), 'WordPress' );
				?>
			</a>
		
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				//printf( esc_html__( 'Theme: %1$s by %2$s.', 'hpu-admissions-2020' ), 'hpu-admissions-2020', '<a href="http://underscores.me/">HPU Dev</a>' );
				?>
				&copy; <?php echo date("Y"); ?> High Point University • One University Parkway • High Point, NC 27268 • (336) 841-9000
				
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
