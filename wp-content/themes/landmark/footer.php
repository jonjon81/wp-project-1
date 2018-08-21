<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Landmark
 */

?>

</div><!-- #content -->
<div class="mobile-version">
    <div class="social-media-row">
        <div class="sign-up-mobile">
            <?php dynamic_sidebar( 'mobile-widget-area-1' ); ?>
            <p>
                Enter email above to receive special <br> offers and promotions.
            </p>
        </div>
        <div class="social-media-icons">
            <div class="sm-icon">
                <a target="_blank" href="https://twitter.com/LMhomesolutions"><img src="<?php echo get_option("siteurl"); ?>/wp-content/uploads/2018/07/Twitter.png" alt="Twitter Icon"></a>
            </div>
            <div class="sm-icon">
                <a target="_blank" href="https://www.facebook.com/LandmarkHomeSolutions"><img src="<?php echo get_option("siteurl"); ?>/wp-content/uploads/2018/07/Facebook.png" alt="Facebook Icon"></a>
            </div>
            <div class="sm-icon">
                <a target="_blank" href="https://www.youtube.com/channel/UCVKu8qGLTxgvIOBn1yxQLHQ"><img src="<?php echo get_option("siteurl"); ?>/wp-content/uploads/2018/07/Youtube.png" alt="Youtube Icon"></a>
            </div>
            <div class="sm-icon">
                <a target="_blank" href="https://plus.google.com/117634887071488195095?hl=en
    "><img src="<?php echo get_option("siteurl"); ?>/wp-content/uploads/2018/07/Google.png" alt="Google Icon"></a>
            </div>
        </div>
    </div>


    <footer id="colophon" class="site-footer">
        <aside class="fatfooter" role="complementary">
            <div class="one-third widget-area">
                <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
            </div><!-- .second .widget-area -->

            <div class="one-third widget-area">
                <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
            </div><!-- .third .widget-area -->

            <div class="one-third widget-area">
                <?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
            </div><!-- .fourth .widget-area -->
        </aside><!-- #fatfooter -->
    </footer>

    <div class="address-row">
        <div class="mobile-logo">
            <a class="logo-link" href="<?php echo get_option("siteurl"); ?>">
                <div class="logo">
                    <img src="<?php echo get_option("siteurl"); ?>/wp-content/uploads/2018/07/Landmark-Sticker.png" alt="Solid Logo">
                </div>
            </a>
        </div>
        <div class="address-section">
            <div class="text-area">
                <span class="location-symbol"><img src="<?php echo get_option("siteurl"); ?>/wp-content/uploads/2018/07/Location-Symbol.png" alt="location symbol"></span>
                <div class="text-section"> 2511 Barton St E, Hamilton, ON L8E 2X1  <br> |   1-866-355-3332   |   info@landmarkquality.com
                </div>
            </div>
        </div>
    </div>
</div>
<div class="desktop-version">
	<footer id="colophon" class="site-footer">
		<?php if( function_exists('slbd_display_widgets') ) { echo slbd_display_widgets(); } ?>
        <aside class="fatfooter" role="complementary">
            <div class="first quarter left widget-area">
                <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
                <p class="clear-on-submit">Enter email above to <br> receive special offers <br> and promotions.</p>
            </div><!-- .first .widget-area -->

            <div class="second quarter widget-area">
                <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
            </div><!-- .second .widget-area -->

            <div class="third quarter widget-area">
                <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
            </div><!-- .third .widget-area -->

            <div class="fourth quarter right widget-area">
                <?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
            </div><!-- .fourth .widget-area -->
        </aside><!-- #fatfooter -->
	</footer><!-- #colophon -->
            <div class="footer-address">
                <div class="address-section">
                    <span class="location-symbol"><img src="<?php echo get_option("siteurl"); ?>/wp-content/uploads/2018/07/Location-Symbol.png" alt="location symbol"></span>
                    <span class="text-area">2511 Barton St E, Hamilton, ON L8E 2X1   |   1-866-355-3332   |   info@landmarkquality.com</span>
                </div>
                <div class="social-media-icons">
                    <div class="sm-icon">
                        <a target="_blank" href="https://twitter.com/LMhomesolutions"><img src="<?php echo get_option("siteurl"); ?>/wp-content/uploads/2018/07/Twitter.png" alt="Twitter Icon"></a>
                    </div>
                    <div class="sm-icon">
                        <a target="_blank" href="https://www.facebook.com/LandmarkHomeSolutions"><img src="<?php echo get_option("siteurl"); ?>/wp-content/uploads/2018/07/Facebook.png" alt="Facebook Icon"></a>
                    </div>
                    <div class="sm-icon">
                        <a target="_blank" href="https://www.youtube.com/channel/UCVKu8qGLTxgvIOBn1yxQLHQ"><img src="<?php echo get_option("siteurl"); ?>/wp-content/uploads/2018/07/Youtube.png" alt="Youtube Icon"></a>
                    </div>
                    <div class="sm-icon">
                        <a target="_blank" href="https://plus.google.com/117634887071488195095?hl=en
"><img src="<?php echo get_option("siteurl"); ?>/wp-content/uploads/2018/07/Google.png" alt="Google Icon"></a>
                    </div>
                </div>
            </div>
</div><!-- #page -->

<?php wp_footer(); ?>
<div class="footer-line"></div>
    <div class="footer-copyright">
        <p>© 2018 Windows & Doors Installation Company — Landmarkquality.com.<br> All Rights Reserved.</p>
        <div class="lets-chat">
            <div class="chat-icon"><img src="<?php echo get_option("siteurl"); ?>/wp-content/uploads/2018/07/Group_.png" alt="Google Icon"></div>
            <div class="text-area">Let's chat!</div>
        </div>
    </div>
</div>
</body>
</html>
