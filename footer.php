<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package meraki_theme
 */

?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/footer.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
	</div> <!-- closing tag for main container element from header.php -->
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'meraki_theme' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'meraki_theme' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'meraki_theme' ), 'meraki_theme', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
		<div class="container windowed">
			<div class="merakiLogo">
				<img class="whiteMeraki" src="<?php echo get_template_directory_uri() ?>/meraki-logo-white.png">
			</div>
		</div>

		<div class="container windowed">
			<div class="mainLists">
			<div class="footerList">
				<label>Interact</label>
				<ul>
					<li><a href="#">Contact us</a></li>
					<li><a href="#">Upcoming Events</a></li>
					<li><a href="#">Community Networks</a></li>
				</ul>
			</div>

			<div class="footerList2">
				<label>Product & Services</label>
				<ul>
					<li><a href="#">Organisational Strategic Planning</a></li>
					<li><a href="#">Serious Incidents</a></li>
					<li><a href="#">Assurance</a></li>
				</ul>				
			</div>
			</div>
		</div>

		<div class="container windowed">

			<div class="verticalLine">
				<img src="<?php echo get_template_directory_uri(); ?>/verticalLine.png">
			</div>

			<div class="verticalLine2">
				<img src="<?php echo get_template_directory_uri(); ?>/verticalLine.png">
			</div>
		</div>

		<label class="follow">Follow us on:</label>

		<div class="container windowed">
				<div class="social">
					<span class="icon facebook"><a href="#" class="fab fa-facebook-f"></a></span>

					<span class="icon instagram"><a href="#" class="fab fa-instagram"></a></span>
					
					<span class="icon twitter"><a href="#" class="fab fa-twitter"></a></span>
				
					<span class="icon linkedin"><a href="#" class="fab fa-linkedin-in"></a></span>
				</div>
		</div>

		<div>
		<hr class="bottomLine">

		<div class="container windowed">
			<label class="rights">©2020 Meraki. All rights reserved</label>
		</div>

		<div class="container windowed">
			<div class="lastList">
				<ul>
					<li><a href="#">Terms and conditions</a></li>
					<li><a>|</a></li>
					<li><a href="#">Privacy Policy</a></li>
					<li><a>|</a></li>
					<li><a>Cookie Policy</a></li>
					<li><a>|</a></li>
					<li><a href="#">Cookie Policy</a></li>
				</ul>
			</div>
		</div>
	</div>
	</footer><!-- #colophon -->
</div><!-- #page -->


<?php wp_footer(); ?>

</body>
</html>
