<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Yogeemedia
 */

?>
<!-- footer area start here -->
<footer data-background="<?php the_field('footer_background_image','option');?>" class="pt-95 position-relative">
        <div class="common-shape-wrapper wow slideInRight animated" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="common-shape-inner wow slideInRight animated" data-wow-delay="0ms" data-wow-duration="1500ms"></div>
        </div>
        <div class="footer-area pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="widget mb-30">
                            <div class="footer-logo mb-25">
                                <a href="index.html"><img src="<?php the_field('company_logo','option');?>" class="img-fluid" alt="footer-logo"></a>
                            </div>
                            <p class="mb-20 pr-35"><?php the_field('block_01_description','option');?></p>
                            <div class="footer-social">
                                <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                                <a href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="widget mb-30">
                            <h4 class="widget-title mb-35"><?php the_field('block_02_title','option');?></h4>
                            <?php  wp_nav_menu(array('menu' => 'links', 'menu_id' => '', 'container' => '', 'menu_class' => '')); ?>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget widget-contact mb-30">
                            <h4 class="widget-title mb-35"><?php the_field('block_03_title','option');?></h4>
                            <ul>
                                <li class="pb-10"><?php the_field('address','option');?></li>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/footer-icon-1.png" class="img-fluid" alt="icon-img"><a href="mailto:<?php the_field('email','option');?>"><?php the_field('email','option');?></a></li>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/footer-icon-2.png" class="img-fluid" alt="icon-img"><a href="tel:94<?php the_field('telephone_number','option');?>">94 <?php the_field('telephone_number','option');?></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget mb-30">
                            <h4 class="widget-title mb-30"><?php the_field('block_04_title','option');?></h4>
                            <p class="mb-20"><?php the_field('block_04_description','option');?></p>
                            <div class="widget-newsletter">
                                
                                    <?php echo do_shortcode('[contact-form-7 id="211" title="Newsletter"]');?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
           <div class="container">
                <div class="copyright-bg">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="copyright">
                                <span>Copyright ©<?php echo date("Y"); ?> Yogeemedia. All Rights Reserved</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="privacy-text text-center text-md-end"> 
                                <ul>
                                    <li>
                                        <a href="contact.html">Terms & Condition</a>
                                        <a href="contact.html">Privacy Policy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end here -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/metisMenu.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/ajax-form.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/backToTop.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/isotope.pkgd.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/aos.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.meanmenu.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper-bundle.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/venobox.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/counter-up.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/wow.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>

	<?php wp_footer(); ?>
</body>

</html>

