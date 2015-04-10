<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'class' => 'aesop-entry-content entry-content' ) );?> >
	<div class="lasso-theme--post-entry">
		<?php the_content(); ?>
	</div>
	<?php wp_link_pages( array(
		'before'      => '<div class="lasso-theme-post-pagination"><span class="lasso-theme-post-pagination-title">' . __( 'Pages:', 'aesop-story-theme' ) . '</span>',
		'after'       => '</div>',
		'link_before' => '<span>',
		'link_after'  => '</span>',
	) );
	?>
</article>
<?php do_action('ah_theme_after_single_page');