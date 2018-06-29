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
				<div class="col px-md-5 text-center">
					<h1 class="font-5">What</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate officiis vel sequi earum, aut amet. Illum necessitatibus neque, harum enim, commodi quos autem minus, reiciendis recusandae voluptatum asperiores cum sequi.</p>
				</div>
			</div>
			<div id="behance-gallery" class="row col-12 justify-content-center justify-content-md-start mt-2">
			</div>
		</div>
	</div>
</div>
<?php require("../resources/popups/howpopups.php"); ?>
<?php require_once(TEMPLATES_PATH . "/footer.php"); ?>
