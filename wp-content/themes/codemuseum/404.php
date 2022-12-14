<!-- Get Header from header.php -->
<?php get_header(); ?>

<!-- 404 Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                <h1 class="display-1">404</h1>
                <h1 class="mb-4">Page Not Found</h1>

                <div class="error_search mt-1 mb-2">
                    <?php get_search_form(); ?>
                </div>

                <p class="mb-4">We’re sorry, the page you have looked for does not exist in our website! Maybe go to
                    our home page or try to use a search?</p>
                <a class="btn btn-primary py-3 px-4" href="<?php echo home_url(); ?>">Go Back To Home</a>
            </div>
        </div>
    </div>
</div>
<!-- 404 End -->

<!-- Get Footer from footer.php -->
    <?php get_footer(); ?>