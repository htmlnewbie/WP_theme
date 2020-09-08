<?php
    /*
        This is the template for the header

        @package Wonder Blog Theme



    */

?>

<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 9bdd6301fe573493be721dcd92b1f84f12007e61
>>>>>>> 7fb0adf1bc1e7e27003c0b44f62219b1736a1a4b

	<title><?php bloginfo('name'); wp_title(); ?></title>
	<meta name="description" content="<?php bloginfo('description') ?>">

<<<<<<< HEAD
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
=======
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
<<<<<<< HEAD
=======
=======
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
>>>>>>> c89922d33e2ba37592bd805622ebd43f10a8bb0b
>>>>>>> 9bdd6301fe573493be721dcd92b1f84f12007e61
>>>>>>> 7fb0adf1bc1e7e27003c0b44f62219b1736a1a4b
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <!-- This will make the  pinback function to only work with single pages (single posts, etc) -->
    <?php if(is_singular() && pings_open( get_queried_object() ) ): ?>
    <link real="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php endif; ?>

    <?php wp_head(); ?>

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 7fb0adf1bc1e7e27003c0b44f62219b1736a1a4b
</head>

<body <?php body_class(); ?> >
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <header class="header-container background-image text-center" style="background-image: url(<?php header_image();?>);" >

                        <div class="header-content table">
							<div class="table-cell">
                            	<h1 class="site-title wonder-icon">
									<!-- <span class="wonder-logo"></span>  Here goes the logo that was downloaded with the font icons. The logo will appear just by activating the class wonder-logo in this span -->
									<span><?php bloginfo('name'); ?></span>
																	
								</h1> <!-- Place the name of the title inside a span with class of hide to hide it and show the logo instead-->
								<h2 class="site-description"><?php bloginfo('description') ?></h2>
							</div> <!-- .table-cell -->
                        </div><!-- .header-contenet -->

                        <div class="nav-container">

                            <nav class="nav navbar navbar-wonder">
                                <?php 
                                    wp_nav_menu(array(
                                        'theme_location' => 'primary',
                                        /*this removes the container so that WP does not generates a container around the menu. this is boolean */
                                        'container' => false,
                                        'menu_class' => 'nav navbar-nav',
                                        'walker' => new Wonder_Walker_Nav_Primary()
                                    ) );
                                ?>
                            </nav>

                        </div><!-- nav-container -->

                    </header><!-- .header-container -->

                </div><!-- .col-xs-12 -->
            </div><!-- row -->
        </div><!--.container-fluid -->
<<<<<<< HEAD
=======
=======
    <title>Wonder Blog</title>
>>>>>>> 9bdd6301fe573493be721dcd92b1f84f12007e61
</head>

<body <?php body_class(); ?> >
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <header class="header-container background-image text-center" style="background-image: url(<?php header_image();?>);" >

                        <div class="header-content table">
							<div class="table-cell">
                            	<h1 class="site-title wonder-icon">
									<!-- <span class="wonder-logo"></span>  Here goes the logo that was downloaded with the font icons. The logo will appear just by activating the class wonder-logo in this span -->
									<span><?php bloginfo('name'); ?></span>
																	
								</h1> <!-- Place the name of the title inside a span with class of hide to hide it and show the logo instead-->
								<h2 class="site-description"><?php bloginfo('description') ?></h2>
							</div> <!-- .table-cell -->
                        </div><!-- .header-contenet -->

                        <div class="nav-container">

                            <nav class="nav navbar navbar-wonder">
                                <?php 
                                    wp_nav_menu(array(
                                        'theme_location' => 'primary',
                                        /*this removes the container so that WP does not generates a container around the menu. this is boolean */
                                        'container' => false,
                                        'menu_class' => 'nav navbar-nav',
                                        'walker' => new Wonder_Walker_Nav_Primary()
                                    ) );
                                ?>
                            </nav>

                        </div><!-- nav-container -->

                    </header><!-- .header-container -->

<<<<<<< HEAD
                </div><!-- .col-xs-12 -->
            </div><!-- row -->
        </div><!--.container-fluid -->
=======
>>>>>>> c89922d33e2ba37592bd805622ebd43f10a8bb0b
>>>>>>> 9bdd6301fe573493be721dcd92b1f84f12007e61
>>>>>>> 7fb0adf1bc1e7e27003c0b44f62219b1736a1a4b

