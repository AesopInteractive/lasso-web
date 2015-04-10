
		<?php

		if ( is_single() || is_home() ) {
			get_template_part( 'content/email-signup' );
		}

		?>
		<footer class="lasso-theme--footer__wrap" itemscope itemtype="http://schema.org/WPFooter">

			<div class="lasso-theme--footer__inner">
				<p><span>Lasso</span> <br />From the makers of <a href="http://aesopstoryengine.com">Aesop Story Engine</a>.</p>
				<ul>
					<li><a href="http://twitter.com/aesopinteractiv">Twitter</a></li>
					<li><a href="http://facebook.com/aesopinteractive">Facebook</a></li>
				</ul>
				<p>Exquisitely crafted in Texas.
					<br />
					<img src="<?php echo LASSO_THEME_URL.'/assets/img/texas.png';?>" alt="built in texas">
					<a href="/product-policy">Policy</a> &middot; 
					<a href="/faq">FAQ</a> &middot; 
					<?php if( is_user_logged_in() ) { ?>
						<a href="/dashboard">Your Dashboard</a>
						&middot; 
						<a href="<?php echo esc_url( wp_logout_url() );?> ">Logout</a>
					<?php } else { ?>
						<a href="/login">Login</a>
					<?php } ?>
				</p>
			</div>

			<div>
				<?php
					do_action('aesop_theme_before_footer');
					wp_footer();
				?>

				<!-- Google Analytics -->
				<script>
				  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

				  ga('create', 'UA-38255798-16', 'auto');
				  ga('send', 'pageview');

				</script>
			</div>

		</footer>

		<?php do_action('aesop_theme_body_inside_bottom'); // Aesop Universal Theme Hook ?>

	</body>

	<?php do_action('aesop_theme_body_after'); // Aesop Universal Theme Hook ?>

</html>
