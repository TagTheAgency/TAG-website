<?php
	// Load up the config file
	require_once("resources/config.php");
	require_once(TEMPLATES_PATH . "/header.php");
	$activePage = "How";
	// require_once(TEMPLATES_PATH . "/homepage-nav.php");
	require_once(TEMPLATES_PATH . "/second-nav.php");
?>
<div class="master-container">
	<div id="how-strategy" class="flex-row lrg-row how-section">
		<div class="flex-col">
			<img src="img/backgrounds/how-strategy.png" alt="strat image">
		</div>
		<div class="flex-col left-align">
			<div class="info">
				<h2>Strategy</h2>
				<h3>STORIES START WITH A PLAN</h3>
				<p>Every good story starts with a plan, in the world of digital and social media it’s the how and what you want told about your brand, the where, when and why.
				At TAG The Agency we love helping our clients to build their digital and social strategies, working with them to discover the narrative of their brand.
				</p>
				<div class="btn content-btn">Take A Peek <span class="hover-bar"></span></div>
			</div>
		</div>
	</div>
	<div id="how-creative" class="flex-row sml-row light-section reverse how-section blue">
		<div class="flex-col">
			<img src="img/backgrounds/how-advertising.png" alt="strat image">
		</div>
		<div class="flex-col">
			<div class="info">
				<h2>Creative</h2>
					<h3>STORIES START WITH A PLAN</h3>
				<p>The fun and exciting part of telling a story is the idea behind the story. From the key creative concept through to developing campaign initiatives the creative need to connect and link a brand to its key messages and ultimately the client or customer. Then once we’ve run a creative campaign for you we provide full reporting, analyse and learn how we can improve for the next campaign, learning and always getting better.
				</p>
				<div class="btn content-btn">Take A Peek <span class="hover-bar"></span></div>
			</div>
		</div>
	</div>
	<div id="how-imagery" class="flex-row lrg-row how-section">
		<div class="flex-col">
			<img src="img/backgrounds/how-imagery.png" alt="imagery section image">
		</div>
		<div class="flex-col">
			<div class="info  left-align">
				<h2>Imagery</h2>
				<h3>STORIES START WITH A PLAN</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum quae tempore voluptas nobis architecto pariatur consequatur quisquam dolor dolore eos, debitis ullam neque, vel laboriosam doloribus et, nisi eligendi</p>
				<div class="btn content-btn">Take A Peek <span class="hover-bar"></span><img src="img/layout/eyes-closed.png" alt="eyes icon"></div>
			</div>
		</div>
	</div>
	<div id="how-video" class="flex-row sml-row light-section reverse how-section pink">
		<div class="flex-col">
			<img src="img/backgrounds/how-video.png" alt="imagery section image">
		</div>
		<div class="flex-col">
			<div class="info">
				<h2>Video</h2>
				<h3>STORIES START WITH A PLAN</h3>
				<p>From stunning motion graphics to virtual reality and all video production in between the team at TAG has the skills and talent to bring your story to life through the powerful medium that is video.</p>
				<div class="btn content-btn">Take A Peek <span class="hover-bar"></span></div>
			</div>
		</div>
	</div>
</div>
<?php require_once(TEMPLATES_PATH . "/footer.php"); ?>
