<?php
	// Load up the config file
	require_once("resources/config.php");
	require_once(TEMPLATES_PATH . "/header.php");
	require_once(TEMPLATES_PATH . "/nav.php");
?>
<div class="master-container">
	<div class="homepage-block landing dark" data-section-name="home">
		<div class="homepage-block-child">
			<div class="icons">
				<img src="img/layout/cmyk-blue.png" alt="blue x icon">
				<img src="img/layout/cmyk-pink.png" alt="pink x icon">
				<img src="img/layout/cmyk-yellow.png" alt="yellow x icon">
			</div>
			<p class="subheader">Digital storytellers for brands</p>
		</div>
		<div class="scroll-icon">
			<a href="#what"><img src="img/layout/arrow-down-white-01.png" alt="scroll icon"></a>
		</div>
	</div>
	<div class="homepage-block what shadow light" data-section-name="what">
		<div class="homepage-block-child">
			<h2>What</h2>
			<p class="subheader">What stories we tell</p>
		</div>
	</div>
	<div class="homepage-block how shadow" data-section-name="how">
		<div class="homepage-block-child">
			<a class="link-hover" href="how.php">
				<h2>How</h2>
				<p class="subheader">How the story is told <i class="fas fa-chevron-right link-hover-arrow"></i></p>
			</a>
		</div>
	</div>
	<div class="homepage-block who shadow" data-section-name="who">
		<div class="homepage-block-child">
			<h2>Who</h2>
			<p class="subheader link-hover">Who tell the stories <i class="fas fa-chevron-right link-hover-arrow"></i></p>
		</div>
	</div>
	<div class="homepage-block get-in-touch shadow light" data-section-name="getintouch">
		<div class="homepage-block-child contact-block">
			<h3 class"btn" data-popup-open="popup-1">Get In Touch</h3>
			<p class="btn link-hover subheader" data-popup-open="popup-1">hello@tagtheagency.com <i class="fas fa-chevron-right link-hover-arrow"></i></p>
		</div>
	</div>
	<!-- CONTACT FORM -->
	<div class="popup" data-popup="popup-1">
		<div class="form-container">
			<div class="popup-close" data-popup-close="popup-1"><i class="fas fa-times"></i></div>
			<div class="contact-title">
				<h3>Get In Touch</h3>
			</div>
			<form class="contact-form" action="post">
				<div class="form-section">
					<input id="form-name" type="text" placeholder="NAME *" required>
				</div>
				<div class="form-section">
					<input id="form-email" type="email" placeholder="EMAIL *" required>
				</div>
				<div class="form-section">
					<input type="text" placeholder="PHONE">
				</div>
				<div class="form-section">
					<input type="text" placeholder="MESSAGE">
				</div>
				<div class="form-section">
					<p>Required fields marked with an *</p>
				</div>
				<div class="form-section submit-btn">
					<span></span><input class="submit" type="submit">
				</div>
			</form>
		</div>
	</div>
	<ul class="pagination">
		<li><a href="#home" class="active"><span class="hover-text">Home</span></a></li>
		<li><a href="#what"><span class="hover-text">What</span></a></li>
		<li><a href="#how"><span class="hover-text">How</span></a></li>
		<li><a href="#who"><span class="hover-text">Who</span></a></li>
		<li><a href="#getintouch"><span class="hover-text">Get in touch</span></a></li>
		<li><img class="mouse-icon" src="img/layout/mouse-icon.png" alt="mouse scroll icon"></li>
	</ul>

	<?php require_once(TEMPLATES_PATH . "/footer.php"); ?>
</div>
