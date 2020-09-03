<h1>Wonder Custom CSS</h1>
<?php settings_errors(); ?> <!-- Prints a message that indicates that there's an error and where -->
<?php

   // $picture = esc_attr(get_option('profile_picture')); 

?>

<form id="save-custom-css-form" action="options.php" method="post" class="wonder-general-form">
    <?php settings_fields('wonder-custom-css-options'); ?>
    <?php do_settings_sections('arifra_wonder_css'); ?> <!-- Here we place the id page where all the options will be placed-->
    <?php submit_button(); ?>

</form>
