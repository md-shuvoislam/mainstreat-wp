<?php
/**
 * Template Name: Home
 *
 * @package Genesis
 */

get_header();
?>
        <!-- Hero area Start -->
        <div class="hero-area">
            <div class="container">
                <div class="row section-padding hero-area-texts">
                    <div class="col-md-6">
                        <div class="hero-text-left">
                            <?php
                                $herotext = rwmb_meta('hero_text');
                                echo $herotext;
                            ?>
                            <div class="website-btn">
                                <?php $herobtnlink = rwmb_meta('hero_btn_link'); ?>

                                <a href="<?php echo $herobtnlink; ?>">Let’s Connect<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="hero-text-right">
                            <?php
                                $images = rwmb_meta( 'hero_image', array( 'size' => 'full' ) );
                                foreach ( $images as $image ) {
                                    echo '<a href="', $image['full_url'], '"><img src="', $image['url'], '"></a>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area Start -->
                <div class="container">
                    <div class="responsive-menu-wrap"></div>
                </div>
                <!-- Mobile Menu Area End -->
        </div>
        <!-- Hero area Ends -->

        <!-- Services area Start -->
        <div class="services-area section-padding">
            <div class="container">
                <div class="row">
                   <div class="col-md-6 col-md-offset-3 text-center">
                       <div class="services-text">
                            <?php
                                $serviceshe = rwmb_meta('services-heading');
                                echo $serviceshe;
                            ?>
                       </div>
                   </div>
               </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <div class="services-item">
                           <?php $images = rwmb_meta( 'serviceoneimage', array( 'limit' => 1 ) );
                                $image = reset( $images );
                                ?>
                            <img src="<?php echo $image['url']; ?>">
                            <h3>
                                <?php
                                    $serviceoneh = rwmb_meta('serviceoneheading');
                                    echo $serviceoneh;
                                ?>
                            </h3>
                            <p>
                                <?php
                                    $serviceonetxt = rwmb_meta('serviceonetexts');
                                    echo $serviceonetxt;
                                ?>
                            </p>
                            <?php $serviceonebtn = rwmb_meta('serviceonebutton'); ?>
                            <a href="<?php echo $serviceonebtn; ?>" class="readmore-btn">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="services-item">
                             <?php $images = rwmb_meta( 'servicetwoeimage', array( 'limit' => 1 ) );
                                $image = reset( $images );
                                ?>
                            <img src="<?php echo $image['url']; ?>">
                            <h3>
                                <?php
                                    $servicetwoh = rwmb_meta('servicetwoheading');
                                    echo $servicetwoh;
                                ?>
                            </h3>
                            <p>
                                <?php
                                    $servicetwotxt = rwmb_meta('servicetwotexts');
                                    echo $servicetwotxt;
                                ?>
                            </p>
                            <?php $servicetwobtn = rwmb_meta('servicetwobutton'); ?>
                            <a href="<?php echo $servicetwobtn; ?>" class="readmore-btn">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="services-item">

                             <?php $images = rwmb_meta( 'servicethreeeimage', array( 'limit' => 1 ) );
                                $image = reset( $images );
                                ?>
                            <img src="<?php echo $image['url']; ?>">
                            <h3>
                                <?php
                                    $servicetwoh = rwmb_meta('servicethreeheading');
                                    echo $servicetwoh;
                                ?>
                            </h3>
                            <p>
                                <?php
                                    $servicetwotxt = rwmb_meta('servicethreetexts');
                                    echo $servicetwotxt;
                                ?>
                            </p>

                           <?php $servicethreebtn = rwmb_meta('servicethreebutton'); ?>
                            <a href="<?php echo $servicethreebtn; ?>" class="readmore-btn">Read More</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services area ends -->

        <!-- marketing plan area Start -->
        <div class="marketing-plan-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                         <?php
                            $marketingtextss = rwmb_meta('marketingtexts');
                            echo $marketingtextss;
                        ?>
                        <div class="website-btn">
                            <?php $marketingbtn = rwmb_meta('marketingbtnlink'); ?>
                            <a href="<?php echo $marketingbtn; ?>">Call Now<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- marketing plan area Ends -->


        <!-- website buil area Start -->
        <div class="website-build-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <?php
                            $images = rwmb_meta( 'imagewebsite', array( 'size' => 'full' ) );
                            foreach ( $images as $image ) {
                                echo '<a href="', $image['full_url'], '"><img src="', $image['url'], '"></a>';
                            }
                        ?>
                        
                    </div>
                    <div class="col-md-6">
                        <?php
                            $websitetexts = rwmb_meta('website_build_text');
                            echo $websitetexts;
                        ?>
                        <div class="website-btn">
                            <?php $websitebtn = rwmb_meta('website_btn_link'); ?>
                            <a href="<?php echo $websitebtn; ?>">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- website buil area ends -->


        <!-- google area Start -->
        <div class="google-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                         <?php
                            $googletexts = rwmb_meta('goolge_text');
                            echo $googletexts;
                        ?>
                        <div class="website-btn">
                            <?php $googlebtn = rwmb_meta('google_btn_link'); ?>
                            <a href="<?php echo $googlebtn; ?>">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <?php
                            $images = rwmb_meta( 'googleimage', array( 'size' => 'full' ) );
                            foreach ( $images as $image ) {
                                echo '<a href="', $image['full_url'], '"><img src="', $image['url'], '"></a>';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- google area ends -->


        <div class="social-area section-padding">
            <div class="container">
                <div class="row">
                   <div class="col-md-6 col-md-offset-3 text-center">
                       <div class="services-text">
                            <?php
                                $socialhed = rwmb_meta('socialheading');
                                echo $socialhed;
                            ?>
                       </div>
                   </div>
               </div>
                <div class="row">
                    <div class="col-md-6">
                        <?php
                            $images = rwmb_meta( 'socialimage', array( 'size' => 'full' ) );
                            foreach ( $images as $image ) {
                                echo '<a href="', $image['full_url'], '"><img src="', $image['url'], '"></a>';
                            }
                        ?>
                    </div>
                    <div class="col-md-6">
                         <?php
                                $righttext = rwmb_meta('socialrighttext');
                                echo $righttext;
                        ?>
                    
                        <div class="row seo">
                            <div class="col-md-2">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/elips.png" alt="website-build">
                            </div>
                            <div class="col-md-10">
                                <?php
                                    $seotext = rwmb_meta('seotext');
                                    echo $seotext;
                                ?>
                            </div>
                        </div>
                        <div class="row social-media">
                            <div class="col-md-2">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/share-circle.png" alt="website-build">
                            </div>
                            <div class="col-md-10">
                                <?php
                                    $socialtext = rwmb_meta('socialtext');
                                    echo $socialtext;
                                ?>
                            </div>
                        </div>
                        <div class="website-btn">
                            <?php $socialbtn = rwmb_meta('socialbtnlink'); ?>
                            <a href="<?php echo $socialbtn; ?>">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <!-- additional area Start -->
        <div class="google-area additional-area section-padding">
            <div class="container">
                <div class="row">
                   <div class="col-md-12 text-center">
                       <div class="services-text">
                            <?php
                                $socialhed = rwmb_meta('addotonalheading');
                                echo $socialhed;
                            ?>
                       </div>
                   </div>
               </div>
                <div class="row">
                    <div class="col-md-6">
                         <?php
                            $googletexts = rwmb_meta('addition_text');
                            echo $googletexts;
                        ?>
                        <div class="website-btn">
                            <?php $googlebtn = rwmb_meta('addition_btn_link'); ?>
                            <a href="<?php echo $googlebtn; ?>">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <?php
                            $images = rwmb_meta( 'additionimage', array( 'size' => 'full' ) );
                            foreach ( $images as $image ) {
                                echo '<a href="', $image['full_url'], '"><img src="', $image['url'], '"></a>';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- additional area ends -->

        <!-- social review area start-->
        <div class="social-review-area section-padding">
        	<div class="container">
        		<div class="row">
                   <div class="col-md-6 col-md-offset-3 text-center">
                       <div class="services-text">
                            <?php
                                $reviwheading = rwmb_meta('revoewheading');
                                echo $reviwheading;
                            ?>
                       </div>
                   </div>
               </div>
               <div class="rwo">
	               	<div class="col-md-6 text-right">
                        <?php
                            $images = rwmb_meta( 'socialreviewimageone', array( 'size' => 'full' ) );
                            foreach ( $images as $image ) {
                                echo '<a href="', $image['full_url'], '"><img src="', $image['url'], '"></a>';
                            }
                        ?>
	               	</div>
	               	<div class="col-md-6">
                        <?php
                            $images = rwmb_meta( 'socialreviewimagetwo', array( 'size' => 'full' ) );
                            foreach ( $images as $image ) {
                                echo '<a href="', $image['full_url'], '"><img src="', $image['url'], '"></a>';
                            }
                        ?>
	               	</div>
               </div>
        	</div>
        </div>
        <!-- social review area ends-->

        <div class="customer-review-area section-padding">
        	<div class="container">
        		<div class="row">
                   <div class="col-md-6 col-md-offset-3 text-center">
                       <div class="services-text">
                           <p>Our Customers Loves Us</p>
                           <h2>Customer Testimonials</h2>
                       </div>
                   </div>
               </div>
        		<div class="row text-center">
                        <?php
                            $args = array(
                                'post_type'              => 'testimonial',
                                'order'                  => 'DESC',
                                'posts_per_page'         => '-1',
                            );

                            $testimonial = new WP_Query( $args );

                            if ( $testimonial->have_posts() ) {
                                echo '<div class="main-slides owl-carousel owl-theme">';
                                 while ( $testimonial->have_posts() ) {
                                    $testimonial->the_post(); ?>
                                        <div class="item">
                                            <?php the_post_thumbnail(''); ?>
                                            <h3><?php the_title(); ?></h3>
                                            <p><?php the_content(); ?></p> 
                                        </div>                          
                                    <?php   }
                                echo '</div>';
                            } 
                            wp_reset_postdata();             
                        ?>
        		</div>
        	</div>
        </div>


        <!-- contact area start -->
        <div class="contact-area section-padding">
        	<div class="container">
        		<div class="row">
                   <div class="col-md-8 col-md-offset-2 text-center">
                       <div class="services-text">
                           <p>Get In Touch</p>
                           <h2>Have a Question? Let Us Know</h2>
                       </div>
                   </div>
               </div>
               <div class="row text-center">
               	<?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]'); ?>
               </div>
        	</div>
        </div>
        <!-- contact area ends -->

        
        <div class="footer-menu-area">
            <div class="container">
                <?php do_action( 'footer_top' );?>
            </div>
        </div>
<?php
get_footer();
