<div class="container-xxl bg-light py-5 my-5">
    <div class="container py-5">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-6">Services</h1>
            <p class="text-primary fs-5 mb-5">Buy, Sell And Exchange Cryptocurrency</p>
        </div>
        <div class="row g-4">

        	<?php while ( $query -> have_posts () ) : $query->the_post(); ?>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-white p-5">
                    <?php echo the_post_thumbnail('service', ['class' => 'img-fluid mb-4']) ?>
                    <h5 class="mb-3"><?php the_title(); ?></h5>
                    <!-- <?php //the_excerpt(  ); ?> -->
                   <p><?php the_content(); ?></p>
                    <a href="<?php the_permalink(); ?>">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                </div>
            </div>

            <?php 
	          endwhile;
	        ?>
        </div>
    </div>
</div>