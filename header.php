<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content=""/>
    <link rel="canonical" href="http://computaid.com/"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content=""/>
    <meta property="og:description" content=""/>
    <meta property="og:url" content="http://computaid.com/"/>
    <meta property="og:site_name" content=""/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:description" content=""/>
    <meta name="twitter:title" content="t"/>
    <meta name="description" content="">

    <?php wp_head() ?>

</head>

<body id="top">
<!-- header
================================================== -->
<header>
    <div class="container-fluid">
        <div class="row" style="max-width:100%;width:100%;">
            <div class="col-md-4" style="padding: 0px;">
                <div class="logo"><a href="/">Computaid</a></div>
            </div>
            <div class="col-md-8" style="padding: 0px;">
                <div id="navi-wrap">
                    <nav id="mainnav" class="clearfix main-nav-wrap" role="navigation" uk-sticky="media: 992; animation: uk-animation-slide-top">
                        <?php
                        // Display Main Navigation
                        wp_nav_menu( array(
                            'theme_location' => 'primary',
                            'container' => false,
                            'menu_id' => 'mainnav-menu',
                            'menu_class' => 'main-navigation-menu',
                            'echo' => true,
                            'fallback_cb' => 'courage_default_menu',
                        ) );
                        ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>