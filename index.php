<?php
	// Load up the config file
	require_once("resources/config.php");

	$u_agent = $_SERVER['HTTP_USER_AGENT'];
	if(preg_match('/MSIE/i',$u_agent)) {
		require_once(TEMPLATES_PATH . "/ie.php");
		return;
	}

	$activePage = "Home";
	$path="";
	require_once(TEMPLATES_PATH . "/header.php");
	require_once(TEMPLATES_PATH . "/homepage-nav.php");
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
		<a href="#what">
			<div class="scroll-icon">
				<img src="img/layout/arrow-down-white-01.png" alt="scroll icon">
			</div>
		</a>
	</div>
	<div class="homepage-block yellow shadow light" data-section-name="what">
		<div class="homepage-block-child pointer" data-popup-open="popup-portfolio">
			<a class="link-hover" href="what/">
				<h2>What</h2>
				<p class="subheader">What stories we tell <i class="fas fa-chevron-right link-hover-arrow"></i></p>
			</a>
		</div>
	</div>
	<div class="homepage-block pink shadow" data-section-name="how">
		<div class="homepage-block-child">
			<a class="link-hover" href="how/">
				<h2>How</h2>
				<p class="subheader">How the story is told <i class="fas fa-chevron-right link-hover-arrow"></i></p>
			</a>
		</div>
	</div>
	<div class="homepage-block blue shadow" data-section-name="who">
		<div class="homepage-block-child">
			<a class="link-hover" href="who/">
				<h2>Who</h2>
				<p class="subheader link-hover">Who tell the stories <i class="fas fa-chevron-right link-hover-arrow"></i></p>
			</a>
		</div>
	</div>
	<div class="homepage-block yellow light" data-section-name="why">
		<div class="homepage-block-child pointer" data-popup-open="why-popup">
			<a class="link-hover">
				<h2>Why</h2>
				<p class="subheader link-hover">Let us tell your story <i class="fas fa-chevron-right link-hover-arrow"></i></p>
			</a>
		</div>
	</div>
	<div class="homepage-block tag-products landing dark" data-section-name="products">
		<div class="homepage-block-child product-block">
			<div class="product-block-info">
				<h3>Tag Products</h3>
				<p>software to enhance your social media</p>
			</div>
			<div class="products-container">
				<div class="product-group">
					<a href="http://goal.tagtheagency.com/" target="_blank">
						<div class="product">
							<img src="img/content/products/goal.png" alt="Goal icon">
							<div class="product-info">
								<h4>GOAL</h4>
								<p>Working with you to perfect your social media advertising.</p>
							</div>
						</div>
					</a>
				</div>
				<div class="product-group">
					<a href="http://catch.tagtheagency.com/" target="_blank">
						<div class="product">
							<img src="img/content/products/catch.png" alt="Catch icon">
							<div class="product-info">
								<h4>CATCH</h4>
								<p>Helping you to get the best from your social campaigns.</p>
							</div>
						</div>
					</a>
				</div>
				<div class="product-group">
					<a href="http://relay.tagtheagency.com/" target="_blank">
						<div class="product">
							<img src="img/content/products/relay.png" alt="Relay icon">
							<div class="product-info">
								<h4>RELAY</h4>
								<p>Seamless customer service through Facebook Messenger, AI and Email.</p>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="homepage-block tag-products landing dark" data-section-name="packages">
		<div class="homepage-block-child product-block">
			<div class="product-block-info">
				<h3>Tag Packages</h3>
				<p>To elevate your social media knowledge and ROI</p>
			</div>
			<div class="products-container">
			<div class="product-group">
				<a href="http://hype.tagtheagency.com/" target="_blank">
					<div class="product">
						<img src="img/content/products/hype.png" alt="Hype icon">
						<div class="product-info">
							<h4>HYPE</h4>
							<p>Increasing knowledge in social and digital advertising.</p>
						</div>
					</div>
				</a>
				</div>
				<div class="product-group">
					<a href="http://play.tagtheagency.com/" target="_blank">
						<div class="product">
							<img src="img/content/products/play.png" alt="Play icon">
							<div class="product-info">
								<h4>PLAY</h4>
								<p>Solving the challenge of telling your story through video.</p>
							</div>
						</div>
					</a>
				</div>
				<div class="product-group">
					<a href="http://go.tagtheagency.com/" target="_blank">
						<div class="product">
							<img src="img/content/products/go.png" alt="Go icon">
							<div class="product-info">
								<h4>GO</h4>
								<p>Catching your stories in the best way possible.</p>
							</div>
						</div>
					</a>
				</div>
			</div>
			</div>
		</div>
	</div>
	<div class="homepage-block get-in-touch shadow light" data-section-name="getintouch">
		<div class="pointer homepage-block-child contact-block link-hover">
			<h3 class"btn" data-popup-open="popup-1">Get In Touch</h3>
			<p class="btn subheader" data-popup-open="popup-1">hello@tagtheagency.com <i class="fas fa-chevron-right link-hover-arrow"></i></p>
		</div>
	</div>
	<!-- CONTACT FORM -->
	<?php require_once(TEMPLATES_PATH . "/contact-form.php") ?>
	<ul class="pagination">
		<li><a href="#home" class="active"><span class="hover-text">Home</span></a></li>
		<li><a href="#what"><span class="hover-text">What</span></a></li>
		<li><a href="#how"><span class="hover-text">How</span></a></li>
		<li><a href="#who"><span class="hover-text">Who</span></a></li>
		<li><a href="#why"><span class="hover-text">Why</span></a></li>
		<li><a href="#products"><span class="hover-text">Tag Products</span></a></li>
		<li><a href="#packages"><span class="hover-text">Tag Packages</span></a></li>
		<li><a href="#getintouch"><span class="hover-text">Get in touch</span></a></li>
		<li><img class="mouse-icon" src="img/layout/mouse-icon.png" alt="mouse scroll icon"></li>
	</ul>

	<?php require_once(TEMPLATES_PATH . "/footer.php"); ?>
</div>
