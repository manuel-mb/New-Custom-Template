<?php
/**
 * Legal footer menu
 *
 * @package SCCA\Theme
 */

?>

<p class="footer__legal">
	<?php
	echo esc_html(
		sprintf(
			/* translators: 1) blog name, 2) copyright year. */
			esc_html__( '&copy; %1$s - %2$s.', 'manuel' ),
			get_bloginfo( 'name' ),
			date( 'Y' )
		)
	);
	?>
	<br />
	<?php _e( 'All Rights Reserved.', 'manuel' ); ?>
</p>