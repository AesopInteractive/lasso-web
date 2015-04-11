<?php

function lassotheme_get_pagination(){

	global $wp_query, $numpages;

	if ($wp_query->max_num_pages > 1) {

		?><div class="lasso-theme--pagination"><?php

			$big = 999999999; // need an unlikely integer

			echo paginate_links( array(
				'base' 		=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' 	=> '?paged=%#%',
				'current' 	=> max( 1, get_query_var('paged') ),
				'total' 	=> $wp_query->max_num_pages
			) );

		?></div><?php
	}
}