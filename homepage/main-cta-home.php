<section class="home-main-cta-container">

		<div class="home-cta-title-container" >

			<h2 class="home-cta-title">
			  <?php the_sub_field('title'); ?>
			</h2>

		</div>

	  	<div class= "ctas-home-container">
			<?php
			if( have_rows('cta') ):
				while( have_rows('cta') ) : the_row(); ?>

					<div class="card-link-image">

						<div class="card-link-img-container" style="background-image:url('<?php the_sub_field('img'); ?>');" >
						</div>

						<div class="text-only-blue-cta">
							<a href="<?php the_sub_field('url'); ?>">
								<?php the_sub_field('link_text'); ?>
							</a>
						</div>
						
					</div>

				 <?php endwhile; ?>
			<?php endif; ?>
		</div>

</section>