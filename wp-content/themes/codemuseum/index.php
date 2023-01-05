    
    <!-- Get Header from header.php -->
    <?php get_header(); ?>

    <!-- Header Start -->
    <div class="container-fluid hero-header bg-light py-5 mb-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 mb-3 animated slideInDown">Make Better Life With Trusted CryptoCoin</h1>
                    <p class="animated slideInDown">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
                        diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo
                        magna dolore erat amet</p>
                    <a href="" class="btn btn-primary py-3 px-4 animated slideInDown">Explore More</a>
                </div>
                <div class="col-lg-6 animated fadeIn">
                    <img class="img-fluid animated pulse infinite" style="animation-duration: 3s;" src="img/hero-1.png"
                        alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

     <section id="body_area">
      <div class="container-fluid hero-header bg-light py-5 mb-5">
          <div class="container py-5">
              <div class="row">
                  <div class="col-md-9">
                    <?php get_template_part('template_part/blog_setup'); ?>
                  </div>
                  <div class="col-md-3">
                    <?php get_sidebar(); ?>
                  </div>
              </div>
          </div>
  
      </div>
  </section>

    <!-- Get Footer from footer.php -->
    <?php get_footer(); ?>