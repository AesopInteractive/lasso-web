<?php

$padded = is_front_page() ? 'front' : 'page'; ?>

<div class="lasso-theme--mast__wrap <?php echo $padded;?>">

	<div class="lasso-theme--mast__inner">

		<a href="<?php echo esc_url( get_bloginfo('url'));?>"><img class="lasso-theme--logo" src="<?php echo LASSO_THEME_URL.'/assets/img/logo--small-white.png';?>" alt="lasso"></a>

		<?php if ( is_front_page() ): ?>
			<div class="lasso-theme--section__gut">

				<h1>Lasso Demo</h1>
				<p class="lead">Create your own fully functional demo of Lasso in less than 60 seconds..</p>

				<a class="btn btn-white" href="/awesome"><i class="dashicons dashicons-admin-site"></i> Create my Demo</a>

				<img class="lasso-theme--mast__img" src="<?php echo LASSO_THEME_URL.'/assets/img/building-with-lasso-C.gif';?>" alt="lasso">

			</div>
		<?php endif; ?>

		<?php $args = array(
			'theme_location' 	=> 'primary',
			'container' 		=> false,
			'menu_class' 		=> 'lasso-theme--menu__secondary'
		);

		wp_nav_menu( $args ); ?>

	</div>

	<div class="lasso-theme--section__img mast"></div>

</div>