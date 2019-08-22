<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wordpress
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
				<?php
			       wp_nav_menu( array(
                    'theme_location' => 'footerfirst',
                    'menu_id'        => 'footer-menu',
                    'menu_class'     => '',
                    'container'      => 'ul'
			) );
			?>
			</div>
			<div class="column-t">
				<h3>Users information</h3>
				<?php
			       wp_nav_menu( array(
                    'theme_location' => 'footersecond',
                    'menu_id'        => 'footertwo-menu',
                    'menu_class'     => '',
                    'container'      => 'ul'
			) );
			?>
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

<?php wp_footer(); ?>

</body>
</html>
