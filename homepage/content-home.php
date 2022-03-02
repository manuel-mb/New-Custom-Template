<?php
/**
 * Template part for the home page
 * @package Manuel
 */
?>

<?php

    if( have_rows('home') ):
        while ( have_rows('home') ) : the_row();

            if( get_row_layout() == 'hero_home' )
            get_template_part('homepage/hero', 'home');

        	if( get_row_layout() == 'main_cta_home' )
            get_template_part('homepage/main-cta', 'home');

        endwhile; 
    endif;
?>