<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

		<footer id="colophon" role="contentinfo">

				<?php
					/* A sidebar in the footer? Yep. You can can customize
					 * your footer with three columns of widgets.
					 */
					if ( ! is_404() )
						get_sidebar( 'footer' );
				?>

				<div id="site-generator">
					<?php do_action( 'twentyeleven_credits' ); ?>
					<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyeleven' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyeleven' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyeleven' ), 'WordPress' ); ?></a>
				</div>
		</footer><!-- #colophon -->

	</div><!-- #bodychild -->
</div><!-- #outcontainer -->

<?php wp_footer(); ?>

<!-- ////////////////////////////////// -->
<!-- //      Javascript Files        // -->
<!-- ////////////////////////////////// -->
<script type="text/javascript" src="/wp-content/themes/bolota/b-js/jquery-1.js"></script>
<script type="text/javascript" src="/wp-content/themes/bolota/b-js/jquery-e.js"></script>
<!-- jQuery Superfish -->
<script type="text/javascript" src="/wp-content/themes/bolota/b-js/hoverInt.js"></script>
<script type="text/javascript" src="/wp-content/themes/bolota/b-js/superfis.js"></script>
<script type="text/javascript" src="/wp-content/themes/bolota/b-js/supersub.js"></script>

<!-- jQuery Layerslider -->
<script type="text/javascript" src="/wp-content/themes/bolota/b-js/layersli.js"></script>

<script type="text/javascript">
jQuery(window).load(function() {

	jQuery('#layerslider').hover(function(){
		jQuery('a.ls-nav-prev,a.ls-nav-next').fadeTo('slow',1);
	},
	function(){
		jQuery('a.ls-nav-prev,a.ls-nav-next').fadeTo('slow',0);
	});

    jQuery('#layerslider.slideritems').layerSlider({
		skinsPath : 'images/layerslider-skins/',
		skin : 'broadway',
		autoStart : true,
		cbInit: function(){jQuery('a.ls-nav-prev,a.ls-nav-next').css('display','none');	},
	});
});
</script>

<!-- jQuery PrettyPhoto -->
<script type="text/javascript" src="/wp-content/themes/bolota/b-js/jquery00.js"></script>
<script type="text/javascript" src="/wp-content/themes/bolota/b-js/fade0000.js"></script>

<!-- Custom Script -->
<script type="text/javascript" src="/wp-content/themes/bolota/b-js/custom00.js"></script>

</body>
</html>
