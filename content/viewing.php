<?php

global $wp_query;

if(is_category()) {
	$category = $wp_query->query_vars['category_name'];
} elseif (is_tag()){
	$category = $wp_query->query['tag'];
} else {
	$category = '';
}
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));


$results = sprintf('<span class="lasso-theme-search-results">%s</span>',$wp_query->found_posts);

?>

<div class="lasso-theme-currently-viewing lasso-theme-width">
	<?php if (is_search()){ ?>

		<p class="lasso-theme-search-results-summary"><?php echo apply_filters('lasso-theme_searched_for', __('You searched for','aesop-story-theme'));?> <span class="lasso-theme-searched-for"><?php echo the_search_query();?></span> <?php _e('and we found','aesop-story-theme');?> <?php echo $results;?> <?php _e('results','aesop-story-theme');?>.</p>

	<?php } elseif (is_author()) { ?>

		<p class="lasso-theme-search-results-summary"><?php echo apply_filters('lasso-theme_entries_authored_by', __('Entries authored by','aesop-story-theme'));?> <span><?php echo  $curauth->nickname;?></span>.</p>

	<?php } else { ?>

		<?php _e('Archives for','aesop-story-theme');?> <span><?php echo $category;?></span>

	<?php } ?>

</div>