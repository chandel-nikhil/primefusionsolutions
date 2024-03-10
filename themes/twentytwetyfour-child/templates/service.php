<?php
/*
 * Template Name: about us page
 * Description: about us page template
 */
?>
<?php
// Get the header file path from the parent theme
$parent_header = get_template_directory() . '/parts/header.html';

// Check if the parent header file exists
if (file_exists($parent_header)) {
    // Include the parent header
    include_once $parent_header;
} else {
    // If the parent header doesn't exist, fall back to the child theme's header
    get_header();
}
?>

<div class="hero_area">
    <div class="hero_bg_box">
        <div class="bg_img_box">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hero-bg.png" alt="">
        </div>
    </div>
</div>


<!-- service section -->

<section class="service_section layout_padding">
    <div class="service_container">
        <div class="container ">
            <div class="heading_container heading_center">
                <h2>
                    Our <span>Services</span>
                </h2>
                <p>
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
                </p>
            </div>
            <div class="row">
                <div class="col-md-4 ">
                    <div class="box ">
                        <div class="img-box">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/s1.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Currency Wallet
                            </h5>
                            <p>
                                fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                The
                                point of using
                            </p>
                            <a href="">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="box ">
                        <div class="img-box">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/s2.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Security Storage
                            </h5>
                            <p>
                                fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                The
                                point of using
                            </p>
                            <a href="">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="box ">
                        <div class="img-box">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/s3.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Expert Support
                            </h5>
                            <p>
                                fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                The
                                point of using
                            </p>
                            <a href="">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-box">
                <a href="">
                    View All
                </a>
            </div>
        </div>
    </div>
</section>

<!-- end service section -->