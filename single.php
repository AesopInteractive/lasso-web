<?php get_header(); ?>

	<main class="clearfix"><?php

		if ( have_posts() ) :

			while ( have_posts() ) : the_post();

				get_template_part('content/post');

			endwhile;

		else :

			get_template_part( 'content/none' );

		endif;

	?></main>

<?php get_footer(); ?>
