<?php
/*
 * Template Name: front page
 * Description: Custom template for single posts
 */
?>
<?php
// Get the header file path from the parent theme
$parent_header = get_template_directory() . '/header.php';

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
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="detail-box">
                                    <h1>
                                        Crypto <br>
                                        Currency
                                    </h1>
                                    <p>
                                        Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.
                                    </p>
                                    <div class="btn-box">
                                        <a href="" class="btn1">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img-box">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider-img.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="detail-box">
                                    <h1>
                                        Crypto <br>
                                        Currency
                                    </h1>
                                    <p>
                                        Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.
                                    </p>
                                    <div class="btn-box">
                                        <a href="" class="btn1">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img-box">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider-img.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="detail-box">
                                    <h1>
                                        Crypto <br>
                                        Currency
                                    </h1>
                                    <p>
                                        Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.
                                    </p>
                                    <div class="btn-box">
                                        <a href="" class="btn1">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img-box">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider-img.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                <li data-target="#customCarousel1" data-slide-to="1"></li>
                <li data-target="#customCarousel1" data-slide-to="2"></li>
            </ol>
        </div>

    </section>
    <!-- end slider section -->
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


<!-- about section -->

<section class="about_section layout_padding">
    <div class="container  ">
        <div class="heading_container heading_center">
            <h2>
                About <span>Us</span>
            </h2>
            <p>
                Magni quod blanditiis non minus sed aut voluptatum illum quisquam aspernatur ullam vel beatae rerum ipsum voluptatibus
            </p>
        </div>
        <div class="row">
            <div class="col-md-6 ">
                <div class="img-box">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/about-img.png" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="detail-box">
                    <h3>
                        We Are Finexo
                    </h3>
                    <p>
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
                        in some form, by injected humour, or randomised words which don't look even slightly believable. If you
                        are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
                        the middle of text. All
                    </p>
                    <p>
                        Molestiae odio earum non qui cumque provident voluptates, repellendus exercitationem, possimus at iste corrupti officiis unde alias eius ducimus reiciendis soluta eveniet. Nobis ullam ab omnis quasi expedita.
                    </p>
                    <a href="">
                        Read More
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end about section -->

<!-- why section -->

<section class="why_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Why Choose <span>Us</span>
            </h2>
        </div>
        <div class="why_container">
            <div class="box">
                <div class="img-box">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/w1.png" alt="">
                </div>
                <div class="detail-box">
                    <h5>
                        Expert Management
                    </h5>
                    <p>
                        Incidunt odit rerum tenetur alias architecto asperiores omnis cumque doloribus aperiam numquam! Eligendi corrupti, molestias laborum dolores quod nisi vitae voluptate ipsa? In tempore voluptate ducimus officia id, aspernatur nihil.
                        Tempore laborum nesciunt ut veniam, nemo officia ullam repudiandae repellat veritatis unde reiciendis possimus animi autem natus
                    </p>
                </div>
            </div>
            <div class="box">
                <div class="img-box">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/w2.png" alt="">
                </div>
                <div class="detail-box">
                    <h5>
                        Secure Investment
                    </h5>
                    <p>
                        Incidunt odit rerum tenetur alias architecto asperiores omnis cumque doloribus aperiam numquam! Eligendi corrupti, molestias laborum dolores quod nisi vitae voluptate ipsa? In tempore voluptate ducimus officia id, aspernatur nihil.
                        Tempore laborum nesciunt ut veniam, nemo officia ullam repudiandae repellat veritatis unde reiciendis possimus animi autem natus
                    </p>
                </div>
            </div>
            <div class="box">
                <div class="img-box">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/w3.png" alt="">
                </div>
                <div class="detail-box">
                    <h5>
                        Instant Trading
                    </h5>
                    <p>
                        Incidunt odit rerum tenetur alias architecto asperiores omnis cumque doloribus aperiam numquam! Eligendi corrupti, molestias laborum dolores quod nisi vitae voluptate ipsa? In tempore voluptate ducimus officia id, aspernatur nihil.
                        Tempore laborum nesciunt ut veniam, nemo officia ullam repudiandae repellat veritatis unde reiciendis possimus animi autem natus
                    </p>
                </div>
            </div>
            <div class="box">
                <div class="img-box">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/w4.png" alt="">
                </div>
                <div class="detail-box">
                    <h5>
                        Happy Customers
                    </h5>
                    <p>
                        Incidunt odit rerum tenetur alias architecto asperiores omnis cumque doloribus aperiam numquam! Eligendi corrupti, molestias laborum dolores quod nisi vitae voluptate ipsa? In tempore voluptate ducimus officia id, aspernatur nihil.
                        Tempore laborum nesciunt ut veniam, nemo officia ullam repudiandae repellat veritatis unde reiciendis possimus animi autem natus
                    </p>
                </div>
            </div>
        </div>
        <div class="btn-box">
            <a href="">
                Read More
            </a>
        </div>
    </div>
