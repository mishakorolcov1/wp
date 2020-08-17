<?php 


add_action( 'wp_enqueue_scripts', 'twentynineteen_style' );

function twentynineteen_style() {
    
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
   
}


