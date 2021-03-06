<article id="post-<?php the_ID(); ?>" <?php post_class(array('class' => 'aesop-entry-content')); ?> itemscope itemtype="http://schema.org/BlogPosting">

	<header class="lasso-theme--entry-header">

		<?php // Title ?>
		<h2 class="lasso-theme--entry-title" itemprop="headline">
			<?php

			if ( is_single() ){
				the_title();
			} else {
				the_title('<a href="'.get_the_permalink().'">','</a>');
			}
			?>
		</h2>
		<ul class="lasso-theme--entry-meta">

			<?php // Meta: Author ?>
			<li itemprop="author" itemscope itemtype="http://schema.org/Person">
				<span class="avatar-wrap"><?php echo get_avatar( get_the_author_meta( 'ID' ), 50 ); ?></span>
				Posted by
				<span itemprop="name"><?php the_author(); ?></span>
			</li>

			<?php // Meta: Date ?>
			<li>
				<time itemprop="datePublished" datetime="<?php echo esc_attr( get_the_time( 'D, d M Y H:i:s' ) ); ?>">
					<?php the_date();?>
				</time>
			</li>

		</ul>

	</header>

	<?php // Content ?>
	<div itemprop="text" class="lasso-theme--post-entry">

		<?php

		if ( is_home() ) {

			the_excerpt();

		} else {

			the_content('Read more...');

		}

		?>

	</div>

	<?php

	if ( is_single() ) {

		get_template_part('content/readmore');

	}

	?>

</article><!-- .entry-content -->