	<footer class="page-footer">
		<p>&#169; Copyright <?php echo date('Y'); ?> Dustin Ruetz.
			<a href="#toggle-info">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 45.999 45.999" style="enable-background:new 0 0 45.999 45.999;" xml:space="preserve">
					<g>
						<g>
							<path d="M39.264,6.736c-8.982-8.981-23.545-8.982-32.528,0c-8.982,8.982-8.981,23.545,0,32.528c8.982,8.98,23.545,8.981,32.528,0    C48.245,30.281,48.244,15.719,39.264,6.736z M25.999,33c0,1.657-1.343,3-3,3s-3-1.343-3-3V21c0-1.657,1.343-3,3-3s3,1.343,3,3V33z     M22.946,15.872c-1.728,0-2.88-1.224-2.844-2.735c-0.036-1.584,1.116-2.771,2.879-2.771c1.764,0,2.88,1.188,2.917,2.771    C25.897,14.648,24.746,15.872,22.946,15.872z"/>
						</g>
					</g>
				</svg>
			</a>
		</p>
	</footer>

	<div id="toggle-info" class="info-modal">
		<div>
			<a href="#close" title="Close" class="close">X</a>
			<h4>Site Credits</h4>
			<ul>
				<li>All icons in "Skills" section courtesy of <a href="https://vorillaz.github.io/devicons/#/main" target="_blank">Devicons</a>.</li>
				<li>All other icons courtesy of <a href="http://www.freepik.com/" target="_blank">Freepik</a> via <a href="http://www.flaticon.com/" target="_blank">flaticon.com</a>.</li>
				<li>Browser mock-up in "Work" section courtesy of <a href="http://www.tinydesignr.com/2015/02/flat-chrome-frame-psd.html" target="_blank">tinydesignr.com</a>.</li>
			</ul>
		</div>
	</div>

	<script>
		// scripts.js, plugins.js and jquery are enqueued in functions.php

		// Google Analytics
		// Change UA-XXXXX-X to be your site's ID
		var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]];
		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
		g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
		s.parentNode.insertBefore(g,s)}(document,"script"));
	</script>

	<?php wp_footer(); ?>

</body>
</html>