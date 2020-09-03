<?php

/*

@package Wonder Blog Theme
====================================================================
                    ADMIN PAGE
====================================================================

*/

function wonder_add_admin_page(){
    //Generate Wonder Blog Admin Page
    add_menu_page('Wonder Theme Options', 'Wonder', 'manage_options', 'arifra_wonder', 'wonder_theme_create_page', get_template_directory_uri() . '/img/blog-icon.png', 110 );

	//Generate Wonder Admin Sub Pages
	add_submenu_page( 'arifra_wonder', 'Wonder Sidebar Options', 'Sidebar', 'manage_options', 'arifra_wonder', 'Wonder_theme_create_page' );
	add_submenu_page( 'arifra_wonder', 'Wonder Theme Options', 'Theme Options', 'manage_options', 'arifra_wonder_theme', 'wonder_theme_support_page' );
	add_submenu_page( 'arifra_wonder', 'Wonder Contact Form', 'Contact Form', 'manage_options', 'arifra_wonder_theme_contact', 'wonder_contact_form_page' );
	add_submenu_page( 'arifra_wonder', 'Wonder CSS Options', 'Custom CSS', 'manage_options', 'arifra_wonder_css', 'wonder_theme_settings_page');
	
}

    add_action('admin_menu', 'wonder_add_admin_page');

    //Activate Custom Settings
    add_action( 'admin_init', 'wonder_custom_settings' );

function wonder_custom_settings() {

    // SIDEBAR OPTIONS

    register_setting( 'wonder-settings-group', 'profile_picture' );
    register_setting( 'wonder-settings-group', 'first_name' );
    register_setting( 'wonder-settings-group', 'last_name' );
    register_setting( 'wonder-settings-group', 'user_description' );
    register_setting( 'wonder-settings-group', 'twitter_handler', 'wonder_sanitize_twitter_handler');
    register_setting( 'wonder-settings-group', 'facebook_handler' );
    register_setting( 'wonder-settings-group', 'gplus_handler' );

    add_settings_section( 'wonder-sidebar-options', 'Sidebar Options', 'wonder_sidebar_options', 'arifra_wonder' );

    add_settings_field('sidebar-profile-picture', 'Profile Picture', 'wonder_sidebar_profile', 'arifra_wonder', 'wonder-sidebar-options');

    add_settings_field('sidebar-name', 'Full Name', 'wonder_sidebar_name', 'arifra_wonder', 'wonder-sidebar-options');
    add_settings_field('sidebar-description', 'Description', 'wonder_sidebar_description', 'arifra_wonder', 'wonder-sidebar-options');
    add_settings_field('sidebar-twitter', 'Twitter', 'wonder_sidebar_twitter', 'arifra_wonder', 'wonder-sidebar-options');
    add_settings_field('sidebar-facebook', 'Facebook', 'wonder_sidebar_facebook', 'arifra_wonder', 'wonder-sidebar-options');
    add_settings_field('sidebar-gplus', 'Google+', 'wonder_sidebar_gplus', 'arifra_wonder', 'wonder-sidebar-options');

    //THEME SUPPORT OPTIONS

    register_setting('wonder-theme-support', 'post_formats' );
    register_setting('wonder-theme-support', 'custom_header' );
    register_setting('wonder-theme-support', 'custom_background' );

    add_settings_section('wonder-theme-options', 'Theme Options', 'wonder_theme_options', 'arifra_wonder_theme' );

    add_settings_field('post-formats', 'Post Formats', 'wonder_post_formats', 'arifra_wonder_theme', 'wonder-theme-options' );
    add_settings_field('custom-header', 'Custom Header', 'wonder_custom_header', 'arifra_wonder_theme', 'wonder-theme-options' );
    add_settings_field('custom-background', 'Custom Background', 'wonder_custom_background', 'arifra_wonder_theme', 'wonder-theme-options' );

    
    // CONTACT FORM OPTIONS

    register_setting( 'wonder-contact-options', 'activate_contact');

    add_settings_section( 'wonder-contact-section', 'Contact Form', 'wonder_contact_section', 'arifra_wonder_contact' );

    add_settings_field('activate-form', 'Activate Contact Form', 'wonder_activate_contact', 'arifra_wonder_contact', 'wonder-contact-section');

    // CUSTOM CSS OPTIONS

    register_setting( 'wonder-custom-css-options', 'wonder_css', 'wonder_sanitize_custom_css' );

    add_settings_section( 'wonder-custom-css-section', 'Custom CSS', 'wonder_custom_css_section_callback', 'arifra_wonder_css' );
    
    add_settings_field('custom-css', 'Insert your Custom CSS', 'wonder_custom_css_callback', 'arifra_wonder_css', 'wonder-custom-css-section' );
    
    


}

//SIDEBAR OPTIONS FUNCTIONS

