			</section><!-- #content -->
			<footer class="row">
				<?php do_action('semantic_foundation_before_footer'); ?>
				<!-- the .fatfooter aside - I use this to enable a screen-wide background on the footer while still keeping the footer contents in line with the layout -->
    		<div class="fatfooter" role="complementary">
					<?php dynamic_sidebar("footer-widgets"); ?>
				</div><!-- #fatfooter -->
				<section class="colophon" role="contentinfo">
					<small class="copyright half left">
						© 2014
					</small><!-- .copyright -->
					<small class="credits half right">
						Powered by <a href="http://wordpress.org/">WordPress</a>.
					</small><!-- .credits -->
				</section><!--.colophon-->
				<?php do_action('semantic_foundation_after_footer'); ?>
			</footer>
			<a class="exit-off-canvas"></a>

		  <?php do_action('semantic_foundation_layout_end'); ?>
		  </div><!-- .inner-wrap -->
		</div><!-- .off-canvas-wrap -->
		<?php wp_footer(); ?>
		<?php do_action('semantic_foundation_before_closing_body'); ?>
	</body>
</html>