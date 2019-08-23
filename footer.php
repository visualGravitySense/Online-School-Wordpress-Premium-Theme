<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package intensiv
 */

?>

<footer>
		<div class="container">
			<div class="column-f">
				<img src="<?php echo get_template_directory_uri() ?>/images/logo-foo.png" alt="" />
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem</p>
				<p>© 2014 All rights reserved</p>
			</div>
			<div class="column-s">
				<h3>Support</h3>
				<ul>
					<li><a href="#">Terms of Service</a></li>
				<li><a href="#">Security</a></li>
				<li><a href="#">Privacy Policy</a></li>
				<li><a href="#">Sitemap</a></li>
				</ul>
			</div>
			<div class="column-t">
				<h3>Users information</h3>
				<ul>
					<li><a href="#">FAQ</a></li>
				<li><a href="#">Special offers</a></li>
				<li><a href="#">Services</a></li>
				<li><a href="#">Suggestions</a></li>
				</ul>
			</div>
			<div class="column-l">
				<h3>Contacts</h3>
				<ul>
					<li><a href="#"><i class="fa fa-globe"></i>France, Nancy, Rue de Serre 15  
</a></li>
				<li><a href="#"><i class="fa fa-phone"></i>8 800 346 10 79</a></li>
				<li><a href="#"><i class="fa fa-envelope-o"></i>mail@website.com</a></li>
				
				</ul>
			</div>
		</div>
	</footer>

<!--
	</div>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'intensiv' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'intensiv' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'intensiv' ), 'intensiv', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><
	</footer>
</div>
-->

<?php wp_footer(); ?>

</body>
</html>
