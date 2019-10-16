<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Plainly
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php printf( __( 'Thank you %2$s', 'plainly' ), 'Plainly', '<a href="https://wordpress.org/">Wordpress</a>' ); ?>
			<span class="sep"> &middot; </span>
			<?php printf( __( 'Thank you %2$s', 'plainly' ), 'Plainly', '<a href="http://chris.ink/" rel="designer">Chris Rudzki</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
