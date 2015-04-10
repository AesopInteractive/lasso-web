
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
				</p>
			</div>

			<div>
				<?php
					do_action('aesop_theme_before_footer');
					wp_footer();
				?>
			</div>

		</footer>

		<?php do_action('aesop_theme_body_inside_bottom'); // Aesop Universal Theme Hook ?>

	</body>

	<?php do_action('aesop_theme_body_after'); // Aesop Universal Theme Hook ?>

</html>
