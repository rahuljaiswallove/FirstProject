

<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!$this->session->userdata('activeDashboard')) {
    redirect(base_url('login'));
}
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <!-- ==============================================
        Basic Page Needs
        =============================================== -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->

    <title>NEXGEN DASHBOARD</title>

    <meta name="description" content="Business, Consulting, Finance, Insurance, Startup and Technology">
    <meta name="subject" content="Business, Consulting, Finance, Insurance, Startup and Technology">
    <meta name="author" content="Codings">

    <!-- ==============================================
        Favicons
        =============================================== -->
    <link rel="shortcut icon" href="modules/assets/images/favicon.ico">
    <link rel="apple-touch-icon" href="modules/assets/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="modules/assets/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="modules/assets/images/apple-touch-icon-114x114.png">

    <!-- ==============================================
        Vendor Stylesheet
        =============================================== -->
    <link rel="stylesheet" href="modules/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="modules/assets/css/vendor/slider.min.css">
    <link rel="stylesheet" href="modules/assets/css/main.css">
    <link rel="stylesheet" href="modules/assets/css/vendor/icons.min.css">
    <link rel="stylesheet" href="modules/assets/css/vendor/icons-fa.min.css">
    <link rel="stylesheet" href="modules/assets/css/vendor/animation.min.css">
    <link rel="stylesheet" href="modules/assets/css/vendor/gallery.min.css">
    <link rel="stylesheet" href="modules/assets/css/vendor/cookie-notice.min.css">

    <!-- ==============================================
        Custom Stylesheet
        =============================================== -->
    <link rel="stylesheet" href="modules/assets/css/default.css">

    <!-- ==============================================
        Theme Color
        =============================================== -->
    <meta name="theme-color" content="#21333e">

    <!-- ==============================================
        Theme Settings
        =============================================== -->
    <style>
        :root {
            --hero-bg-color: #080d10;

            --section-1-bg-color: #ffffff;
            --section-2-bg-color: #111117;
            --section-3-bg-color: #111117;
            --section-4-bg-color: #ffffff;
            --section-5-bg-color: #eef4ed;
            --section-6-bg-color: #111117;
            --section-7-bg-color: #ffffff;

            --footer-bg-color: #080d10;
            --footer-bg-image: url('modules/assets/images/bg-7.jpg');
        }
    </style>

</head>

<body class="home">
    <!-- Header -->
    <header id="header">

        <!-- Top Navbar -->
        <nav class="navbar navbar-expand top">
            <div class="container header">

                <!-- Navbar Items [left] -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="home-1.html#" class="nav-link pl-0"><i class="fas fa-clock mr-2"></i>Open Hours: Mon - Sat - 9:00 - 18:00</a>
                    </li>
                </ul>

                <!-- Nav holder -->
                <div class="ml-auto"></div>

                <!-- Navbar Items [right] -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="home-1.html#" class="nav-link"><i class="fas fa-phone-alt mr-2"></i>+1 (305) 1234-5678</a>
                    </li>
                    <li class="nav-item">
                        <a href="home-1.html#" class="nav-link"><i class="fas fa-envelope mr-2"></i>hello@example.com</a>
                    </li>
                </ul>

                <!-- Navbar Icons -->
                <ul class="navbar-nav icons">
                    <li class="nav-item social">
                        <a href="home-1.html#" class="nav-link"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="nav-item social">
                        <a href="home-1.html#" class="nav-link"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="nav-item social">
                        <a href="home-1.html#" class="nav-link pr-0"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                </ul>

            </div>
        </nav>

        <!-- Navbar -->
        <nav class="navbar navbar-expand navbar-fixed sub">
            <div class="container header">

                <!-- Navbar Brand-->
                <a class="navbar-brand" href="<?php echo base_url(''); ?>">
                    <span class="brand">
                        <span class="featured">
                            <span class="first">NEX</span>
                        </span>
                        <span class="last">GEN</span>
                    </span>

                </a>

                <!-- Nav holder -->
                <div class="ml-auto"></div>

                <!-- Navbar Items -->
                <ul class="navbar-nav items">
                    <li class="nav-item dropdown">
                        <a href="home-1.html#" class="nav-link">HOME <i class="icon-arrow-down"></i></a>

                    </li>
                    <li class="nav-item dropdown">
                        <a href="home-1.html#" class="nav-link">PAGES <i class="icon-arrow-down"></i></a>

                    </li>
                    <li class="nav-item dropdown">
                        <a href="home-1.html#" class="nav-link">BLOG <i class="icon-arrow-down"></i></a>

                    </li>
                    <li class="nav-item dropdown">
                        <a href="home-1.html#" class="nav-link">PARTS <i class="icon-arrow-down"></i></a>

                    </li>
                </ul>

                <!-- Navbar Icons -->
                <ul class="navbar-nav icons">
                    <li class="nav-item">
                        <a href="home-1.html#" class="nav-link" data-toggle="modal" data-target="#search">
                            <i class="icon-magnifier"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url(''); ?>" class="nav-link">
                            <i class="icon-user"></i>
                        </a>
                    </li>
                </ul>

                <!-- Navbar Toggle -->
                <ul class="navbar-nav toggle">
                    <li class="nav-item">
                        <a href="home-1.html#" class="nav-link" data-toggle="modal" data-target="#menu">
                            <i class="icon-menu m-0"></i>
                        </a>
                    </li>
                </ul>

                <!-- Navbar Action -->
                <ul class="navbar-nav action">
                    <li class="nav-item ml-3">
                        <a href="https://themeforest.net/item/nexgen-corporate-business-consulting-html-template/27965988?license=regular&open_purchase_for_item_id=27965988" target="_blank" class="btn ml-lg-auto primary-button">PURSHASE</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>