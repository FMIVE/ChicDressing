<?php 

add_action( 'wp_enqueue_scripts', 'chicdressing_enqueue_styles' );
function chicdressing_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
}

add_filter( 'big_image_size_threshold', '__return_false' );
?>

<!-- modif tailles d'images -->
<?php
add_image_size( 'custom-size', 1600, 900, true );
?>


<?

function ashe_playfair_font_url() {
    $font_url = '';
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'ashe' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Playfair Display:400,700' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}

function ashe_opensans_font_url() {
    $font_url = '';
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'ashe' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Open Sans:400italic,400,600italic,600,700italic,700' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}

function ashe_kalam_font_url() {
    $font_url = '';
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'ashe' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Kalam' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}

function ashe_rokkitt_font_url() {
    $font_url = '';
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'ashe' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Rokkitt' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}


function ashe_gfonts_scripts() {
    wp_enqueue_style( 'ashe-playfair-font', ashe_playfair_font_url(), array(), '1.0.0' );
    wp_enqueue_style( 'ashe-opensans-font', ashe_opensans_font_url(), array(), '1.0.0' );

    // Load Kalam if selected
    if ( ashe_options( 'typography_logo_family' ) == 'Kalam' || ashe_options( 'typography_nav_family' ) == 'Kalam' ) {
    	wp_enqueue_style( 'ashe-kalam-font', ashe_kalam_font_url(), array(), '1.0.0' );
    }

    // Load Rokkitt if selected
    if ( ashe_options( 'typography_logo_family' ) == 'Rokkitt' || ashe_options( 'typography_nav_family' ) == 'Rokkitt' ) {
    	wp_enqueue_style( 'ashe-rokkitt-font', ashe_rokkitt_font_url(), array(), '1.0.0' );
    }
}
add_action( 'wp_enqueue_scripts', 'ashe_gfonts_scripts' );