<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Yogeemedia
 */

get_header();
?>

<main>
        <!-- page title area  -->
        <section class="page-title-area breadcrumb-spacing" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/bg/breadcrumb-bg.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-9">
                        <div class="page-title-wrapper text-center">
                            <h3 class="page-title mb-25">404</h3>
                            <div class="breadcrumb-menu">
                                <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                    <ul class="trail-items">
                                        <li class="trail-item trail-begin"><a href="index.html"><span>Home</span></a></li>
                                        <li class="trail-item trail-end"><span>404</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end -->

        <!-- blog area start  -->
        <section class="blog-2 pt-120 pb-115">
          
        </section>
        <!-- blog area end  -->
    </main>

<?php
get_footer();
