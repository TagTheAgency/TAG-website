<?php
	// Load up the config file
	require_once("../resources/config.php");

	$path = "../";
	$requested_path = $_SERVER['REQUEST_URI'];
	if (endsWith($requested_path, 'what')) {
		$path = "./";
	}

	require_once(TEMPLATES_PATH . "/header.php");
	$activePage = "what";
	require_once(TEMPLATES_PATH . "/second-nav.php");
?>
<div class="master-container">
	<div class="spacer-80"></div>
	<div class="row what-section justify-content-center py-5 mb-5">
		<div class="container px-md-5 pt-5 row justify-content-center">
			<div class="row px-md-5 col-12 mb-4">
				<div id="what-page-info" class="col px-md-5 text-center">
					<!-- <h1 class="font-5 mb-3">What?</h1>
					<p class="mb-3">Here are a few small glimpses of the work we have created for a wide range of brands. If you need help to identify, develop and tell your brand story, get in touch. We'd love to help.</p> -->
					<h1 class='font-5 mb-4 pt-5'>Sorry!</h1>
					<h3 class='mb-3 black'>This page is under maintenance. Check back soon.</h3>
				</div>
			</div>
			<!-- <div id="behance-gallery" class="row col-12 justify-content-center justify-content-md-start mt-2">
			</div> -->
		</div>
	</div>
</div>
<?php require("../resources/popups/whatpopups.php"); ?>
<?php require_once(TEMPLATES_PATH . "/footer.php"); ?>
