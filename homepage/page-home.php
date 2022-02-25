<?php
/**
 * Template Name: Home page
 *
 * @package Manuel
 */

get_header();
?>


	<main id="content" class="main">
			
		<section class="main__content">
			<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'homepage/content', 'home' );
					
				endwhile; // End of the loop.
			?>
		
		</section>
	</main>
<?php

get_footer();
