<?php

//Menu di navigazione
if ( function_exists( 'wp_nav_menu')) {
    wp_nav_menu( 
        array(
            'container' => 'nav',
            'container_class' => 'site-header__nav',
            'theme_location' => 'main-menu',
        ) );
 }

?>