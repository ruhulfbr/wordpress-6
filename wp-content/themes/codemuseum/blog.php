  <?php get_header(); ?>

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
                  </div>
                  <div class="col-md-3">
                    <h2>This is sidebar area</h2>
                  </div>
              </div>
          </div>

          <div id="page_nav">
            <?php if ('ali_pagenav') {ali_pagenav(); } else{ ?>
                <?php next_posts_link(); ?>
                <?php previous_posts_link(); ?>
            <?php } ?>
          </div>
  
      </div>
  </section>

      <!-- Get Footer from footer.php -->
    <?php get_footer(); ?>
