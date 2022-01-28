<?php 
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Manuel
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'manuel' ); ?></a>

	<header class="header">

		<?php get_template_part( 'template-parts/header-eyebrow' ); ?>

		<div class="header__container">
			<?php get_template_part( 'template-parts/header-branding' ); ?>	
			<?php get_template_part( 'template-parts/header-navigation' ); ?>
		</div>

	</header>
