<?php

/*

@package Wonder Blog Theme
====================================================================
                    ADMIN ENQUEUE FUNCTIONS
====================================================================

*/

function wonder_load_admin_scripts( $hook ){
    //echo $hook;
    
    if('toplevel_page_arifra_premium' == $hook) {
    
    wp_register_style( 'wonder_admin', get_template_directory_uri() . '/css/wonder-admin.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'wonder_admin' );
    
    // Call all the scripts and source codes to use the media uploader automatically
    wp_enqueue_media();

    // Trigger the jQuery
    wp_register_script( 'wonder-admin-script', get_template_directory_uri() . '/js/wonder-admin.js', array('jquery'), '1.0.0', true );

    wp_enqueue_script( 'wonder-admin-script' );
    
    } else if('wonder_page_arifra_premium_css' == $hook ){

        wp_enqueue_style( 'ace', get_template_directory_uri() . '/css/wonder-ace.css', array(), '1.0.0', 'all' );

        wp_enqueue_script( 'ace', get_template_directory_uri() . '/js/ace/ace.js', array('jquery'), '1.2.2', true );

        wp_enqueue_script( 'wonder-custom-css-script', get_template_directory_uri() . '/js/wonder.custom_css.js', array('jquery'), '1.0.0', true );

    } else {return;}
}

add_action( 'admin_enqueue_scripts', 'wonder_load_admin_scripts' );

/*

====================================================================
                    FRONT-END ENQUEUE FUNCTIONS
====================================================================

*/

function wonder_load_scripts() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6', 'all' );
    wp_enqueue_style( 'wonder', get_template_directory_uri() . '/css/wonder.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('Poppins', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap');

<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
    wp_enqueue_style('Poppins', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap');

=======
>>>>>>> c89922d33e2ba37592bd805622ebd43f10a8bb0b
>>>>>>> 9bdd6301fe573493be721dcd92b1f84f12007e61
>>>>>>> 7fb0adf1bc1e7e27003c0b44f62219b1736a1a4b


    wp_deregister_script('jquery');


    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.js', false, '3.5.1', true );
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.6', true );

}

add_action('wp_enqueue_scripts', 'wonder_load_scripts');




?>

