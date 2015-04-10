<?php get_header(); ?>

	<main class="">

		<?php
		if ( have_posts() ) :

			while ( have_posts() ) : the_post();

				get_template_part('content/post');

			endwhile;

		else :

			get_template_part( 'content', 'none' );

		endif;

		echo lassotheme_get_pagination();

		?>

	</main>

<?php get_footer(); ?>
