    <div class="error">
	    <?php
		    session_start();
		    if (isset($_SESSION['error']) && $_SESSION['error'] != '') {
				echo $_SESSION['error'];
			}
			session_destroy();
		?>
	</<div>