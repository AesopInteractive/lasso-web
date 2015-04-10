<?php

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) {
		die ('Please do not load this page directly. Thanks!');
	}

	if ( post_password_required() ) { ?>
		<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.','lasso-theme');?></p>
	<?php
		return;
	}

	if (have_comments()) {
		$commentsClass = 'lasso-theme-post-has-comments';
	} else {
		$commentsClass = null;
	}
?>

<!-- Comments -->
<?php do_action('lasso-theme_before_comments');?>
<div id="lasso-theme-comments-wrap" class="lasso-theme-comments-wrap lasso-theme-width">
	<p class="lasso-theme-comments-info"><?php comments_number( ' ', '<span>1 Reply</span>', '<span>% Replies</span>' ); ?></p>
	<div id="lasso-theme-comments" class="<?php echo $commentsClass;?>">

		 <?php

		  if (have_comments()) {

			?><ol class="commentlist"><?php

		  		wp_list_comments(array('avatar_size' => 50));

		  	?></ol><?php

		  } else {

		  		_e('Be the first to leave a comment!', 'aesop-story-theme');

		  }

		  ?>
		 <div class="navigation">
		  <?php paginate_comments_links(); ?>
		 </div>

		<?php comment_form(); ?>
	</div>
</div>
<?php do_action('lasso-theme_after_comments');?>