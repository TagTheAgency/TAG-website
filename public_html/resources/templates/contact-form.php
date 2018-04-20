<div class="popup contact-form-wrapper" data-popup="popup-1">
	<div class="form-container">
		<div class="popup-close" data-popup-close="popup-1"><i class="fas fa-times"></i></div>
		<div class="contact-title">
			<h3>Get In Touch</h3>
		</div>
		<form method="POST" class="contact-form" name="contactform" action="">
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
				<input type="text" name="message" placeholder="MESSAGE" required>
			</div>
			<div class="form-section">
				<p>Required fields marked with an *</p>
			</div>
			<div class="form-section submit-btn">
				<span></span><input class="submit" type="submit" name="submit">
			</div>
		</form>
		<?php

		if(isset($_POST['submit'])){
			if (isset($_POST['name'])) {
			$name = $_POST['name'];
			}

			if (isset($_POST['email'])) {
			$email = $_POST['email'];
			}

			if (isset($_POST['phone'])) {
			$phone = $_POST['phone'];
			}

			if (isset($_POST['message'])) {
			$message = $_POST['message'];
			}

			$recipient="charlie@tagtheagency.com";
		    $subject="New Email Enquiry";
			$sender=$_POST["name"];
		    $senderEmail=$_POST["email"];
		    $message=$_POST["message"];

			$mailBody="Name: $sender\nEmail Address: $senderEmail\n\nMessage: $message";
			mail($recipient, $subject, $mailBody);
		}

		?>
	</div>
</div>
