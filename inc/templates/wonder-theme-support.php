<h1>Wonder theme Options</h1>
<?php settings_errors(); ?> <!-- Prints a message that indicates that there's an error and where -->
<?php

    // $picture = esc_attr(get_option('profile_picture')); 

?>

<form action="options.php" method="post" class="wonder-general-form">
    <?php settings_fields('wonder-theme-support'); ?>
    <?php do_settings_sections('arifra_wonder_theme'); ?> <!-- Here we place the id page where all the options will be placed-->
    <?php submit_button(); ?>

</form>
