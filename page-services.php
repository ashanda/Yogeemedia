<?php
/*
Template Name: Services Page
*/
?>
<?php get_header();  ?> 
<main>
<?php get_template_part("innerbanner");?>

        <!-- service area start here -->
        <section class="service-2 pt-120 pb-90">
            <div class="container">
                <div class="row">
                <?php
                        $loop = new WP_Query(
                            array(
                                'post_type' => 'service',
                                'posts_per_page' => 4 
                            )
                        );
                        while ( $loop->have_posts() ) : $loop->the_post();
                        // The content you want to loop goes in here:
                        ?>
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="kservice-2 mb-30 wow fadeInUp" data-wow-duration=".3s">
                            <div class="kservice-text-2">
                                <span>Services</span>
                                <h4 class="kservice-title-2"><a href="<?php echo get_permalink();?>"><?php the_field('service_page_title');?></a></h4>
                                
                            </div>
                            <div class="kservice-img-2">
                                <img src="<?php the_field('service_image_in_service_page');?>" class="img-fluid" alt="service-img">
                            </div>
                        </div>
                    </div>
                    <?php endwhile;
                    wp_reset_postdata();
                    ?>
                   
                   
                   
                </div>
            </div>
        </section>
        <!-- service area end here -->

        <!-- about area start here -->
        <section class="why-we bg-grey pt-120 pb-125 pb-md-110 position-relative">
            <div class="common-shape-wrapper wow slideInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="common-shape-inner wow slideInleft animated" data-wow-delay="0ms" data-wow-duration="1500ms"></div>
            </div>
            <div class="container z-index">
                <div class="row justify-content-between">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="provide-thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/about-img-7.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="provide-content">
                            <div class="section-title-wrapper mb-25">
                                <h5 class="section-subtitle mb-20">All Categories List</h5>
                                <h2 class="section-title mb-35">We provide a best <br>
                                    services
                                </h2>
                                <p>There are many variations of pass of lorem ipsum available but the majority have suffered alteration in some form.</p>
                            </div>
                            <p>Injected humour randomised words which don't look even slightly believable you need to be sure there isn't anything embarrassing.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about area end here -->

        <!-- service area start here -->
        <section class="service-area service-area2 pt-115 pb-100" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/service/service-bg.jpg">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xxl-6 col-lg-6">
                        <div class="kservice-text mb-50 aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">
                            <h5 class="kservice-text-subtitle mb-15">All Categories List</h5>
                            <h2 class="kservice-text-title mb-40">The Services <br>We’re Offering</h2>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-lg-6">
                        <div class="kservice-text mb-50 aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">
                            <p class="mb-45 mt-35 mt-md-0 mt-xs-0">There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form by injected humour.</p>
                        </div>
                    </div>
                </div>

                <div class="row custom-mar-20 aos-init aos-animate" data-aos="fade-down" data-aos-duration="1000">
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-sm-6 custom-pad-20">
                        <div class="kservice text-center mb-20">
                            <div class="kservice-icon">
                                <i class="flaticon-analytics"></i>
                            </div>
                            <div class="kservice-content">
                                <h5 class="kservice-content-title"><a href="service-details.html">Website <br>Development</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-sm-6 custom-pad-20">
                        <div class="kservice text-center mb-20">
                            <div class="kservice-icon">
                                <i class="flaticon-marketing"></i>
                            </div>
                            <div class="kservice-content">
                                <h5 class="kservice-content-title"><a href="service-details.html">Graphic <br>Designing</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-sm-6 custom-pad-20">
                        <div class="kservice text-center mb-20">
                            <div class="kservice-icon">
                                <i class="flaticon-profile"></i>
                            </div>
                            <div class="kservice-content">
                                <h5 class="kservice-content-title"><a href="service-details.html">SEO &amp; Content <br>writting</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-sm-6 custom-pad-20">
                        <div class="kservice text-center mb-20">
                            <div class="kservice-icon">
                                <i class="flaticon-website"></i>
                            </div>
                            <div class="kservice-content">
                                <h5 class="kservice-content-title"><a href="service-details.html">Digital <br>marketing</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service area end here -->

        <!-- brand area end here -->
        <div class="brand-area3  pt-100 pb-100">
            <div class="container">
                <div class="brand-active swiper-container">
                    <div class="swiper-wrapper align-items-center">
                        <div class="brand-wrapper swiper-slide wow fadeInUp" data-wow-delay=".3s" data-swiper-autoplay="10000">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/brand-1.png" class="img-fluid" alt="img"></a>
                        </div>
                        <div class="brand-wrapper swiper-slide wow fadeInUp" data-wow-delay=".6s" data-swiper-autoplay="10000">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/brand-2.png" class="img-fluid" alt="img"></a>
                        </div>
                        <div class="brand-wrapper swiper-slide wow fadeInUp" data-wow-delay=".9s" data-swiper-autoplay="10000">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/brand-3.png" class="img-fluid" alt="img"></a>
                        </div>
                        <div class="brand-wrapper swiper-slide wow fadeInUp" data-wow-delay="1.2s" data-swiper-autoplay="10000">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/brand-4.png" class="img-fluid" alt="img"></a>
                        </div>
                        <div class="brand-wrapper swiper-slide wow fadeInUp" data-wow-delay="1.5s" data-swiper-autoplay="10000">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/brand-5.png" class="img-fluid" alt="img"></a>
                        </div>
                        <div class="brand-wrapper swiper-slide wow fadeInUp" data-wow-delay="1.8s" data-swiper-autoplay="10000">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/brand-1.png" class="img-fluid" alt="img"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- service area end-->

        <!-- quality area start here -->
        <section class="quality-area pt-120 pb-90 fix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-9">
                        <div class="kquality mb-30 aos-init aos-animate" data-aos="zoom-in-right">
                            <div class="kquality-icon">
                                <i class="flaticon-website"></i>
                            </div>
                            <div class="kquality-text fix">
                                <h3 class="mb-20 kquality-text-title">We Deliver the Best Quality</h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered in some form, by injected humour words.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-3">
                        <div class="text-lg-end mb-30 aos-init aos-animate" data-aos="zoom-in-left">
                            <div class="kquality-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/trust/cta-img.jpg" class="img-fluid" alt="cta-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- quality area start here -->
    </main>

<?php get_footer(); ?>	