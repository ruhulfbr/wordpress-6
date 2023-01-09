<?php

    function cdm_shortcode_element_about($attr, $content=null){
    	extract(
    	   shortcode_atts(['title' => '', 'about_us_text' => '', 'explore_url' => 'javascript:void(0)', 'about_img' => get_template_directory_uri().'/assets/img/icon-1.png'], $attr)
        );
    	ob_start();

        $aboutUsImg = wp_get_attachment_image_src($about_img, 'full');
?>

<div class="container-fluid hero-header bg-light py-5 mb-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 mb-3 animated slideInDown"><?php echo esc_html($title);?></h1>
                <p class="animated slideInDown"><?php echo esc_html($about_us_text);?></p>

                <?php if( !empty($explore_url) ){ ?>
                <a href="<?php echo site_url().'/'.$explore_url; ?>" class="btn btn-primary py-3 px-4 animated slideInDown">Explore More</a>
                <?php } ?>
            </div>
            <div class="col-lg-6 animated fadeIn">
                <img class="img-fluid animated pulse infinite" style="animation-duration: 3s;" src="<?php echo esc_url($aboutUsImg[0]);?>"
                    alt="<?php echo esc_html($title);?>">
            </div>
        </div>
    </div>
</div>

<?php
        return ob_get_clean();
    }

    add_shortcode('cdm_shortcode_about', 'cdm_shortcode_element_about');