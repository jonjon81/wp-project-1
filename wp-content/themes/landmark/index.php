<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Landmark
 */


get_header();


?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="main-section">
				<div class="transparent-logo"><img src="<?php echo get_option("siteurl"); ?>/wp-content/uploads/2018/07/logo-transparent.png" alt="transparent logo"></div>
				<h1>Get up to <br> $5,000 in rebates </h1>
				<h2>for your windows through the Green Ontario Fund.</h2>
				<a href="#">More Details</a>
			</div>
			<div class="testimonial-section">
				<?php echo do_shortcode( '[rt-testimonial id="45" title=""]' ) ?>
			</div>
			<div class="business-areas-section">
				<div class="windows-section business-area">
					<div class="half image-bgrnd"></div>
					<div class="half">
						<h2>Windows</h2>
						<div class="line"></div>
						<p>Bringing the beauty of the outside into your home with style & elegance. Find the right window for your space in our comprehensive product selection. We can help you find the right product at the right price for you.</p>
						<div class="section-buttons">
							<a class="solid" href="#">See More</a><a href="#" class="nobgrnd">Get Started Now</a>
						</div>
					</div>
				</div>
				<div class="doors-section business-area">
					<div class="half image-bgrnd mobile-version"></div>
					<div class="half content-area">
						<h2>Doors</h2>
						<div class="line"></div>
						<p>Don’t wait to make a statement with Landmark’s custom doors. We have several options for all exterior door needs including; entry, garden and sliding patio. Let Landmark improve your curb appeal today.</p>
						<div class="section-buttons">
							<a class="solid" href="#">See More</a><a href="#" class="nobgrnd">Get Started Now</a>
						</div>
					</div>
					<div class="half image-bgrnd desktop-version"></div>
				</div>
				<div class="gutters-section business-area">
					<div class="half image-bgrnd"></div>
					<div class="half">
						<h2>Gutters</h2>
						<div class="line"></div>
						<p>The rain is inevitable, but home damage isn’t. Get protected and be prepared with Landmark’s unbeatable Xtreme Gutter Guard.</p>
						<div class="section-buttons">
							<a class="solid" href="#">See More</a><a href="#" class="nobgrnd">Get Started Now</a>
						</div>
					</div>
				</div>
			</div>
			<div class="call-to-action">
				<h2>First time buyer?</h2>
				<p>As a first time buyer, we can appreciate that buying new windows can be daunting. <br/> Let us help you find your inspiration! </p>
				<a href="<?php echo get_home_url(); ?>/resources">View our resources</a>
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
