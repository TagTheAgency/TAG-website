<div id="second-nav" class="mobile-navigation fixed">
	<div class="logo-wrapper">
		<a href="<?php echo $path?>"><img id="tag-logo-mobile" src="<?php echo $path?>img/content/logo-black.png" alt="TAG Logo"></a>
	</div>
	<div id="mobile-menu-icon">
		<i class="fas fa-bars open-menu"></i>
	</div>
	<div class="mobile-menu-wrapper homepage">
		<div id="close-menu">
			<i class="close fas fa-times"></i>
		</div>
		<ul class="mobile-menu">
			<li <?php if ($activePage == "Home"){?> class="active-page" <?php } ?>><a href="<?php echo $path?>">Home</a></li>
			<li class="pointer" data-popup-open="popup-portfolio">What</li>
			<li <?php if ($activePage == "How"){?> class="active-page" <?php } ?>><a href="<?php echo $path?>how/">How</a></li>
			<li <?php if ($activePage == "Who"){?> class="active-page" <?php } ?>><a href="<?php echo $path?>who/">Who</a></li>
			<li class="pointer" data-popup-open="popup-1">Get In Touch</li>
		</ul>
	</div>
</div>
<div class="nav-container fixed">
	<div class="nav-content">
		<div class="logo-wrapper">
			<a href="<?php echo $path?>"><img src="<?php echo $path?>img/content/logo-black.png" alt="TAG Logo"></a>
		</div>
		<div>
			<ul>
				<li class="pointer" data-popup-open="popup-portfolio">What <span class="hover-bar"></span></li>
				<a href="<?php echo $path?>how"><li <?php if ($activePage == "How"){?> class="active-page" <?php } ?>>How <span class="hover-bar"></span></li></a>
				<a href="<?php echo $path?>who"><li <?php if ($activePage == "Who"){?> class="active-page" <?php } ?>>Who <span class="hover-bar"></span></li></a>
				<li class="btn" data-popup-open="popup-1">Contact <span class="hover-bar"></span></li>
			</ul>
		</div>
	</div>
</div>
