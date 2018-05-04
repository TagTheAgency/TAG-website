<?php
	// Load up the config file
	require_once("../resources/config.php");

	$path = "../";
	$requested_path = $_SERVER['REQUEST_URI'];
	if (endsWith($requested_path, 'who')) {
		$path = "./";
	}

	require_once(TEMPLATES_PATH . "/header.php");
	$activePage = "Who";
	// require_once(TEMPLATES_PATH . "/homepage-nav.php");
	require_once(TEMPLATES_PATH . "/second-nav.php");
?>
<div class="master-container who-container">
	<div class="flex-row">
		<div>
			<h3>The Team</h3>
			<p>The team at TAG The Agency are made up of an eclectic family, each bringing something wonderfully unique to the world of digital, from the well traveled to the obsessed with pixel placements, this crazy fun bunch of humans love nothing more than creating masterpieces of digital art. So come play! Want our family to work for you?</p>
		</div>
	</div>
	<div class="team-container">
		<div class="team-overlay">
			<div class="who-flex team-info-container">
				<div class="who-col">
					<span><i class="fas fa-user-circle"></i></span>
					<h3>Tom Reidy</h3>
					<p>Head of Innovation</p>
				</div>
				<div class="who-col">
					<span><i class="fas fa-user-circle"></i></span>
					<h3>Janeen Mckenzie</h3>
					<p>Finance Manager</p>
				</div>
				<div class="who-col">
					<span><i class="fas fa-user-circle"></i></span>
					<h3>Colin Matcham</h3>
					<p>Lead Developer</p>
				</div>
				<div class="who-col">
					<span><i class="fas fa-user-circle"></i></span>
					<h3>Emma-Jane Mckay</h3>
					<p>Account Manager</p>
				</div>
				<div class="who-col">
					<span><i class="fas fa-user-circle"></i></span>
					<h3>Hayden White</h3>
					<p>Motion Designer</p>
				</div>
				<div class="who-col">
					<span><i class="fas fa-user-circle"></i></span>
					<h3>Rosa Santana Alonso</h3>
					<p>Senior Designer</p>
				</div>
				<div class="who-col">
					<span><i class="fas fa-user-circle"></i></span>
					<h3>Earl Patterson</h3>
					<p>Managing Partner</p>
				</div>
				<div class="who-col">
					<span><i class="fas fa-user-circle"></i></span>
					<h3>Charlie Matina</h3>
					<p>Front-end Developer</p>
				</div>
			</div>
		</div>
		<div class="mosaic-wrapper">
			<?php
			$numbers = range(1, 82);
	    shuffle($numbers);
			$numbers = array_slice($numbers, 0, 50);
			foreach ($numbers as $number) {
				echo "<div class='mosaic-image'><img src='${path}img/content/who/who-$number.jpg' alt='mosaic image $number'></div>";
			}
			 ?>
		</div>
	</div>
</div>
<?php require_once(TEMPLATES_PATH . "/footer.php"); ?>
