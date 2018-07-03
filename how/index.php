<?php
	// Load up the config file
	require_once("../resources/config.php");

	$path = "../";
	$requested_path = $_SERVER['REQUEST_URI'];
	if (endsWith($requested_path, 'how')) {
		$path = "./";
	}

	require_once(TEMPLATES_PATH . "/header.php");
	$activePage = "How";
	// require_once(TEMPLATES_PATH . "/homepage-nav.php");
	require_once(TEMPLATES_PATH . "/second-nav.php");
?>
<div class="master-container">
	<div id="how-strategy" class="flex-row lrg-row how-section">
		<div class="flex-col">
			<img src="<?php echo $path?>img/backgrounds/optimised/how-strategy.png" alt="strat image">
		</div>
		<div class="flex-col left-align">
			<div class="info">
				<h2>Strategy</h2>
				<p>Every good story starts with a plan. In the world of digital and social media, it’s the how and what you want told about your brand, along with the where, when and why. At TAG The Agency we love helping our clients to build their digital and social strategies, working with them to discover the narrative of their brand.
				</p>
			</div>
		</div>
	</div>
	<div id="how-creative" class="flex-row sml-row light-section reverse how-section blue">
		<div class="flex-col">
			<img src="<?php echo $path?>img/backgrounds/uni.png" alt="strat image">
		</div>
		<div class="flex-col">
			<div class="info">
				<h2>Creative</h2>
				<p>The fun and exciting part of telling a story is the idea behind the story. From the key creative concept, through to developing campaign initiatives, the creative needs to connect a brand to its key messages and ultimately the client or customer. Once we’ve run a creative campaign for you we provide full reporting, analysing how we can improve for the next campaign, learning and always getting better.
				</p>
				<div class="btn content-btn" data-popup-open="popup-creative">Take A Peek <span class="hover-bar"></span></div>
			</div>
		</div>
	</div>
	<div id="how-social" class="flex-row lrg-row how-section">
		<div class="flex-col">
			<img src="<?php echo $path?>img/backgrounds/optimised/how-social.png" alt="imagery section image">
		</div>
		<div class="flex-col">
			<div class="info left-align">
				<h2>Social Media</h2>
				<p>Facebook, Twitter, YouTube, Instagram, Snapchat… the list goes on and changes everyday. Staying current is a challenge. TAG The Agency specialises in telling brand stories through social media channels, from running brand pages to developing strategies and campaigns that inspire people to connect.</p>
				<br>
				<p>Our approach is simple, the old school style of brands having a persona is long gone. A brand isn’t a person, but the story behind the people of the brand. Products and services have stories and they have a purpose, we can help you uncover and tell these stories through social media.</p>
			</div>
		</div>
	</div>
	<div id="how-video" class="flex-row sml-row reverse pink how-section">
		<div class="flex-col">
			<img src="<?php echo $path?>img/backgrounds/optimised/how-video.png" alt="imagery section image">
		</div>
		<div class="flex-col">
			<div class="info">
				<h2>Video</h2>
				<p>From stunning motion graphics to virtual reality and all video production in between, the team at TAG have the skills and talent to bring your story to life through the powerful medium that is video.</p>
				<div class="btn content-btn" data-popup-open="popup-video">Take A Peek <span class="hover-bar"></span></div>
			</div>
		</div>
	</div>
	<div id="how-imagery" class="flex-row lrg-row how-section">
		<div class="flex-col">
			<img src="<?php echo $path?>img/backgrounds/optimised/how-imagery.png" alt="imagery section image">
		</div>
		<div class="flex-col">
			<div class="info left-align">
				<h2>Imagery</h2>
				<p>Insert the cliché “a picture says a 1000 words”, if so then think how much a crafted image can tell. Imagery that tells the story of your brand, from illustrations through to photography, we will work with you to extract and ensure your brand message shines in every image you share.</p>
				<div class="btn content-btn" data-popup-open="popup-imagery" >Take A Peek <span class="hover-bar"></span></div>
			</div>
		</div>
	</div>
	<div id="how-copywriting" class="flex-row reverse sml-row blue how-section">
		<div class="flex-col">
			<img src="<?php echo $path?>img/backgrounds/optimised/how-copywriting.png" alt="copywriting section image">
		</div>
		<div class="flex-col">
			<div class="info">
				<h2>Copywriting</h2>
				<p>Stunning superlatives, to sweet as scripts, TAG The Agency can help you build your brand through the words you write. From a post on Facebook to the copy on your website, we collaborate with you to craft and create words and messaging that impacts your audiences.</p>
				<div class="btn content-btn" data-popup-open="popup-copywriting">Take A Peek <span class="hover-bar"></span></div>
			</div>
		</div>
	</div>
	<div id="how-design" class="flex-row lrg-row how-section">
		<div class="flex-col">
			<img src="<?php echo $path?>img/backgrounds/optimised/how-design.png" alt="design section image">
		</div>
		<div class="flex-col">
			<div class="info left-align">
				<h2>Design</h2>
				<p>Everything should be created with intention, the intention to inspire an action. From web design to smart phone apps, design thinking should lead putting the consumer at the front of everything. We can help you to make the complex simple, collaborating to create design with intention.</p>
				<div class="btn content-btn"><a href="https://www.behance.net/TAGTheAgency
" target="_blank">Take A Peek</a> <span class="hover-bar"></span></div>
			</div>
		</div>
	</div>
	<div id="how-advertising" class="flex-row sml-row reverse blue how-section">
		<div class="flex-col">
			<img src="<?php echo $path?>img/backgrounds/optimised/how-advertising.png" alt="copywriting section image">
		</div>
		<div class="flex-col">
			<div class="info">
				<h2>Advertising</h2>
				<p>Making everything look and be amazing is just the beginning, we need to tell the world about your amazing service. This can be done through search, to help people find when they are looking, or through social media, to help people discover and engage with the story of a brand. At TAG we can help train you on using digital advertising to get the best from your online stories or provide full service ad management for you.</p><br>
				<p>Naturally we report and learn on how we can tweak and improve your ads, optimising them to get the very best response and conversion we can.</p>
				<div class="btn content-btn" data-popup-open="popup-advertising">Take A Peek <span class="hover-bar"></span></div>
			</div>
		</div>
	</div>
	<div id="how-development" class="flex-row lrg-row how-section">
		<div class="flex-col">
			<img src="<?php echo $path?>img/backgrounds/optimised/how-development.png" alt="development section image">
		</div>
		<div class="flex-col">
			<div class="info left-align">
				<h2>Development</h2>
				<p>It’s amazing what is possible on the Internet, at TAG The Agency our development team specialises in building digital brand solutions. What this means is the team can help build campaign-landing pages, Facebook apps, as well as interactive to enterprise websites. We focus on making the development world of brand engagement simple and free of jargon.</p>
				<div class="btn content-btn" data-popup-open="popup-development">Take A Peek <span class="hover-bar"></span></div>
			</div>
		</div>
	</div>
</div>
<?php require("../resources/popups/howpopups.php"); ?>
<?php require_once(TEMPLATES_PATH . "/footer.php"); ?>
