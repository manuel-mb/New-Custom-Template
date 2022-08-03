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
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css">
	<script src="https://use.fontawesome.com/21ba8a23d6.js"></script>
	<script src="https://unpkg.com/@lottiefiles/lottie-player@1.5.7/dist/lottie-player.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<?php wp_body_open(); ?>

	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'manuel' ); ?></a>

	<header class="header">

		<?php get_template_part( 'template-parts/header-eyebrow' ); ?>

		<div class="header__container">
			<?php get_template_part( 'template-parts/header-branding' ); ?>	
			<?php get_template_part( 'template-parts/header-navigation' ); ?>
		</div>

	</header>
