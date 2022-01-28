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
                                <h5 class="section-subtitle mb-20"><?php the_field('mission_area_sub_title');?></h5>
                                <h2 class="section-title mb-35"><?php the_field('mission_area_title');?></h2>
                                <p><?php the_field('mission_area_italic_description');?></p>
                            </div>
                            <p class="mb-45"><?php the_field('mission_area_description');?>
                            </p>
                            <div class="ktrust-btn">
                                <a href="<?php the_field('button_link');?>" class="theme-btn border-btn"><?php the_field('button_text');?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="kintro-img mb-30" data-aos="fade-right" data-aos-duration="1000">
                            <img src="<?php the_field('mission_area_image');?>" class="img-fluid" alt="about-img">
                            <div class="mission-img-text">
                                <h4><?php the_field('mission_area_text');?>
                                </h4>
                                <a href="<?php the_field('link');?>"><?php the_field('link_text');?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- mission area end  -->

        <!-- testimonial area start here -->
        <section class="testimonial-area pt-115 pb-85">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrapper text-center mb-45">
                            <h5 class="section-subtitle mb-20"><?php the_field('testimonials_sub_title');?></h5>
                            <h2 class="section-title mb-35"><?php the_field('testimonials_area_title');?></h2>
                        </div>
                    </div>
                </div>

                <div class="testimonial-active swiper-container">
                    <div class="swiper-wrapper">
                    <?php if( have_rows('reviews') ): ?>
                        <?php while( have_rows('reviews') ): the_row(); 
                            $image = get_sub_field('customer_image');
                            ?>
                        <div class="ktestimonial mb-30 swiper-slide">
                            <div class="ktestimonial-text">
                                <p><?php the_sub_field('descriptions'); ?></p>
                            </div>
                            <div class="ktestimonial-author">
                                <div class="ktestimonial-author-img">
                                    <img src="<?php echo $image["url"]; ?>" class="img-fluid" alt="client-img">
                                </div>
                                <div class="ktestimonial-author-text">
                                    <h5 class="uppercase"><?php the_sub_field('customer_name'); ?></h5>
                                    <span class="uppercase"><?php the_sub_field('customer_jobrole'); ?></span>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial area end here -->

        <!-- fact area start here -->
        <section class="fact-area pb-85" data-background="<?php the_field('facts_area_background_image');?>">
            <div class="container">
                <div class="fun-fact text-center pb-80">
                    <span><?php the_field('fact_area_title');?></span>
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
                                <h5 class="section-subtitle mb-20"><?php the_field('about_area_sub_title');?></h5>
                                <h2 class="section-title mb-35"><?php the_field('about_area_title');?></h2>
                            </div>
                            <p><?php the_field('about_area_description');?>
                            </p>
                            <div class="why-tab-list">
                            <?php if( have_rows('about_area_points') ): ?>
                            <ul>
                            <?php while( have_rows('about_area_points') ): the_row();?>
                                <li><i class="fal fa-check"></i>R<?php the_sub_field('points'); ?></li> 
                            <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
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
                    <?php if( have_rows('our_team') ): ?>
                    <?php while( have_rows('our_team') ): the_row(); 
                        $image = get_sub_field('profile_image');
                        ?>
                        <div class="kteam swiper-slide mb-30">
                                            <div class="kteam-img">
                                                <img src="<?php echo $image['url']; ?>" class="img-fluid" alt="team-img">
                                                
                                            </div>
                                            <div class="kteam-text text-center">
                                                <h4 class="kteam-title"><?php the_sub_field('name'); ?></h4>
                                                <span class="uppercase"><?php the_sub_field('role'); ?></span>
                                            </div>
                                        </div>
                        
                    <?php endwhile; ?>
                    
                <?php endif; ?>
                
                    </div>
                </div>
            </div>
        </section>
        <!-- team area end here -->

        <!-- brand area end here -->
        <div class="brand-area pt-100 pb-100">
            <div class="container">
                <div class="brand-active swiper-container">
                    <div class="swiper-wrapper align-items-center">
                    <?php if( have_rows('brand_slider') ): ?>
   
                        <?php while( have_rows('brand_slider') ): the_row(); 
                            $image = get_sub_field('brand_image');
                            ?>
                            <div class="brand-wrapper swiper-slide wow fadeInUp" data-wow-delay=".3s" data-swiper-autoplay="10000">
                            <a href="#"><img src="<?php echo $image['url']; ?>" class="img-fluid" alt="img"></a>
                            </div>
                        <?php endwhile; ?>
                    
                    <?php endif; ?>
                        
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- brand area start here -->
    </main>


<?php get_footer(); ?>	