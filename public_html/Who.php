<?php
	// Load up the config file
	require_once("resources/config.php");
	require_once(TEMPLATES_PATH . "/header.php");
	$activePage = "Who";
	// require_once(TEMPLATES_PATH . "/homepage-nav.php");
	require_once(TEMPLATES_PATH . "/second-nav.php");
?>
<div class="master-container who-container">
	<div class="flex-row">
		<div class="flex-col who-block">
			<div class="who-image-wrap">
				<img src="img/content/team/image.jpg" alt="who image">
			</div>
			<div class="who-info">
				<h3>Tom Reidy</h3>
				<p>Head of Innovation</p>
			</div>
		</div>
		<div class="flex-col who-block">
			<div class="who-image-wrap">
				<img src="img/content/team/image.jpg" alt="who image">
			</div>
			<div class="who-info">
				<h3>Janeen Mckenzie</h3>
				<p>Finance Manager</p>
			</div>
		</div>
		<div class="flex-col who-block">
			<div class="who-image-wrap">
				<img src="img/content/team/image.jpg" alt="who image">
			</div>
			<div class="who-info">
				<h3>Colin Matcham</h3>
				<p>Lead Developer</p>
			</div>
		</div>
	</div>
	<div class="flex-row">
		<div class="flex-col who-block">
			<div class="who-image-wrap">
				<img src="img/content/team/image.jpg" alt="who image">
			</div>
			<div class="who-info">
				<h3>Emma-Jane Mckay</h3>
				<p>Account Manager</p>
			</div>
		</div>
		<div class="flex-col who-block">
			<div class="who-image-wrap">
				<img src="img/content/team/image.jpg" alt="who image">
			</div>
			<div class="who-info">
				<h3>Hayden White</h3>
				<p>Motion Designer</p>
			</div>
		</div>
		<div class="flex-col who-block">
			<div class="who-image-wrap">
				<img src="img/content/team/image.jpg" alt="who image">
			</div>
			<div class="who-info">
				<h3>Rosa Santana Alonso</h3>
				<p>Senior Designer</p>
			</div>
		</div>
	</div>
	<div class="flex-row">
		<div class="flex-col who-block">
			<div class="who-image-wrap">
				<img src="img/content/team/image.jpg" alt="who image">
			</div>
			<div class="who-info">
				<h3>Earl Patterson</h3>
				<p>Managing Partner</p>
			</div>
		</div>
		<div class="flex-col who-block">
			<div class="who-image-wrap">
				<img src="img/content/team/image.jpg" alt="who image">
			</div>
			<div class="who-info">
				<h3>Charlie Matina</h3>
				<p>Front-end Developer</p>
			</div>
		</div>
		<div class="flex-col who-block">
			<div class="who-image-wrap">
			</div>
			<div class="who-info">
			</div>
		</div>
	</div>
</div>
<?php require_once(TEMPLATES_PATH . "/footer.php"); ?>