</section>

<!-- end why section -->

<!-- team section -->
<section class="team_section layout_padding">
    <div class="container-fluid">
        <div class="heading_container heading_center">
            <h2 class="">
                Our <span> Team</span>
            </h2>
        </div>

        <div class="team_container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="box ">
                        <div class="img-box">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/team-1.jpg" class="img1" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Joseph Brown
                            </h5>
                            <p>
                                Marketing Head
                            </p>
                        </div>
                        <div class="social_box">
                            <a href="#">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box ">
                        <div class="img-box">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/team-2.jpg" class="img1" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Nancy White
                            </h5>
                            <p>
                                Marketing Head
                            </p>
                        </div>
                        <div class="social_box">
                            <a href="#">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box ">
                        <div class="img-box">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/team-3.jpg" class="img1" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Earl Martinez
                            </h5>
                            <p>
                                Marketing Head
                            </p>
                        </div>
                        <div class="social_box">
                            <a href="#">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box ">
                        <div class="img-box">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/team-4.jpg" class="img1" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Josephine Allard
                            </h5>
                            <p>
                                Marketing Head
                            </p>
                        </div>
                        <div class="social_box">
                            <a href="#">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end team section -->


<!-- client section -->

<section class="client_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center psudo_white_primary mb_45">
            <h2>
                What says our <span>Customers</span>
            </h2>
        </div>
        <div class="carousel-wrap ">
            <div class="owl-carousel client_owl-carousel">
                <div class="item">
                    <div class="box">
                        <div class="img-box">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/client1.jpg" alt="" class="box-img">
                        </div>
                        <div class="detail-box">
                            <div class="client_id">
                                <div class="client_info">
                                    <h6>
                                        LusDen
                                    </h6>
                                    <p>
                                        magna aliqua. Ut
                                    </p>
                                </div>
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <div class="img-box">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/client2.jpg" alt="" class="box-img">
                        </div>
                        <div class="detail-box">
                            <div class="client_id">
                                <div class="client_info">
                                    <h6>
                                        Zen Court
                                    </h6>
                                    <p>
                                        magna aliqua. Ut
                                    </p>
                                </div>
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <div class="img-box">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/client1.jpg" alt="" class="box-img">
                        </div>
                        <div class="detail-box">
                            <div class="client_id">
                                <div class="client_info">
                                    <h6>
                                        LusDen
                                    </h6>
                                    <p>
                                        magna aliqua. Ut
                                    </p>
                                </div>
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <div class="img-box">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/client2.jpg" alt="" class="box-img">
                        </div>
                        <div class="detail-box">
                            <div class="client_id">
                                <div class="client_info">
                                    <h6>
                                        Zen Court
                                    </h6>
                                    <p>
                                        magna aliqua. Ut
                                    </p>
                                </div>
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end client section -->

<?php get_footer(); ?>