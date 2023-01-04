    
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
                    <?php
                      if (have_posts()) :
                        while (have_posts()) : the_post();
                    ?>
                    <div class="blog_area">
                        <div class="post_thumb">
                          <a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('post-thumbnails'); ?></a>
                        </div>
                        <div class="post_details">
                          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                          <?php the_excerpt(); ?>
                        </div>
                    </div>
                      <?php
                        endwhile;
                        else :
                          _e('No post found');
                        endif;
                      ?>

                      <div id="page_nav">
                        <?php if ('cdm_pagenav') {cdm_pagenav(); } else{ ?>
                            <?php next_posts_link(); ?>
                            <?php previous_posts_link(); ?>
                        <?php } ?>
                      </div>
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