function wonder_sidebar_options(){
    echo 'Customize your Sidebar Information';
}
function wonder_sidebar_profile(){
    //Input profile picture
    $profilePicture = esc_attr(get_option('profile_picture')); 
    if(empty($profilePicture)){
        echo '<input type="button" class="button button-secondary" value="Upload Profile Picture" id="upload-button"><input type="hidden" id="profile-picture" name="profile_picture" value="" />';
    } else {
        echo '<input type="button" class="button button-secondary" value="Replace Profile Picture" id="upload-button"><input type="hidden" id="profile-picture" name="profile_picture" value="'.$profilePicture.'" > <input type="button" class="button button-secondary" value="Remove" id="remove-picture" style="margin-left: 0.5rem;">';
        
    }
}

function wonder_sidebar_name(){
    //Input name
    $firstName = esc_attr(get_option('first_name')); 
    $lastName = esc_attr(get_option('last_name')); 
    echo '<input type="text" name="first_name" value="'.$firstName.'" placeholder="First Name" ><input type="text" name="last_name" value="'.$lastName.'" placeholder="Last Name" >';
}

function wonder_sidebar_description(){
    //Input name
    $userDescription = esc_attr(get_option('user_description')); 
    echo '<input type="text" name="user_description" value="'.$userDescription.'" "placeholder="Description"><p class="description">Tell us something about you!</p>';
}

//Input Social Media
function wonder_sidebar_twitter(){
    $twitter = esc_attr(get_option('twitter_handler')); 
    echo '<input type="text" name="twitter_handler" value="'.$twitter.'" placeholder="Twitter name" ><p class="description">Input your Twitter name without the @ character</p>';
}

function wonder_sidebar_facebook(){
    $facebook = esc_attr(get_option('facebook_handler')); 
    echo '<input type="text" name="facebook_handler" value="'.$facebook.'" placeholder="Facebook url" >';
}

function wonder_sidebar_gplus(){
    $gplus = esc_attr(get_option('gplus_handler')); 
    echo '<input type="text" name="gplus_handler" value="'.$gplus.'" placeholder="Google+ url" >';
}

//Sanitization settings
function wonder_sanitize_twitter_handler($input){
    $output = sanitize_text_field($input);
    $output = str_replace('@', '', $output);
    return $output;

}

//Sanitize CSS text area
function wonder_sanitize_custom_css($input){
    $output = esc_textarea($input);
    return $output;

}

//CREATE PAGES
function wonder_theme_create_page() {
    // generate Blog Admin Page
    require_once( get_template_directory() . '/inc/templates/wonder-admin.php' );

}

//Template submenu functions
function wonder_theme_support_page() {
    require_once( get_template_directory() . '/inc/templates/wonder-theme-support.php' );
}

function wonder_contact_form_page() {
    require_once( get_template_directory() . '/inc/templates/wonder-contact-form.php' );
}

function wonder_theme_settings_page() {
    // generate Blog Sub Page
    require_once( get_template_directory() . '/inc/templates/wonder-custom-css.php' );
}

//Theme Support Options

    //Post Formats Callback

function wonder_theme_options() {
	echo 'Activate and Deactivate specific Theme Support Options';
}

function wonder_post_formats() {
	$options = get_option( 'post_formats' );
	$formats = array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' );
	$output = '';
	foreach ( $formats as $format ){
		$checked = ( @$options[$format] == 1 ? 'checked' : '' );
		$output .= '<label><input type="checkbox" id="'.$format.'" name="post_formats['.$format.']" value="1" '.$checked.' /> '.$format.'</label><br>';
	}
	echo $output;
}

function wonder_custom_header() {
	$options = get_option( 'custom_header' );
	$checked = ( @$options == 1 ? 'checked' : '' );
	echo '<label><input type="checkbox" id="custom_header" name="custom_header" value="1" '.$checked.' /> Activate Custom Header</label>';
}

function wonder_custom_background() {
	$options = get_option( 'custom_background' );
	$checked = ( @$options == 1 ? 'checked' : '' );
	echo '<label><input type="checkbox" id="custom_background" name="custom_background" value="1" '.$checked.' /> Activate Custom Bakcground</label>';
}

// CONTACT FORM

function wonder_contact_section() {
	echo 'Activate and Deactivate the Built-in Contact Form';
}

function wonder_activate_contact() {
	$options = get_option( 'activate_contact' );
	$checked = ( @$options == 1 ? 'checked' : '' );
	echo '<label><input type="checkbox" id="custom_header" name="activate_contact" value="1" '.$checked.' /></label>'; /*Chec this if its id= activate_contact or custom_header*/
}


// CUSTOM CSS OPTIONS

function wonder_custom_css_section_callback() {
	echo 'Customize Wonder Theme with your own CSS';
}

function wonder_custom_css_callback() {
    $css = get_option( 'wonder_css' );
    $css = ( empty($css) ? '/* Sunset Theme Custom CSS */' : $css );
    echo '<div id="customCSS">'.$css.'</div><textarea id="wonder_css" name="wonder_css" style="display:none; visibility:hidden">'.$css.'</textarea>';
    
}






?>


