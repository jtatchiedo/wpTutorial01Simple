<?php

function myprefix_load_css_and_js() {
        wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'myprefix_load_css_and_js' );

?>
