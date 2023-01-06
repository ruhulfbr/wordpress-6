<!DOCTYPE html>
<html lang="<?php language_attributes() ?>" class="no-js">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5">
        <a href="<?php echo home_url(); ?>" class="navbar-brand d-flex align-items-center">
            <h2 class="m-0 text-primary"><img class="img-fluid me-2" src="<?php echo get_theme_mod('cdm_logo'); ?>" alt="<?php echo get_bloginfo( 'name' ); ?>" style="width: 45px;"><?php echo get_bloginfo( 'name' ); ?></h2>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#main_menu_area">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse pull-right" id="main_menu_area">
            <?php wp_nav_menu( array('theme_location' => 'main_menu', 'menu_id' => 'nav_area') ); ?>

            <!-- <div class="navbar-nav ms-auto py-4 py-lg-0">
                <a href="<?php echo home_url(); ?>" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="service.html" class="nav-item nav-link">Service</a>
                <a href="roadmap.html" class="nav-item nav-link">Roadmap</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu shadow-sm m-0">
                        <a href="feature.html" class="dropdown-item">Feature</a>
                        <a href="token.html" class="dropdown-item">Token Sale</a>
                        <a href="faq.html" class="dropdown-item">FAQs</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div> -->
            <div class="h-100 d-lg-inline-flex align-items-center d-none">
                <a class="btn btn-square rounded-circle bg-light text-primary me-2" href=""><i
                        class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square rounded-circle bg-light text-primary me-2" href=""><i
                        class="fab fa-twitter"></i></a>
                <a class="btn btn-square rounded-circle bg-light text-primary me-0" href=""><i
                        class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->



