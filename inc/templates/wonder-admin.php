<h1>Wonder Sidebar Options</h1>
<?php settings_errors(); ?> <!-- Prints a message that indicates that there's an error and where -->
<?php

    $picture = esc_attr(get_option('profile_picture')); 
    $firstName = esc_attr(get_option('first_name')); 
    $lastName = esc_attr(get_option('last_name')); 
    $fullName = $firstName . ' ' . $lastName;
    $userDescription = esc_attr(get_option('user_description')); 

?>


<div class="wonder-sidebar-preview">
    <div class="wonder-sidebar">
        <div class="image-container">
            <div id="profile-picture-preview" class="profile-picture" style="background-image: url(<?php print $picture; ?>);" >
            </div>
        </div>
        <h1 class="wonder-username"><?php print $fullName; ?></h1>
        <h2 class="wonder-description"><?php print $userDescription; ?></h2>
        <div class="icons-wrapper"></div>
    </div>
</div>

<form action="options.php" method="post" class="wonder-general-form">
    <?php settings_fields('wonder-settings-group'); ?>
    <?php do_settings_sections('arifra_wonder'); ?> <!-- Here we place the id page where all the options will be placed-->
    <?php submit_button('Save Changes', 'primary', 'btnSubmit'); ?>

</form>
