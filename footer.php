<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Manuel
 */

?>

	<<footer class="footer">
	<h2 class="screen-reader-text"><?php esc_html_e( 'Site footer', 'Manuel' ); ?></h2>

	<?php get_template_part( 'template-parts/footer-branding' ); ?>

	<div class="footer__menu-container">
		<?php get_template_part( 'template-parts/footer-menu-mobile' ); ?>
		<?php get_template_part( 'template-parts/footer-menu-desktop' ); ?>

		<div class="footer__menu--social-credits">
			<?php get_template_part( 'template-parts/footer-menu-social' ); ?>
			<?php get_template_part( 'template-parts/footer-legal' ); ?>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
