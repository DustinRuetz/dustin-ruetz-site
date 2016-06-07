	<footer>
		<div class="container">
			<p>&#169; Copyright <?php echo date('Y'); ?> Dustin Ruetz.</p>
		</div>
	</footer>

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