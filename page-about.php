<?php
/*
Template Name: About Page
*/
?>
<?php get_header();  ?> 
<main>
<?php get_template_part("innerbanner");?>

        <!-- mission area  -->
        <section class="mission-area pt-120 fix">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="kintro-text mr-xs-0 mr-md-0 mr-lg-0 mr-70 mb-30" data-aos="fade-left" data-aos-duration="1000">
                            <div class="section-title-wrapper mb-25">
                                <h5 class="section-subtitle mb-20">get to know us</h5>
                                <h2 class="section-title mb-35">Our Mission is to
                                    become the best
                                    agency</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing available in the market for free uses.</p>
                            </div>
                            <p class="mb-45">Lorem ipsum dolor sit amet nsectetur cing elit. Suspe ndisse suscipit sagittis leo
                                sit met entum is not estibulum dignissim posuere cubilia durae. Leo sit met entum cubilia crae.
                                but also the leap into electronic typesetting. 
                            </p>
                            <div class="ktrust-btn">
                                <a href="service.html" class="theme-btn border-btn">Discover more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="kintro-img mb-30" data-aos="fade-right" data-aos-duration="1000">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/about-img-6.jpg" class="img-fluid" alt="about-img">
                            <div class="mission-img-text">
                                <h4>We’re committed to
                                    trusted Agency
                                </h4>
                                <a href="project.html">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- mission area end  -->

        <!-- testimonial area start here -->
        <section class="testimonial-area pb-85 pt-85">
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

        <!-- fact area start here -->
        <section class="fact-area pb-85" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/bg/fact-bg.jpg">
            <div class="container">
                <div class="fun-fact text-center pb-80">
                    <span>Our fun facts</span>
                </div>
            </div>
            <div class="container">
                <div class="row gx-0">
                    <div class="col-lg-3 col-sm-6">
                        <div class="kfact text-center mb-30 wow fadeInUp" data-wow-duration=".3s">
                            <div class="kfact-icon">
                                <i class="flaticon-goal"></i>
                            </div>
                            <h2 class="kfact-title counter">3456</h2>
                            <span>Project completed</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="kfact text-center mb-30 wow fadeInUp" data-wow-duration=".6s">
                            <div class="kfact-icon">
                                <i class="flaticon-team"></i>
                            </div>
                            <h2 class="kfact-title counter">2842</h2>
                            <span>Happy Client</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="kfact text-center mb-30 wow fadeInUp" data-wow-duration=".9s">
                            <div class="kfact-icon">
                                <i class="flaticon-talent"></i>
                            </div>
                            <h2 class="kfact-title counter">3178</h2>
                            <span>Total Project</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="kfact kfact-last-child text-center mb-30 wow fadeInUp" data-wow-duration="1s">
                            <div class="kfact-icon">
                                <i class="flaticon-group"></i>
                            </div>
                            <h2 class="kfact-title counter">1845</h2>
                            <span>Our Employee</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- fact area end here -->

        <!-- about area start here -->
        <section class="why-we bg-grey pt-125 pb-75 position-relative fix">
            <div class="common-shape-wrapper wow slideInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="common-shape-inner"></div>
            </div>
            <div class="container z-index">
                <div class="row justify-content-between">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="choose-left mb-40 mr-xs-0 mr-md-0 mr-lg-0 mr-90" data-aos="fade-up-right" data-aos-duration="1000">
                            <div class="section-title-wrapper">
                                <h5 class="section-subtitle mb-20">All Categories List</h5>
                                <h2 class="section-title mb-35">Why Choose our agency</h2>
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                            </p>
                            <div class="why-tab-list">
                                <ul>
                                    <li><i class="fal fa-check"></i>Refresing to get such a personal touch.</li>
                                    <li><i class="fal fa-check"></i>Duis aute irure dolor in reprehenderit in voluptate.</li>
                                    <li><i class="fal fa-check"></i>Velit esse cillum dolore eu fugiat nulla pariatur.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="choose-right" data-aos="fade-left" data-aos-duration="1000">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        How to process the funtion for development?
                                    </button>
                                  </h2>
                                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>There are many variations of passages of available but the majority have suffered alteration in that some form by injected randomised words which don’t look even as slightly believable.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Where should I incorporate my business?
                                    </button>
                                  </h2>
                                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Web fonts are often terrible for web performance and none of the font loading strategies are particularly effective to address that. Upcoming font options may finally deliver on the promise.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        How there are many variations of passages
                                    </button>
                                  </h2>
                                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Front-end and design are remarkably complex these days. That’s why we invite kind, smart folks from the community to run online workshops for all of us to learn together. And we have new ones.</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about area end here -->

        <!-- team area start here -->
        <section class="team-area pt-115 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title-wrapper text-center mb-50">
                            <h5 class="section-subtitle mb-20">professional people</h5>
                            <h2 class="section-title mb-35">Meet the team</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="team-active2 swiper-container">
                    <div class="swiper-wrapper">
                        <div class="kteam swiper-slide mb-30">
                            <div class="kteam-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team-img-1.jpg" class="img-fluid" alt="team-img">
                                <div class="kteam-img-social">
                                    <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                                    <a href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="kteam-text text-center">
                                <h4 class="kteam-title">sarah albert</h4>
                                <span class="uppercase">designer</span>
                            </div>
                        </div>
                        <div class="kteam swiper-slide mb-30">
                            <div class="kteam-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team-img-2.jpg" class="img-fluid" alt="team-img">
                                <div class="kteam-img-social">
                                    <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                                    <a href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="kteam-text text-center">
                                <h4 class="kteam-title">Mike Hardson</h4>
                                <span class="uppercase">developer</span>
                            </div>
                        </div>
                        <div class="kteam swiper-slide mb-30">
                            <div class="kteam-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team-img-3.jpg" class="img-fluid" alt="team-img">
                                <div class="kteam-img-social">
                                    <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                                    <a href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="kteam-text text-center">
                                <h4 class="kteam-title">Christine eve</h4>
                                <span class="uppercase">Programmer</span>
                            </div>
                        </div>
                        <div class="kteam swiper-slide mb-30">
                            <div class="kteam-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team-img-4.jpg" class="img-fluid" alt="team-img">
                                <div class="kteam-img-social">
                                    <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                                    <a href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="kteam-text text-center">
                                <h4 class="kteam-title">John Smith</h4>
                                <span class="uppercase">artist</span>
                            </div>
                        </div>
                        <div class="kteam swiper-slide mb-30">
                            <div class="kteam-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team-img-5.jpg" class="img-fluid" alt="team-img">
                                <div class="kteam-img-social">
                                    <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                                    <a href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="kteam-text text-center">
                                <h4 class="kteam-title">melinda albert</h4>
                                <span class="uppercase">writter</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team area end here -->

        <!-- brand area end here -->
        <div class="brand-area2 bg-grey pt-100 pb-100">
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
    </main>


<?php get_footer(); ?>	