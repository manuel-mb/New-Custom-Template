<section class="home-hero-container">
	<div class="hero-home-container">

		<div class="hero-home-title-container" >

			<h5 class="hero-home-title-intro">
			  <?php the_sub_field('introduction'); ?>
			</h5>

			<h1 class="hero-home-main-title">
			  <?php the_sub_field('main_title'); ?>
			</h1>

			<?php if( get_sub_field('need_button') ) :?>
				<div class="button-hero-home-content">
			  		<a class="<?php the_sub_field('type_button'); ?>" href="<?php the_sub_field ( 'button_url'); ?>"><?php the_sub_field ( 'button_text' ); ?></a>
			  	</div>
			<?php endif; ?>

		</div>

	  	<div class= "image-hero-home-container">
			<img src="<?php the_sub_field ( 'add_image'); ?>" />
		</div>

	</div>
</section>