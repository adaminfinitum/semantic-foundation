<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage SemanticFoundation
 * @since SemanticFoundation 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php semantic_foundation_entry_meta(); ?>
	</header>
	<div class="entry-content">
		<?php the_content(__('Continue reading...', 'semantic-foundation')); ?>
	</div><!-- .entry-content -->
	<footer>
		<?php $tag = get_the_tags(); if (!$tag) { } else { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
	<hr />
</article><!-- #post -->