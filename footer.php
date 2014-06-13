			</section><!-- #content -->
			<footer class="row">
				<?php do_action('semantic_foundation_before_footer'); ?>
				<?php dynamic_sidebar("footer-widgets"); ?>
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