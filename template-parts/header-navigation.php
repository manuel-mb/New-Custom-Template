<?php
/**
 * The main site navigation on desktop.
 *
 * @package Manuel\Theme
 */

?>

<div class="header__navigation">

<?php wp_nav_menu( 
    array( 
        'theme_location' => 'header-menu', 
        'container_class' => 'main-menu'
    ) 
); ?>

</div>