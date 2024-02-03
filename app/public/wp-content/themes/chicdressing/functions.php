<?php 

add_action( 'wp_enqueue_scripts', 'chicdressing_enqueue_styles' );
function chicdressing_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
}

add_filter( 'big_image_size_threshold', '__return_false' );
?>
<!-- ------------------------------------------------------------------------ -->
<!-- Ce code est lié à echo wp_get_attachment_image_src( $repeater_item->image_url, 'custom-size' )[0]; du fichier featured-slider-custom qui mettait en Full -->
<?php
add_image_size( 'custom-size', 1600, 900, true );
?>

<!-- Ce code supprime les feuilles de style Google Fonts spécifiées du thème WordPress chaque fois que les scripts et les styles sont mis en file d’attente.
 Cela peut être utile pour améliorer les performances de chargement de la page ou pour des raisons de confidentialité. -->
<?
function remove_google_fonts_stylesheet() {  
    wp_dequeue_style( 'ashe-opensans-font', 'ashe-playfair-font', 'ashe-kalam-font' );
}
add_action( 'wp_enqueue_scripts', 'remove_google_fonts_stylesheet', 999 );

 