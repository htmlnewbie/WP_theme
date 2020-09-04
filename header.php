<?php
    /*
        This is the template for the header

        @package Wonder Blog Theme



    */

?>

<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <!-- This will make the  pinback function to only work with single pages (single posts, etc) -->
    <?php if(is_singular() && pings_open( get_queried_object() ) ): ?>
    <link real="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php endif; ?>

    <?php wp_head(); ?>

    <title>Wonder Blog</title>
</head>

<body <?php body_class(); ?> >
    


