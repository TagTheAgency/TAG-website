<?php
	// Load up the config file
	require_once("resources/config.php");
	require_once(TEMPLATES_PATH . "/header.php");
	require_once(TEMPLATES_PATH . "/nav.php");
?>

<div class="homepage-block landing dark" data-section-name="home">
	<div class="child">
		<div class="icons">
			<img src="img/layout/cmyk-blue.png" alt="blue x icon">
			<img src="img/layout/cmyk-pink.png" alt="pink x icon">
			<img src="img/layout/cmyk-yellow.png" alt="yellow x icon">
		</div>
		<h3>Digital storytellers for brands</h3>
	</div>
</div>
<div class="homepage-block strategy shadow" data-section-name="strategy">
	<div>
		<h2>Strategy</h2>
		<p class="subheader">Stories start with a plan.</p>
	</div>
</div>
<div class="homepage-block how shadow" data-section-name="how">
	<div>
		<a href="how.php"><span class="link"></span></a>
		<h2>How</h2>
		<p class="subheader">How the story is told</p>
	</div>
</div>
<div class="homepage-block who shadow" data-section-name="who">
	<div>
		<h2>Who</h2>
		<p class="subheader">Who we tell stories for <i class="fas fa-chevron-right"></i></p>
		<p class="subheader">Who tell stories <i class="fas fa-chevron-right"></i></p>
	</div>
</div>
<div class="homepage-block get-in-touch shadow light" data-section-name="getintouch">
	<div>
		<h3>Get In Touch</h3>
		<p class="subheader">Stories start with a plan.</p>
	</div>
</div>

<ul class="pagination">
	<li><a href="#home" class="active"><span class="hover-text">Home</span></a></li>
	<li><a href="#strategy"><span class="hover-text">Strategy</span></a></li>
	<li><a href="#how"><span class="hover-text">How</span></a></li>
	<li><a href="#who"><span class="hover-text">Who</span></a></li>
	<li><a href="#getintouch"><span class="hover-text">Get in touch</span></a></li>
</ul>

<?php require_once(TEMPLATES_PATH . "/footer.php"); ?>
