<?php
// Wordpress Shordcode
function basic_shortcoder(){
  return "CDM is a advanced learner";
}
add_shortcode( 'cdm', 'basic_shortcoder');


function button_shortcode( $atts, $content = null ){
  $values = shortcode_atts( array (
    'url' => '#',
  ), $atts );
  return '<a class="button" href="'.esc_attr($values['url']) .'">' . $content . '</a>';
}

add_shortcode( 'button', 'button_shortcode');


// Shortcode & Custom Post
function service_shotcode( $atts ) {
  ob_start();
  $query = new WP_Query( array(
    'post_type' => 'service',
    'posts_per_page' => 3,
    'order' => 'ASC',
    'orderby' => 'title',
  ));
  if ( $query -> have_posts()) { ?>

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

    <?php $myvariable = ob_get_clean();
    return $myvariable;
  }
}
add_shortcode( 'cdm_service', 'service_shotcode');