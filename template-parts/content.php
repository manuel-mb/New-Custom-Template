<?php
/**
 * The default template part for post content in the loop.
 *
 * 
 * @package Manuel
 */

?>


<article <?php post_class( [ 'content', 'content__post' ] ); ?>>
	<h2 class="content__title"><?php the_title(); ?></h2>

	
		<?php the_content(); ?>
	
</article>