<?php

/*
 Template Name: Page
*/

	get_header();

	?><main class="lasso-theme-page clearfix">

		<h3><?php the_title();?></h3>

	<?php

		if ( have_posts() ) :

			while ( have_posts() ) : the_post();

				get_template_part('content/page');

			endwhile;

		else :

			get_template_part( 'content/none' );

		endif;

	?></main>

<?php get_footer(); ?>
