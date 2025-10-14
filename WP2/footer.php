		<footer>
			Name - <strong>ID</strong>
		</footer>
	</body>
	<?php
	if (isset($_SERVER['HTTPS'])) {
	?>
	<script type = "text/javascript", src = "https://<?= $_SERVER['HTTP_HOST'] ?>/endrio_24006003/WP2/js/jquery.min.js"></script>
	<script type = "text/javascript", src = "https://<?= $_SERVER['HTTP_HOST'] ?>/endrio_24006003/WP2/js/metode.js"></script>
	<?php
	} else {
	?>
	<script type = "text/javascript", src = "http://<?= $_SERVER['HTTP_HOST'] ?>/endrio_24006003/WP2/js/jquery.min.js"></script>
	<script type = "text/javascript", src = "http://<?= $_SERVER['HTTP_HOST'] ?>/endrio_24006003/WP2/js/metode.js"></script>
	<?php
	}
	?>
</html>