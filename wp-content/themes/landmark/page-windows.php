<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Landmark
 */


get_header();


?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="main-section windows-section">
                <h1>Windows</h1>
                <h2>Bringing the beauty of the outside into your home with style, the right window for your space can be found in our comprehensive product selection. We can help you find the right product at the right price for your home.</h2>
                <a href="#">Get a Quote</a>
            </div>
            <div id="windows-gallery" class="windows-gallery main-style">
                <h2>Gallery</h2>
                <div class="line"></div>
                <p class="lower-margin intro-text">Need some inspiration? Check out some of our Before & After window photos.</p>
                <div id="sliderOuter">
                    <div id="sliderContainer">
                        <div class="arrow-layer">
                            <div class="left-button arrow-button">
                                <img src="<?php echo get_option("siteurl"); ?>/wp-content/uploads/2018/08/left-arrow.png" alt="Left Button">
                            </div>
                            <div class="right-button arrow-button">
                                <img src="<?php echo get_option("siteurl"); ?>/wp-content/uploads/2018/08/right-arrow.png" alt="Right Button">
                            </div>
                            <div class="hide-overflow">
                                <div id="sliderWrapper">
                                    <div class="slider before-image one">
                                        <span>Before</span>
                                    </div>
                                    <div class="slider after-image one">
                                        <span>After</span>
                                    </div>
                                    <div class="slider before-image two">
                                        <span>Before</span>
                                    </div>
                                    <div class="slider after-image two">
                                        <span>After</span>
                                    </div>
                                    <div class="slider before-image three">
                                        <span>Before</span>
                                    </div>
                                    <div class="slider after-image three">
                                        <span>After</span>
                                    </div>
                                    <div class="slider before-image four">
                                        <span>Before</span>
                                    </div>
                                    <div class="slider after-image four">
                                        <span>After</span>
                                    </div>
                                    <div class="slider before-image five">
                                        <span>Before</span>
                                    </div>
                                    <div class="slider after-image five">
                                        <span>After</span>
                                    </div>
                                    <div class="slider before-image six">
                                        <span>Before</span>
                                    </div>
                                    <div class="slider after-image six">
                                        <span>After</span>
                                    </div>
                                    <div class="slider before-image seven">
                                        <span>Before</span>
                                    </div>
                                    <div class="slider after-image seven">
                                        <span>After</span>
                                    </div>
                                    <div class="slider before-image eight">
                                        <span>Before</span>
                                    </div>
                                    <div class="slider after-image eight">
                                        <span>After</span>
                                    </div>
                                    <div class="slider before-image nine">
                                        <span>Before</span>
                                    </div>
                                    <div class="slider after-image nine">
                                        <span>After</span>
                                    </div>
                                    <div class="slider before-image ten">
                                        <span>Before</span>
                                    </div>
                                    <div class="slider after-image ten">
                                        <span>After</span>
                                    </div>
                                    <div class="slider before-image eleven">
                                        <span>Before</span>
                                    </div>
                                    <div class="slider after-image eleven">
                                        <span>After</span>
                                    </div>
                                    <div class="slider before-image twelve">
                                        <span>Before</span>
                                    </div>
                                    <div class="slider after-image twelve">
                                        <span>After</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="hide-overflow">
                        <div class="gallery-previews">
                            <div id="1" class="preview active"></div>
                            <div id="2" class="preview"></div>
                            <div id="3" class="preview"></div>
                            <div id="4" class="preview"></div>
                            <div id="5" class="preview"></div>
                            <div id="6" class="preview"></div>
                            <div id="7" class="preview"></div>
                            <div id="8" class="preview"></div>
                            <div id="9" class="preview"></div>
                            <div id="10" class="preview"></div>
                            <div id="11" class="preview"></div>
                            <div id="12" class="preview"></div>
                            <button class="return-to-start solid"> < Return to Start</button>
                        </div>
                    </div>
                </div>
                </div>
            </div><!-- window gallery -->
            <div id="window-types" class="main-style types inner">
                <h2>Window Types</h2>
                <div class="line"></div>
                <ul class="center-padding">
                    <li>
                        <div class="icon-container hinge-crank">
                            <span>Hinge/Crank</span>
                             <div class="hover-off"><img src="<?php echo get_option("siteurl"); ?>/wp-content/uploads/2018/08/hinge-crank-icon.png" alt="Hinge/Crank"></div>
                             <div class="hover-on"><img src="<?php echo get_option("siteurl"); ?>/wp-content/uploads/2018/08/hinge-crank-icon-hover.png" alt="Hinge/Crank"></div>
                        </div>
                    </li>
                    <li>
                        <div class="icon-container single-hung">
                            <span>Single Hung</span>
                            <img class="hover-off" src="<?php echo get_option("siteurl"); ?>/wp-content/uploads/2018/08/single-hung-icon.png" alt="Single Hung">
                            <img class="hover-on" src="<?php echo get_option("siteurl"); ?>/wp-content/uploads/2018/08/single-hung-icon-hover.png" alt="Single Hung">
                        </div>
                    </li>
                    <li>
                        <div class="icon-container double-hung">
                            <span>Double Hung</span>
                            <img class="hover-off" src="<?php echo get_option("siteurl"); ?>/wp-content/uploads/2018/08/double-hung-icon.png" alt="Double Hung">
                            <img class="hover-on" src="<?php echo get_option("siteurl"); ?>/wp-content/uploads/2018/08/double-hung-icon-hover.png" alt="Double Hung">
                        </div>
                    </li>
                    <li>
                        <div class="icon-container">
                            <span>Bay/Bow</span>
                            <img class="hover-off" src="<?php echo get_option("siteurl"); ?>/wp-content/uploads/2018/08/bay-bow-icon.png" alt="Bay/Bow">
                            <img class="hover-on" src="<?php echo get_option("siteurl"); ?>/wp-content/uploads/2018/08/bay-bow-icon-hover.png" alt="Bay/Bow">
                        </div>
                    </li>
                    <li>
                        <div class="icon-container">
                            <span>Horizontal Sliders</span>
                            <img class="hover-off" src="<?php echo get_option("siteurl"); ?>/wp-content/uploads/2018/08/horizontal-slider-icon.png" alt="Horizontal Sliders">
                            <img class="hover-on" src="<?php echo get_option("siteurl"); ?>/wp-content/uploads/2018/08/horizontal-slider-icon-hover.png" alt="Horizontal Sliders">
                        </div>
                    </li>
                    <li>
                        <div class="icon-container">
                            <span>Fixed</span>
                            <img class="hover-off" src="<?php echo get_option("siteurl"); ?>/wp-content/uploads/2018/08/fixed-icon.png" alt="Fixed">
                            <img class="hover-on" src="<?php echo get_option("siteurl"); ?>/wp-content/uploads/2018/08/fixed-icon-hover.png" alt="Fixed">
                        </div>
                    </li>
                    <li>
                        <div class="icon-container">
                        <span>Custom/Shapes</span>
                            <img class="hover-off" src="<?php echo get_option("siteurl"); ?>/wp-content/uploads/2018/08/custom-icon.png" alt="Custom">
                            <img class="hover-on" src="<?php echo get_option("siteurl"); ?>/wp-content/uploads/2018/08/custom-icon-hover.png" alt="Custom">
                        </div>
                    </li>
                </ul>
                <p class="button-text">Learn More</p>
            </div>
            <div class="hidden-content">
                <div class="carousel-holder">
                    <?php echo do_shortcode( '[slide-anything id="184"]' ) ?>
                 </div>
                <div class="learn-more-button-container">
                    <img class="learn-more-button" src="<?php echo get_option("siteurl"); ?>/wp-content/uploads/2018/08/learn-more-button.png" alt="Custom">
                    <div class="left-button hidden-left arrow-button">
                        <img src="<?php echo get_option("siteurl"); ?>/wp-content/uploads/2018/08/left-arrow.png" alt="Left Button">
                    </div>
                    <div class="right-button arrow-button hidden-right">
                        <img src="<?php echo get_option("siteurl"); ?>/wp-content/uploads/2018/08/right-arrow.png" alt="Right Button">
                    </div>
                </div>
            </div>
            <div id="wt-hinge-crank-casement-shortcode" class="slider-shortcode"><?php echo do_shortcode('[metaslider id="292"]');?></div>
            <div id="wt-single-hung-shortcode" class="slider-shortcode"><?php echo do_shortcode('[metaslider id="243"]');?></div>
            <div id="wt-double-hung-shortcode" class="slider-shortcode"><?php echo do_shortcode('[metaslider id="306"]');?></div>
            <div id="wt-bay-bow-shortcode" class="slider-shortcode"><?php echo do_shortcode('[metaslider id="317"]');?></div>
            <div id="wt-hinge-crank-awnings-shortcode" class="slider-shortcode"><?php echo do_shortcode('[metaslider id="367"]');?></div>
            <div id="wt-horizontal-sliders-shortcode" class="slider-shortcode"><?php echo do_shortcode('[metaslider id="330"]');?></div>
            <div id="wt-fixed-shortcode" class="slider-shortcode"><?php echo do_shortcode('[metaslider id="245"]');?></div>
            <div id="wt-custom-shortcode" class="slider-shortcode"><?php echo do_shortcode('[metaslider id="357"]');?></div>
            <div id="window-installation" class="main-style inner installation">
                <h2>Installation</h2>
                <div class="line"></div>
                <p>We know a lot of thought goes into major home improvement projects, so we make sure to keep you informed all along the way, from order status to the installation well be by your side. </p>
                <p>Our installers ensure that your home is treated as they would their own, maintaining a neat and tidy work area, and any debris is always cleaned up and hauled away. Landmark has a certified AAMA trainer on staff so we can ensure high quality installations.</p>
                <p>When You’re installation is completed, we will walk you through your home to inspect the work and ensure you know how to properly operate and clean each window before we leave.</p>

                <ul class="what-to-expect">
                    <p>What you can expect:</p>
                    <li><img src="<?php echo get_option("siteurl"); ?>/wp-content/uploads/2018/08/landmark-bullet.png" alt="Landmark bullet">Your home to be treated with care and respect</li>
                    <li><img src="<?php echo get_option("siteurl"); ?>/wp-content/uploads/2018/08/landmark-bullet.png" alt="Landmark bullet">Our crew will arrive at the expected time on the day of installation, assuming no problems with traffic, weather or other circumstances beyond our control.</li>
                    <li><img src="<?php echo get_option("siteurl"); ?>/wp-content/uploads/2018/08/landmark-bullet.png" alt="Landmark bullet">Clean and safe work space</li>
                    <li><img src="<?php echo get_option("siteurl"); ?>/wp-content/uploads/2018/08/landmark-bullet.png" alt="Landmark bullet">Install one window at a time leaving the opening in your wall exposed no more than a few minutes at a time.</li>
                    <li><img src="<?php echo get_option("siteurl"); ?>/wp-content/uploads/2018/08/landmark-bullet.png" alt="Landmark bullet">Certified AAMA, professional installers</li>
                    <li><img src="<?php echo get_option("siteurl"); ?>/wp-content/uploads/2018/08/landmark-bullet.png" alt="Landmark bullet">Highest quality materials & construction techniques</li>
                </ul>
                <p>Our goal is to make replacing your windows and doors simple & easy with Landmark.</p>
                <div class="window-installation"></div>
            </div>
            <div class="blue-line-outer"><div class="blue-line"></div></div>
            <div id="window-manufacturing" class="main-style inner manufacturing">
                <h2>Manufacturing</h2>
                <div class="line"></div>
                <p>At Landmark Home Solutions Inc. we have a passion for manufacturing, our promise is to make quality products that will last a lifetime. We are so confident in our production capabilities we guarantee it for a lifetime.</p>
                <ul>
                    <p>Our plant has contently expanded:</p>
                    <li>In 1996, Landmark trademarked and began production of our own exclusive line on custom made, energy efficient windows which we still produce today.
                    </li>
                    <li>In 2000, Landmark became the exclusive manufacturer and installer to Ontario Hydro Energy and was chosen solely from 700+ other applicants, to run the Ontario Hydro Energy Window Program
                    </li>
                    <li>In 2015 we added a paint booth to keep up with consumer demand on coloured windows
                    </li>
                </ul>
                <p>After your measurements have been confirmed by an installer, your order will move on to our manufacturing plant. All of your Landmark Windows and Doors will be custom made by our manufacturing technicians. These technicians personally assess each and every window and door that comes out of our factory to ensure you are getting the absolute best.</p>
            </div>
            <div class="blue-line-outer"><div class="blue-line"></div></div>
            <div id="window-warranty" class="main-style inner lifetime-warranty">
                <h2>Lifetime Warranty</h2>
                <div class="line"></div>
                <p>Unlike most of our competitors Landmark’s warranty is designed to protect you the homeowner. </p>
                <h3>Our Warranty:</h3>
                <ul class="center-padding">
                    <li><span>Lasts a Lifetime</span><div class="circle"></div></li>
                    <li><span>Is Transferrable</span><div class="circle"></div></li>
                    <li><span>Gives Piece of Mind</span><div class="circle"></div></li>
                </ul>
            </div>
            <div class="more-information">
                <div class="content">
                    <h4>Looking for more information?</h4>
                    <h2>Book your free <br /> in-home consultation</h2>
                    <a href="#">Let's get started</a>
                </div>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php
get_footer();
