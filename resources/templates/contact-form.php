<div class="popup contact-form-wrapper" data-popup="popup-1">
	<div class="form-container">
		<div class="popup-close" data-popup-close="popup-1"><i class="fas fa-times"></i></div>
		<div class="contact-title">
			<h3>Get In Touch</h3>
			<p class="region-help">Please select a region</p>
			<div class="contact-region">
				<div class="nz region-select">
					<img id="nz-img" src="<?php echo $path;?>img/layout/n.png" alt="nz icon">
					<p>New Zealand <span class="hover-bar"></span></p>
				</div>
				<div class="aus region-select">
					<img id="aus-img" src="<?php echo $path;?>img/layout/au.png" alt="aus icon">
					<p>Australia <span class="hover-bar"></span></p>
				</div>
			</div>
		</div>
		<form method="POST" id="contactform" class="contact-form submitted" name="contactform" action="mailer.php">
			<input id="region" type="hidden" name="region" value="nz">
			<div class="form-section">
				<input id="form-name" type="text" name="name" placeholder="NAME *" required>
			</div>
			<div class="form-section">
				<input id="form-email" type="email" name="email" placeholder="EMAIL *" required>
			</div>
			<div class="form-section">
				<input type="text" name="phone" placeholder="PHONE">
			</div>
			<div class="form-section">
				<input id="form-message" type="text" name="message" placeholder="MESSAGE" required>
			</div>
			<div class="form-section">
				<p>Required fields marked with an *</p>
			</div>
			<div class="form-section submit-btn">
				<span></span><input id="submit-btn" class="submit" type="submit" name="submit">
			</div>
		</form>
	</div>
</div>
