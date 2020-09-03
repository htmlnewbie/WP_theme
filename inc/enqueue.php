<?php

/*

@package Wonder Blog Theme
====================================================================
                    ADMIN ENQUEUE FUNCTIONS
====================================================================

*/

function wonder_load_admin_scripts( $hook ){
    //echo $hook;
    
    if('toplevel_page_arifra_wonder' == $hook) {
    
    wp_register_style( 'wonder_admin', get_template_directory_uri() . '/css/wonder-admin.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'wonder_admin' );
    
    // Call all the scripts and source codes to use the media uploader automatically
    wp_enqueue_media();

    // Trigger the jQuery
    wp_register_script( 'wonder-admin-script', get_template_directory_uri() . '/js/wonder-admin.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'wonder-admin-script' );
    
    } else if('wonder_page_arifra_wonder_css' == $hook ){

        wp_enqueue_style( 'ace', get_template_directory_uri() . '/css/wonder-ace.css', array(), '1.0.0', 'all' );


        wp_enqueue_script( 'ace', get_template_directory_uri() . '/js/ace/ace.js', array('jquery'), '1.2.2', true );
        wp_enqueue_script( 'wonder-custom-css-script', get_template_directory_uri() . '/js/wonder.custom_css.js', array('jquery'), '1.0.0', true );

    } else {return;}
}

add_action( 'admin_enqueue_scripts', 'wonder_load_admin_scripts' );


?>

