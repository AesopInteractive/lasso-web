<?php

	get_header();

	?><main class="lasso-front-page clearfix">

		<section class="lasso-theme--feature">

			<div class="lasso-theme--feature__col text">
				<h3 class="lasso-theme--feature__title">Save Time Editing</h3>
				<p class="lasso-theme--feature__info">The back and forth with previewing and writing a post in WordPress wastes an incredible amount of time. With Lasso, editing takes place in real-time, right on the front-end of your site. No more wasting time with previews.</p>
				<a class="btn btn-primary btn-small" href="/awesome">Try it<i class="dashicons dashicons-arrow-right-alt2"></i></a>
			</div>
			<div class="lasso-theme--feature__col img">
				<img class="lasso-theme--feature__img" src="<?php echo LASSO_THEME_URL.'/assets/img/writing-with-lass-C.gif';?>" alt="lasso">
			</div>

		</section>

		<section class="lasso-theme--feature">

			<div class="lasso-theme--feature__col img">
				<img class="lasso-theme--feature__img" src="<?php echo LASSO_THEME_URL.'/assets/img/making-galleries.gif';?>" alt="lasso">
			</div>
			<div class="lasso-theme--feature__col text">
				<h3 class="lasso-theme--feature__title">Build Interactive Stories</h3>
				<p class="lasso-theme--feature__info">Easily add images, maps with markers, parallax galleries, chapters, and more, with no code required. Changes happen in real-time, leaving you with a world of possibilities for building rich narratives.</p>
				<a class="btn btn-primary btn-small" href="/awesome">Try it<i class="dashicons dashicons-arrow-right-alt2"></i></a>
			</div>

		</section>

		<section class="lasso-theme--feature">
			<div class="lasso-theme--feature__col text">
				<h3 class="lasso-theme--feature__title">Empower Your Clients</h3>
				<p class="lasso-theme--feature__info">Wow your clients by giving them access to an entirely new type of editing tool that will empower them to express their thoughts in truly interactive ways; all without any code at all, and without bothering you to update it.</p>
				<a class="btn btn-primary btn-small" href="/awesome">Try it<i class="dashicons dashicons-arrow-right-alt2"></i></a>
			</div>
			<div class="lasso-theme--feature__col img">
				<img class="lasso-theme--feature__img" src="<?php echo LASSO_THEME_URL.'/assets/img/building-with-lasso-C.gif';?>" alt="lasso">
			</div>
		</section>

		<?php get_template_part('content/feature-grid'); ?>

		<?php get_template_part('content/cta'); ?>

		<?php get_template_part('content/words'); ?>

		<?php get_template_part('content/faq'); ?>

		<?php get_template_part('content/cta'); ?>
	</main>

<?php get_footer(); ?>
