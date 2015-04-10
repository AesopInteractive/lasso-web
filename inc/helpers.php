<?php

/**
*
*	Get the direct purchase link of lasso with pricing option
*
*	@return purchase link with download id and price id
*/
function lasso_theme_get_purchase_url( $download_id = 0, $price_id = 1 ){

	if ( empty( $download_id ) || empty( $price_id ) )
		return;

	$url = sprintf('%s/checkout?edd_action=add_to_cart&download_id=%s&edd_options[price_id]=%s"', get_bloginfo('url'), absint( $download_id ), absint( $price_id ) );

	return $url;
}

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