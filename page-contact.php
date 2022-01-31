<?php
/*
Template Name: Contact us Page
*/
?>
<?php get_header();  ?> 
<main>
<?php get_template_part("innerbanner");?>

        <!-- contact area  -->
        <section class="contact-area pt-120 pb-80 fix">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-5 col-xl-6 col-lg-6">
                        <div class="section-title-wrapper mb-15">
                            <h5 class="section-subtitle mb-20">contact with us</h5>
                            <h2 class="section-title">Speak with our
                                consultant</h2>
                        </div>
                        <div class="contact-info mr-50 mr-xs-0  mr-md-0">
                            <div class="single-contact-info d-flex align-items-center">
                                <div class="contact-info-icon">
                                    <a href="#"><i class="fad fa-comments"></i></a>
                                </div>
                                <div class="contact-info-text mt-10">
                                    <span>Call Anytime</span>
                                    <h5><a href="tell:94<?php the_field('telephone_number','option');?>">94 <?php the_field('telephone_number','option');?></a></h5>
                                </div>
                            </div>
                            <div class="single-contact-info d-flex align-items-center">
                                <div class="contact-info-icon">
                                    <a href="#"><i class="fal fa-envelope"></i></a>
                                </div>
                                <div class="contact-info-text mt-10">
                                    <span>send email</span>
                                    <h5><a href="mailto:<?php the_field('email','option');?>"><?php the_field('email','option');?></a> </h5>
                                </div>
                            </div>
                            <div class="single-contact-info d-flex align-items-center">
                                <div class="contact-info-icon">
                                    <a href="#"><i class="fal fa-map-marker-alt"></i></a>
                                </div>
                                <div class="contact-info-text mt-10">
                                    <span>visit office</span>
                                    <h5><a href="#"><?php the_field('address','option');?></a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-7 col-xl-6 col-lg-6">
                        <div class="contact-form">
                        <?php echo do_shortcode('[contact-form-7 id="207" title="Contact us"]');?>
                            
                            <p class="ajax-response"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact area end -->

        <!-- cta area  -->
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

        <!-- contact map area  -->
        <div class="contact-map">
            <div id="contact-map">
            <?php the_field('location','option');?>
            </div>
        </div>
        <!-- contact map area end  -->
    </main>



<?php get_footer(); ?>	