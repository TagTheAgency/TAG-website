<div class="fixed navigation homepage">
	<div class="logo-wrapper">
		<a href="/"><img id="tag-logo" class="logo" src="/img/content/logo-white.png" alt="TAG Logo"></a>
	</div>
	<div class="social-icons">
		<a href="https://www.facebook.com/TAGTheAgency/" target="_blank"><i class="fab fa-facebook"></i></a>
		<a href="https://twitter.com/tagtheagency" target="_blank"><i class="fab fa-twitter"></i></a>
		<a href="https://www.instagram.com/tagtheagency/" target="_blank"><i class="fab fa-instagram"></i></a>
	</div>
</div>
<div class="mobile-navigation fixed">
	<div class="logo-wrapper">
		<a href="/"><img id="tag-logo-mobile" src="/img/content/logo-white.png" alt="TAG Logo"></a>
	</div>
	<div id="mobile-menu-icon">
		<i class="fas fa-bars"></i>
	</div>
</div>
<div class="mobile-menu-wrapper homepage">
	<div id="close-menu">
		<i class="fas fa-times"></i>
	</div>
	<ul class="mobile-menu">
		<li <?php if ($activePage == "Home"){?> class="active-page" <?php } ?>><a href="/">Home</a></li>
		<li <?php if ($activePage == "How"){?> class="active-page" <?php } ?>><a href="/how/">How</a></li>
		<li <?php if ($activePage == "Who"){?> class="active-page" <?php } ?>><a href="/who/">Who</a></li>
		<li class="pointer" data-popup-open="popup-1">Get In Touch</li>
	</ul>
</div>
