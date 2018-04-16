<div id="second-nav" class="mobile-navigation fixed">
	<div class="logo-wrapper">
		<a href="./index.php"><img id="tag-logo-mobile" src="img/content/logo-black.png" alt="TAG Logo"></a>
	</div>
	<div id="mobile-menu-icon">
		<i class="fas fa-bars open-menu"></i>
	</div>
	<div class="mobile-menu-wrapper homepage">
		<div id="close-menu">
			<i class="close fas fa-times"></i>
		</div>
		<ul class="mobile-menu">
			<li><a href="./index.php">Home</a></li>
			<li>Stategy</li>
			<li><a href="./how.php">How</a></li>
			<li>Who</li>
			<li>Get In Touch</li>
		</ul>
	</div>
</div>
<div class="nav-container fixed">
	<div class="nav-content">
		<div class="logo-wrapper">
			<a href="./index.php"><img src="img/content/logo-black.png" alt="TAG Logo"></a>
		</div>
		<div>
			<ul>
				<a href="What.php"><li <?php if ($activePage == "What"){?> class="active-page" <?php } ?>>What <span class="hover-bar"></span></li></a>
				<a href="How.php"><li <?php if ($activePage == "How"){?> class="active-page" <?php } ?>>How <span class="hover-bar"></span></li></a>
				<a href="Who.php"><li <?php if ($activePage == "Who"){?> class="active-page" <?php } ?>>Who <span class="hover-bar"></span></li></a>
				<li>Contact</li>
			</ul>
		</div>
	</div>
</div>