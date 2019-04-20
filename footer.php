	<footer>
		<div class="container">
			<div class="row">
            	<div class="col-md-4">
	            	<h3>About theme</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vehicula accumsan turpis eget scelerisque. Quisque sit amet rhoncus velit, id fermentum ligula. Donec id nibh felis. Morbi ornare, mi at sollicitudin ultrices, nunc dolor porta diam, in blandit risus sem quis arcu.</p>
            	</div>
				<div class="col-md-4 social-links">
	            	<h3>Follow:</h3>
					<ul>
						<li>Facebook</li>
						<li>Twitter</li>
						<li>Instagram</li>
					</ul>
            	</div>
				<div class="col-md-4">
	            	<h3>Footer navigation</h3>
					<nav>
						<?php wp_nav_menu(array('theme_location'=> 'secondary')); ?>
					</nav>
            	</div>
            </div>
        </div>
		<div class="copyright">
			<div class="container">
			© Copyright 2013 -&nbsp;<script>document.write(new Date().getFullYear());</script>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Generic Theme by <a href="http://www.mnovakovic.com" target="_blank">Marko</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;All Rights Reserved&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Powered by <a href="http://wordpress.org" target="_blank">WordPress</a>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
	</body>
</html>