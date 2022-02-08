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

	<div class="content_body">
		<?php the_content(); ?>
	</div>
</article>