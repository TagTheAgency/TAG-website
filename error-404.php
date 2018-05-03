<?php
	// Load up the config file
	require_once("resources/config.php");
	$activePage = "Home";
	require_once(TEMPLATES_PATH . "/header.php");
	require_once(TEMPLATES_PATH . "/second-nav.php");
?>
	<div class="error-page-container">
		<div class="error">
			<h3>Error 404</h3>
			<h4>Sorry, it looks like there's nothing here.</h4>
			<ul>
				<li class="btn hover"><a href="/">HOMEPAGE</a></li>
				<li class="btn hover go-back">GO BACK</li>
			</ul>
		</div>
	</div>
</div>
<?php require_once(TEMPLATES_PATH . "/footer.php"); ?>
