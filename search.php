<?php

	get_header();

	?><main class="lasso-theme-main">

		<?php get_template_part( 'content/viewing' ); ?>

		<div class="lasso-theme-index-listing lasso-theme-width clearfix">

			<?php

			if ( have_posts() ) :

				while ( have_posts() ) : the_post();

					get_template_part( 'content/index-post' );

				endwhile;

			else :

				get_template_part( 'content', 'none' );

			endif;

			?>

		</div>

		<?php echo lasso-theme_get_pagination();?>
	</main>

<?php get_footer(); ?>
