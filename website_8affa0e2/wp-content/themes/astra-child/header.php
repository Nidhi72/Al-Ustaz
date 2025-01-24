<?php
/**
 * Custom Header for Astra Child Theme.
 *
 * This template overrides the default Astra header.
 *
 * @package Astra Child
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image:url" content="https://wsarabia.com/images/opengraph.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:type" content="image/jpeg" />

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/inner.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css">

    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/swiper.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,600;1,700&display=swap" rel="stylesheet">

    <title>Western Star General Contracting Establishment</title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- Mini Header -->
    <div class="mini-header">
        <div class="container">
            <div class="top-main">
                <div class="row">
                    <div class="col-md-6">
                        <div class="top-two">
                            <h6>“Building Tomorrow's Kingdom Today”</h6>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="top-one">
                            <ul>
                                <li>
                                    <i class="fa-sharp fa-regular fa-phone-volume"></i><a href="tel:+966548187650">+966 54 818 7650</a>
                                </li>
                                <li>
                                    <i class="fa-regular fa-envelope"></i><a href="mailto:sales@wsarabia.com">sales@wsarabia.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="http://ohm.kzx.mybluehost.me/website_8affa0e2/wp-content/uploads/2024/12/images/logo.png" alt="logo">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active line-one" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link line" href="about.html">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link line" href="#">Business Segments <i class="fa-regular fa-angle-down"></i></a>
                            <ul class="drop-main">
                                <li class="nav-drp">
                                    <a href="scaffolding-and-formwork.html">Scaffolding & Formworks</a>
                                </li>
                                <li class="nav-drp">
                                    <a href="ductile-iron-pipes.html">Ductile Iron Pipes</a>
                                </li>
                                <li class="nav-drp">
                                    <a href="fencing-works.html">Fencing Works</a>
                                </li>
                                <li class="nav-drp">
                                    <a href="ferro-alloys-and-minerals.html">Ferro Alloys and Minerals</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link line" id="btn" href="#">Our ACHIEVEMENTS <i class="fa-regular fa-angle-down"></i></a>
                            <ul class="drop-main" id="box">
                                <li class="nav-drp"><a href="projects.html">Completed Projects </a></li>
                                <li class="nav-drp"><a href="project-photos.html">Project Photos</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link line" href="contact.php">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- Main Content Starts Here -->
    <div id="content" class="site-content">
        <div class="container">
            <?php astra_content_top(); ?>
