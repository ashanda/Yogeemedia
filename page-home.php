<?php
/*
Template Name: Home Page
*/
?>
<?php get_header();  ?> 
<main>
        <!-- slider area start here -->
        <section class="slider-area fix position-relative">
            <div class="slider-active swiper-container">
                <div class="swiper-wrapper">
                <?php if( have_rows('home_slider') ): ?>
                  <?php while( have_rows('home_slider') ): the_row(); 
                    $image = get_sub_field('slider_image');
                    ?>
                    <div class="single-slider slider-height swiper-slide" data-swiper-autoplay="10000">
                        <div class="slide-bg" data-background="<?php echo $image['url']; ?>"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="kslider z-index">
                                        <h5 class="kslider--subtitle mb-25" data-animation="fadeInUp" data-delay="0.3s"><?php the_sub_field('main_title'); ?></h5>
                                        <h2 class="kslider--title mb-40" data-animation="fadeInUp" data-delay="0.5s"><?php the_sub_field('sub_title'); ?></h2>
                                        <div class="kslider--btn" data-animation="fadeInUp" data-delay="0.7s">
                                            <a href="<?php the_sub_field('button_link'); ?>" class="theme-btn"><?php the_sub_field('button_text'); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-shape shape-1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slider-shape-1.png" class="img-fluid" alt="shape-img"></div>
                        <div class="slide-shape shape-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slider-shape-2.png" class="img-fluid" alt="shape-img"></div>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>  
                </div>
                <!-- If we need pagination -->
                <div class="slider-paginations slide-dots"></div>
            </div>
        </section>
        <!-- slider area end here -->

        <!-- service area start here -->
        <section class="service-area pt-120 pb-130" data-background="<?php the_field('service_area_background_image');?>">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xxl-5 col-lg-6">
                        <div class="kservice-text mb-50" data-aos="fade-right" data-aos-duration="1000">
                            <h5 class="kservice-text-subtitle mb-15"><?php the_field('service_area_sub_title');?></h5>
                            <h2 class="kservice-text-title mb-40"><?php the_field('service_area_title');?></h2>
                            <p class="mb-45"><?php the_field('service_area_description');?></p>
                            <div class="kservice-author">
                                <div class="kservice-author-img mr-30">
                                    <img src="<?php the_field('service_area_author_image');?>" class="img-fluid" alt="author-img">
                                </div>
                                <div class="kservice-author-sign">
                                    <span><?php the_field('service_area_author_signature');?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-lg-6">
                        <div class="row custom-mar-20" data-aos="fade-down" data-aos-duration="1000">
                            <div class="col-sm-6 custom-pad-20">
                                <div class="kservice text-center mb-20">
                                    <div class="kservice-icon">
                                        <i class="flaticon-analytics"></i>
                                    </div>
                                    <div class="kservice-content">
                                        <h5 class="kservice-content-title"><a href="<?php the_field('service_area_category_01_link');?>"><?php the_field('service_area_category_01_title');?></a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 custom-pad-20">
                                <div class="kservice text-center mb-20">
                                    <div class="kservice-icon">
                                        <i class="flaticon-marketing"></i>
                                    </div>
                                    <div class="kservice-content">
                                        <h5 class="kservice-content-title"><a href="<?php the_field('service_area_category_02_link');?>"><?php the_field('service_area_category_02_title');?></a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 custom-pad-20">
                                <div class="kservice text-center mb-20">
                                    <div class="kservice-icon">
                                        <i class="flaticon-profile"></i>
                                    </div>
                                    <div class="kservice-content">
                                        <h5 class="kservice-content-title"><a href="<?php the_field('service_area_category_03_link');?>"><?php the_field('service_area_category_03_title');?></a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 custom-pad-20">
                                <div class="kservice text-center mb-20">
                                    <div class="kservice-icon">
                                        <i class="flaticon-website"></i>
                                    </div>
                                    <div class="kservice-content">
                                        <h5 class="kservice-content-title"><a href="<?php the_field('service_area_category_04_link');?>"><?php the_field('service_area_category_04_title');?></a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service area end here -->

        <!-- cta area start here -->
        <section class="cta-area mt--60 z-index" data-aos="fade-up">
            <div class="container">
                <div class="cta-bg bg-theme">
                    <div class="cta-number">
                        <div class="cta-number-icon mr-30">
                            <i class="flaticon-reaction"></i>
                        </div>
                        <div class="cta-number-text fix">
                            <span class="uppercase"><?php the_field('contact_area_title');?></span>
                            <h3><a href="tell:<?php the_field('telephone_number','option')?>"><?php the_field('telephone_number','option')?></a></h3>
                        </div>
                    </div>
                    <div class="cta-description">
                        <p><?php the_field('contact_area_description');?></p>
                    </div>
                    <div class="cta-btn text-lg-end text-start">
                        <a href="<?php the_field('contact_area_button_link');?>" class="theme-btn black-btn"><?php the_field('contact_area_button_text');?></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta area end here -->

        <!-- about area start here -->
        <section class="about-area pt-120 pb-70 fix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="kabout-img mb-50 mr-70" data-aos="zoom-out-up" data-swiper-autoplay="10000">
                            <div class="kabout-img-shape"></div>
                            <img src="<?php the_field('about_area_large_image');?>" class="img-fluid z-index" alt="about-img">
                            <div class="kabout-img-small">
                                <img src="<?php the_field('about_area_small_image');?>" class="img-fluid" alt="about-img">
                                <div class="kabout-img-small-icon play_btn">
                                    <span>
                                        <i class="flaticon-idea"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="kabout mb-50" data-aos="zoom-out-down" data-swiper-autoplay="10000">
                            <div class="section-title-wrapper mb-45">
                                <h5 class="section-subtitle mb-20"><?php the_field('about_area_sub_title');?></h5>
                                <h2 class="section-title mb-35"><?php the_field('about_area_title');?></h2>
                                <p><?php the_field('about_area_description');?></p>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="kabout-service mb-30">
                                        <h4 class="kabout-service-title"><?php the_field('about_service_block_left');?></h4>
                                        <p><?php the_field('about_service_block_left_description');?></p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="kabout-service mb-30">
                                        <h4 class="kabout-service-title"><?php the_field('about_service_block_right');?></h4>
                                        <p><?php the_field('about_service_block_right_description');?></p>
                                    </div>
                                </div>
                            </div>
                            <ul class="mt-20 mb-55">
                            <?php if( have_rows('about_area_key_points') ): ?>
                            
                            <?php while( have_rows('about_area_key_points') ): the_row();?>
                                <li>
                               <i class="fal fa-check"></i> <?php the_sub_field('points'); ?>   
                                </li>
                            <?php endwhile; ?>
                           
                        <?php endif; ?>
                                
                            </ul>
                            <div class="kabout-btn">
                                <a href="<?php the_field('about_area_button_link');?>" class="theme-btn border-btn"><?php the_field('about_area_button_text');?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about area end here -->
        
        <!-- project area strat here -->
        <section class="project-area bg-grey pt-115 pb-400 fix" >
            <div class="common-shape-wrapper wow slideInRight animated" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="common-shape-inner"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="section-title-wrapper mb-45">
                            <h5 class="section-subtitle mb-20"><?php the_field('project_area_sub_title');?></h5>
                            <h2 class="section-title"><?php the_field('project_area_title');?></h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="lol text-md-end">
                            <!-- If we need navigation buttons -->
                            <div class="project-button-prev slide-prev"><i class="far fa-long-arrow-left"></i></div>
                             <div class="project-button-next slide-next"><i class="far fa-long-arrow-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-active swiper-container">
                <div class="swiper-wrapper">
                    <div class="kproject swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project/project-img-1.jpg" class="img-fluid" alt="project_img">
                        <div class="kproject-text">
                            <div class="kproject-text-content">
                                <span>Graphic</span>
                                <h5 class="kproject-text-title"><a href="project-details.html">Fimlor Experience</a></h5>
                            </div>
                            <div class="kproject-text-icon">
                                <a href="project-details.html"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="kproject swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project/project-img-2.jpg" class="img-fluid" alt="project_img">
                        <div class="kproject-text">
                            <div class="kproject-text-content">
                                <span>Web Design</span>
                                <h5 class="kproject-text-title"><a href="project-details.html">Fimlor Experience</a></h5>
                            </div>
                            <div class="kproject-text-icon">
                                <a href="project-details.html"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="kproject swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project/project-img-3.jpg" class="img-fluid" alt="project_img">
                        <div class="kproject-text">
                            <div class="kproject-text-content">
                                <span>Web Development</span>
                                <h5 class="kproject-text-title"><a href="project-details.html">Fimlor Experience</a></h5>
                            </div>
                            <div class="kproject-text-icon">
                                <a href="project-details.html"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="kproject swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project/project-img-4.jpg" class="img-fluid" alt="project_img">
                        <div class="kproject-text">
                            <div class="kproject-text-content">
                                <span>Networking</span>
                                <h5 class="kproject-text-title"><a href="project-details.html">Fimlor Experience</a></h5>
                            </div>
                            <div class="kproject-text-icon">
                                <a href="project-details.html"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="kproject swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project/project-img-1.jpg" class="img-fluid" alt="project_img">
                        <div class="kproject-text">
                            <div class="kproject-text-content">
                                <span>Graphic</span>
                                <h5 class="kproject-text-title"><a href="project-details.html">Fimlor Experience</a></h5>
                            </div>
                            <div class="kproject-text-icon">
                                <a href="project-details.html"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="kproject swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project/project-img-2.jpg" class="img-fluid" alt="project_img">
                        <div class="kproject-text">
                            <div class="kproject-text-content">
                                <span>Web Design</span>
                                <h5 class="kproject-text-title"><a href="project-details.html">Fimlor Experience</a></h5>
                            </div>
                            <div class="kproject-text-icon">
                                <a href="project-details.html"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="kproject swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project/project-img-3.jpg" class="img-fluid" alt="project_img">
                        <div class="kproject-text">
                            <div class="kproject-text-content">
                                <span>Web Devolopment</span>
                                <h5 class="kproject-text-title"><a href="project-details.html">Fimlor Experience</a></h5>
                            </div>
                            <div class="kproject-text-icon">
                                <a href="project-details.html"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- project area end here -->
        
        <!-- video area start here -->
        <section class="video-area z-index">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title-wrapper mb-45 text-center">
                            <h5 class="section-subtitle mb-20">one minute video</h5>
                            <h2 class="section-title mb-35">Watch video work</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="kvideo-wrapper" data-aos="zoom-in" data-aos-duration="1000">
                            <div class="kvideo" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/bg/video-bg.jpg">
                                <div class="kvideo-sign text-center">
                                    <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://youtu.be/KgWzysP29Vg"><i class="fas fa-play"></i></a>
                                    <h2>Watch Video</h2>
                                </div>
                                <div class="kvideo-number">
                                    <span>get estimate</span>
                                    <a href="tel:6668880000">666 888 0000</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- video area end here -->

        <!-- testimonial area start here -->
        <section class="testimonial-area pt-115 pb-85">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrapper text-center mb-45">
                            <h5 class="section-subtitle mb-20">client testimonials</h5>
                            <h2 class="section-title mb-35">What they say?</h2>
                        </div>
                    </div>
                </div>

                <div class="testimonial-active swiper-container">
                    <div class="swiper-wrapper">
                        <div class="ktestimonial mb-30 swiper-slide">
                            <div class="ktestimonial-text">
                                <p>I was very impresed by the kimox service lorem ipsum is simply free text used by copy typing refreshing. Neque porro est qui dolorem ipsum.</p>
                            </div>
                            <div class="ktestimonial-author">
                                <div class="ktestimonial-author-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial/testimonial-img-1.jpg" class="img-fluid" alt="client-img">
                                </div>
                                <div class="ktestimonial-author-text">
                                    <h5 class="uppercase">Jessica Brown</h5>
                                    <span class="uppercase">Customer</span>
                                </div>
                            </div>
                        </div>
                        <div class="ktestimonial mb-30 swiper-slide">
                            <div class="ktestimonial-text">
                                <p>Reliable accessible UI components: :focus styles, content sliders, dark mode, date pickers, navigation, modals, radio buttons Neque porro est qui.</p>
                            </div>
                            <div class="ktestimonial-author">
                                <div class="ktestimonial-author-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial/testimonial-img-2.jpg" class="img-fluid" alt="client-img">
                                </div>
                                <div class="ktestimonial-author-text">
                                    <h5 class="uppercase">Mike Hardson</h5>
                                    <span class="uppercase">Customer</span>
                                </div>
                            </div>
                        </div>
                        <div class="ktestimonial mb-30 swiper-slide">
                            <div class="ktestimonial-text">
                                <p>Useful CSS tools for animations, border-radius, CSS shadows, cubic-bezier curves, easing gradients, filters, placeholders, CSS Grid.</p>
                            </div>
                            <div class="ktestimonial-author">
                                <div class="ktestimonial-author-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial/testimonial-img-3.jpg" class="img-fluid" alt="client-img">
                                </div>
                                <div class="ktestimonial-author-text">
                                    <h5 class="uppercase">Sarah Albert</h5>
                                    <span class="uppercase">Customer</span>
                                </div>
                            </div>
                        </div>
                        <div class="ktestimonial mb-30 swiper-slide">
                            <div class="ktestimonial-text">
                                <p>I was very impresed by the kimox service lorem ipsum is simply free text used by copy typing refreshing. Neque porro est qui dolorem ipsum.</p>
                            </div>
                            <div class="ktestimonial-author">
                                <div class="ktestimonial-author-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial/testimonial-img-4.jpg" class="img-fluid" alt="client-img">
                                </div>
                                <div class="ktestimonial-author-text">
                                    <h5 class="uppercase">Melinda Brown</h5>
                                    <span class="uppercase">Customer</span>
                                </div>
                            </div>
                        </div>
                        <div class="ktestimonial mb-30 swiper-slide">
                            <div class="ktestimonial-text">
                                <p>Core Web Vitals, CrUX, Lighthouse, performance budgets, CSS & JavaScript performance, assets optimizations, build optimizations.</p>
                            </div>
                            <div class="ktestimonial-author">
                                <div class="ktestimonial-author-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial/testimonial-img-5.jpg" class="img-fluid" alt="client-img">
                                </div>
                                <div class="ktestimonial-author-text">
                                    <h5 class="uppercase">Andrew Tye</h5>
                                    <span class="uppercase">Customer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial area end here -->

        <!-- brand area end here -->
        <div class="brand-area pt-100 pb-100">
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
        <!-- brand area start here -->

        <!-- trust area start here -->
        <section class="trust-area pt-105 pb-120">
           <div class="trust-bg" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/trust/trust-bg.jpg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="ktrust text-center z-index">
                            <h2 class="ktrust-title mb-45 wow fadeInUp" data-wow-delay=".2s">Trust the Experts for All <br>Your business Needs</h2>
                            <div class="ktrust-btn">
                                <a href="service.html" class="theme-btn">Discover more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- trust area end here -->
        
        <!-- blog area start here -->
        <section class="blog-area pt-120" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog-bg-1.jpg">
            <div class="blog-space pb-120">
                <div class="blog-text pt-60" data-aos="zoom-in">
                    <div class="section-title-wrapper pr-25 mb-50">
                        <h5 class="section-subtitle mb-20">recent blog posts</h5>
                        <h2 class="section-title mb-35">Latest News & Articles</h2>
                        <p class="pr-50">Lorem ipsum onts persp unde omnis iste natus errluptatem acc usantium demque laudantium totam.</p>
                    </div>
                    <!-- If we need navigation buttons -->
                   <div class="kblog-arrow">
                        <div class="blog-button-prev slide-prev"><i class="far fa-long-arrow-left"></i></div>
                        <div class="blog-button-next slide-next"><i class="far fa-long-arrow-right"></i></div> 
                   </div>
                </div>
                <div class="blog-active swiper-container">
                    <div class="swiper-wrapper">
                        <div class="kblog swiper-slide">
                            <div class="kblog-img">
                                <a href="blog-details.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog-img-1.jpg" class="img-fluid" alt="blog-img"></a>
                                <span>20 May</span>
                            </div>
                            <div class="kblog-text">
                                <div class="kblog-meta">
                                    <a href="blog-details.html"><i class="fal fa-user-circle"></i> by Admin</a>
                                    <a href="blog-details.html"><i class="fal fa-comments"></i> 2 Comments</a>
                                </div>
                                <h3 class="kblog-text-title mb-20"><a href="blog-details.html">Our Strategy Create Business Growth</a></h3>
                                <div class="kblog-text-link">
                                    <a href="blog-details.html">Read more <i class="far fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="kblog swiper-slide">
                            <div class="kblog-img">
                                <a href="blog-details.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog-img-2.jpg" class="img-fluid" alt="blog-img"></a>
                                <span>21 May</span>
                            </div>
                            <div class="kblog-text">
                                <div class="kblog-meta">
                                    <a href="blog-details.html"><i class="fal fa-user-circle"></i> by Admin</a>
                                    <a href="blog-details.html"><i class="fal fa-comments"></i> 3 Comments</a>
                                </div>
                                <h3 class="kblog-text-title mb-20"><a href="blog-details.html">We work with change oriented executives</a></h3>
                                <div class="kblog-text-link">
                                    <a href="blog-details.html">Read more <i class="far fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="kblog swiper-slide">
                            <div class="kblog-img">
                                <a href="blog-details.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog-img-3.jpg" class="img-fluid" alt="blog-img"></a>
                                <span>22 May</span>
                            </div>
                            <div class="kblog-text">
                                <div class="kblog-meta">
                                    <a href="blog-details.html"><i class="fal fa-user-circle"></i> by Admin</a>
                                    <a href="blog-details.html"><i class="fal fa-comments"></i> 4 Comments</a>
                                </div>
                                <h3 class="kblog-text-title mb-20"><a href="blog-details.html">From banking and insurance to wealth</a></h3>
                                <div class="kblog-text-link">
                                    <a href="blog-details.html">Read more <i class="far fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="kblog swiper-slide">
                            <div class="kblog-img">
                                <a href="blog-details.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog-img-4.jpg" class="img-fluid" alt="blog-img"></a>
                                <span>23 May</span>
                            </div>
                            <div class="kblog-text">
                                <div class="kblog-meta">
                                    <a href="blog-details.html"><i class="fal fa-user-circle"></i> by Admin</a>
                                    <a href="blog-details.html"><i class="fal fa-comments"></i> 2 Comments</a>
                                </div>
                                <h3 class="kblog-text-title mb-20"><a href="blog-details.html">Our Strategy Create Business Growth</a></h3>
                                <div class="kblog-text-link">
                                    <a href="blog-details.html">Read more <i class="far fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="kblog swiper-slide">
                            <div class="kblog-img">
                                <a href="blog-details.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog-img-5.jpg" class="img-fluid" alt="blog-img"></a>
                                <span>24 May</span>
                            </div>
                            <div class="kblog-text">
                                <div class="kblog-meta">
                                    <a href="blog-details.html"><i class="fal fa-user-circle"></i> by Admin</a>
                                    <a href="blog-details.html"><i class="fal fa-comments"></i> 3 Comments</a>
                                </div>
                                <h3 class="kblog-text-title mb-20"><a href="blog-details.html">We work with change oriented executives</a></h3>
                                <div class="kblog-text-link">
                                    <a href="blog-details.html">Read more <i class="far fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog area end here -->
        
        <!-- quality area start here -->
        <section class="quality-area pt-120 pb-90 fix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="kquality mb-30" data-aos="zoom-in-right">
                            <div class="kquality-icon">
                                <i class="flaticon-website"></i>
                            </div>
                            <div class="kquality-text fix">
                                <h3 class="mb-20 kquality-text-title">We Deliver the Best Quality</h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered in some form, by injected humour words.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="text-lg-end mb-30" data-aos="zoom-in-left">
                            <div class="kquality-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/trust/cta-img.jpg" class="img-fluid" alt="cta-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- quality area end here -->

        <!-- map area start here -->
        <div class="map-area">
        <?php the_field('location','option');?>
        </div>
        <!-- map area end here -->

    </main>


<?php get_footer(); ?>	