<?php
/**
 * The corporate logo for the footer area.
 *
 * @package SCCA\Theme
 */

?>
<div class="footer-site-branding">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-branding__link" rel="home" itemprop="url">
		<?php get_template_part( 'template-parts/site-logo' ); ?>
	</a>
</div>