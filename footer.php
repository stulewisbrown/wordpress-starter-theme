<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="hs-footer-wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">
								<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'footer',
						'container_class' => 'navbar-collapse navbar-toggleable-md hs-navbar-footer',
						'container_id'    => '',
						'menu_class'      => 'navbar-nav ml-auto hs-navbar-nav hs-navbar-footer__menu',
						'fallback_cb'     => '',
						'menu_id'         => '',
						'walker'          => new WP_Bootstrap_Navwalker(),
					)
				); ?>

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>