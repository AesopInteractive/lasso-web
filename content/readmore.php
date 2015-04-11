<?php

	$prev 			= get_adjacent_post(false,'',true);
	$prevlink 		= get_permalink(get_adjacent_post(false,'',true));

	$next 			= get_adjacent_post(false,'',false);
	$nextlink 		= get_permalink(get_adjacent_post(false,'',false));

	$only_one		= $prevlink == get_permalink() || $nextlink == get_permalink() ? 'lasso-theme-one-adjacent' : null;
?>
<section id="lasso-theme-read-more" class="lasso-theme-read-more <?php echo $only_one;?>">

	<div class="lasso-theme-adjacent-posts">
	<?php

	$default_accent = get_theme_mod('lasso-theme_accent_color');

	if ($prevlink != get_permalink()) {

		$previmg 			= wp_get_attachment_image_src( get_post_thumbnail_id( $prev->ID ), 'lasso-theme-post-cover');
		$prev_auth 			= get_the_author_meta('display_name',$prev->post_author);
		$prev_category 		= get_the_category($prev->ID);
		$prev_story_accent 	= get_post_meta( $prev->ID, 'lasso-theme_story_accent_color', true ) ? get_post_meta( $prev->ID, 'lasso-theme_story_accent_color', true ) : $default_accent;
		$prev_styles 		= $prev_story_accent ? sprintf('style="background:%s;"', $prev_story_accent ) : null;
		$prev_thumb 		= has_post_thumbnail( $prev->ID ) ? 'has-thumbnail' : 'no-thumbnail';
		$get_prev_author    = $prev->post_author;
		$prev_author        = get_the_author_meta('display_name',$get_prev_author);

		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class( array('class' => 'lasso-theme-collection-item adjacent-prev '.$prev_thumb)); ?>>
			<a class="lasso-theme-archive-entry-inner" href="<?php echo get_permalink($prev->ID);?>">
				<div>
					<span class="adjacent-label"><?php echo apply_filters('lasso-theme_previous_text', __('Previous:','lasso-theme')); ?></span>
					<h4 class="lasso-theme-entry-title"><?php echo $prev->post_title; ?></h4>
				</div>
			</a>
		</article>
	<?php }

	if ($nextlink != get_permalink()) {

		$nextimg 			= wp_get_attachment_image_src( get_post_thumbnail_id( $next->ID ), 'lasso-theme-post-cover');
		$next_auth 			= get_the_author_meta('display_name',$next->post_author);
		$next_category 		= get_the_category($next->ID);
		$next_story_accent 	= get_post_meta( $next->ID, 'lasso-theme_story_accent_color', true ) ? get_post_meta( $next->ID, 'lasso-theme_story_accent_color', true ) : $default_accent;
		$next_styles 		= $next_story_accent ? sprintf('style="background:%s;"', $next_story_accent ) : null;
		$next_thumb 		= has_post_thumbnail( $next->ID ) ? 'has-thumbnail' : 'no-thumbnail';
		$get_next_author    = $next->post_author;
		$next_author        = get_the_author_meta('display_name',$get_next_author);

		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class( array('class' => 'lasso-theme-collection-item adjacent-next '.$next_thumb)); ?>>
			<a class="lasso-theme-archive-entry-inner" href="<?php echo get_permalink($next->ID);?>">
				<div>
					<span class="adjacent-label"><?php echo apply_filters('lasso-theme_next_text', __('Next:','lasso-theme')); ?></span>
					<h4 class="lasso-theme-entry-title"><?php echo $next->post_title; ?></h4>
				</div>
			</a>
		</article>
	<?php } ?>
	</div>
</section>