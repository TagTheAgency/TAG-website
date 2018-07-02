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
	// require_once(TEMPLATES_PATH . "/homepage-nav.php");
	require_once(TEMPLATES_PATH . "/second-nav.php");
?>
<div class="master-container">
	<div id="how-strategy" class="flex-row lrg-row what-section justify-content-center">
		<div class="container px-md-5 pt-5 row justify-content-center">
			<div class="row px-md-5 col-12 mb-4">
				<div id="what-page-info" class="col px-md-5 text-center">
					<h1 class="font-5 mb-3">What?</h1>
					<p class="mb-3">What stories we tell at TAG The Agency, they are wide and varied, from cultural change to social advertising. We work with brands to identify that narative, then execute on telling a story that inspires audainces to connect and engage.</p>
					<p>Here are a few small glipses at the work we have created for a wide range of brands. If you need help to identify, develop and tell your brand story, get in touch. We'd love to help.</p>
				</div>
			</div>
			<div id="behance-gallery" class="row col-12 justify-content-center justify-content-md-start mt-2">
			</div>
		</div>
	</div>
</div>
<?php require("../resources/popups/whatpopups.php"); ?>
<?php require_once(TEMPLATES_PATH . "/footer.php"); ?>
