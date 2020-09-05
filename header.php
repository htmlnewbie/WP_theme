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

	<title><?php bloginfo('name'); wp_title(); ?></title>
	<meta name="description" content="<?php bloginfo('description') ?>">

    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
=======
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
>>>>>>> c89922d33e2ba37592bd805622ebd43f10a8bb0b
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <!-- This will make the  pinback function to only work with single pages (single posts, etc) -->
    <?php if(is_singular() && pings_open( get_queried_object() ) ): ?>
    <link real="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php endif; ?>

    <?php wp_head(); ?>

<<<<<<< HEAD
</head>

<body <?php body_class(); ?> >
        <div class="container-fluid container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="header-container background-image text-center" style="background-image: url(<?php header_image();?>);" >

                        <div class="header-content table">
							<div class="table-cell">
                            	<h1 class="site-title wonder-icon">
									<!-- <span class="wonder-logo"></span>  Here goes the logo that was downloaded with the font icons. The logo will appear just by activating the class wonder-logo in this span -->
									<span><?php bloginfo('name'); ?></span>
																	
								</h1> <!-- Place the name of the title inside a span with class of hide to hide it and show the logo instead-->
								<h2 class="site-description"><?php bloginfo('description') ?></h2>
							</div>
                        </div><!-- .header-contenet -->

                        <div class="nav-container"></div><!-- nav-container -->

                    </div><!-- .header-container -->

                </div><!-- .col-xs-12 -->
            </div><!-- row -->
        </div><!--.container-fluid -->
=======
    <title>Wonder Blog</title>
</head>

<body <?php body_class(); ?> >
    

>>>>>>> c89922d33e2ba37592bd805622ebd43f10a8bb0b

