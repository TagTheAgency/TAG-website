		<footer>
			<div class="flex-row contact-block">
				<div class="hover flex-col popup-trigger" data-popup-open="popup-1">
					<h4>Get In Touch</h4>
					<p>UNICORN@TAGTHEAGENCY.COM</p>
				</div>
			</div>
			<div class="flex-row flex-btm footer-container">
				<div class="flex-col footer-nav">
					<ul>
						<li><a href="./index.php">Homepage</a></li>
						<li data-popup-open="popup-1" >Contact</li>
						<li id="top-btn">Top</li>
					</ul>
				</div>
				<div class="flex-col">
					<div class="social-icons">
						<a href="https://www.facebook.com/TAGTheAgency/" target="_blank"><i class="fab fa-facebook"></i></a>
						<a href="https://twitter.com/tagtheagency" target="_blank"><i class="fab fa-twitter"></i></a>
						<a href="https://www.instagram.com/tagtheagency/" target="_blank"><i class="fab fa-instagram"></i></a>
					</div>
				</div>
			</div>
			<div class="popup portfolio" data-popup="popup-portfolio">
				<div class="popup-close" data-popup-close="popup-portfolio"><i class="fas fa-times"></i></div>
				<div class="popup-content-wrapper" data-popup-close="popup-portfolio">
					<div class="popup-logo">
						<a href="./index.php"><img src="img/content/logo-white.png" alt="TAG Logo"></a>
					</div>
					<iframe src="https://e.issuu.com/issuu-reader3-embed-files/1402/iframe-embed.html?identifier=xflcm7puwxkb&amp;hostUrl=http%3A%2F%2Ftomreidy.com%2F&amp;hostReferrer&amp;embedType=script&amp;u=tomreidy&amp;d=tag_portfolio_-_value_proposition_-&amp;p=1" style="border:none;width: 100%;min-height: 350px;" title="issuu.com" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" msallowfullscree=""></iframe>
				</div>
			</div>
		</footer>
		<?php require_once(TEMPLATES_PATH . "/contact-form.php") ?>
		<!-- Gallery Script -->
		<script>
		var slideIndex = [1,1];
		var slideId = ["slides1", "slides2"]
		showDivs(1, 0);
		showDivs(1, 1);

		function plusDivs(n, no) {
			showDivs(slideIndex[no] += n, no);
		}

		function showDivs(n, no) {
			var i;
			var x = document.getElementsByClassName(slideId[no]);
			if (n > x.length) {slideIndex[no] = 1}
			if (n < 1) {slideIndex[no] = x.length}
			for (i = 0; i < x.length; i++) {
			 x[i].style.display = "none";
			}
			if(!x[slideIndex[no]-1]){
				return;
			} else{
				x[slideIndex[no]-1].style.display = "block";
			}
		}
		</script>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/scrollify.js"></script>
		<script src="js/script.min.js"></script>
		<script src="js/app.js"></script>
	</body>
</html>
