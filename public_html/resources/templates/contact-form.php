<div class="popup contact-form-wrapper" data-popup="popup-1">
	<div class="form-container">
		<div class="popup-close" data-popup-close="popup-1"><i class="fas fa-times"></i></div>
		<div class="contact-title">
			<h3>Get In Touch</h3>
			<div class="contact-region">
				<div class="nz active-region">
					<img id="nz-img" src="img/layout/n-hover.png" alt="nz icon">
					<p>New Zealand</p>
				</div>
				<div class="aus">
					<img id="aus-img" src="img/layout/au.png" alt="aus icon">
					<p>Australia</p>
				</div>
			</div>
		</div>

		<form method="POST" id="contactform" class="contact-form" name="contactform" action="mailer.php">
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
