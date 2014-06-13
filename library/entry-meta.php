<?php
if(!function_exists('semantic_foundation_entry_meta')) :
    function semantic_foundation_entry_meta() {
    		echo '<div class="entry-meta">';
        echo '	<time class="updated" datetime="'. get_the_time('c') .'">'. sprintf(__('Posted on %s at %s.', 'semantic-foundation'), get_the_time('l, F jS, Y'), get_the_time()) .'</time>';
        echo '	<p class="byline author">'. __('Written by', 'semantic-foundation') .' <a href="'. get_author_posts_url(get_the_author_meta('ID')) .'" rel="author" class="fn">'. get_the_author() .'</a></p>';
        echo '</div><!-- .entry-meta -->';
    }
endif;
?>