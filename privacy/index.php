<?php
	// Load up the config file
	require_once("../resources/config.php");

	$path = "../";
	$requested_path = $_SERVER['REQUEST_URI'];
	if (endsWith($requested_path, 'what')) {
		$path = "./";
	}

	require_once(TEMPLATES_PATH . "/header.php");
	$activePage = "privacy";
	require_once(TEMPLATES_PATH . "/second-nav.php");
?>
<div id="privacy-policy" class="master-container">
	<div class="row pt-1 pt-md-5 justify-content-center">
		<div class="container px-md-5 mt-5 py-5 row justify-content-center">
			<div class="row px-md-5 col-12 mb-4">
				<div class="col-12 px-md-5 text-left">
					<h1 class="font-3 mb-5 black">Privacy Policy</h1>
					<div>
						<h3 class="black mb-2">Purpose</h3>
						<p>The purpose of this privacy policy is to let users of TAG The Agency (the “Site”) know when we collect personal information and what we do with it.  We do not use, share or transfer personal information except as set out in this policy.</p>
					</div>
					<hr class="my-5">
					<div>
						<h3 class="black mb-3">Collection, Storage and Use</h3>
						<ol class="pl-3">
							<li class="mb-4"><p>No need to disclose personal information - The Site can be viewed and its web feeds can be subscribed to without the need to disclose any personal information to us.</p></li>
							<li class="mb-4"><p>Your disclosure of personal information - You may decide to disclose personal information to us by providing identifying information when:</p>
								<ul class="pl-5 pl-md-4 mt-2">
									<li class="mb-3">Obtaining a logon to the Site</li>
									<li class="mb-3">Subscribing to Site updates by email</li>
									<li class="mb-3">Adding comments, posts or other material to the Site</li>
									<li class="mb-3">Ordering products from the Site</li>
									<li class="mb-3">Providing feedback on the Site or our organisation</li>
									<li class="mb-3">Requesting contact and communication from the Site or TAG The Agency staff members. This information will be viewable by certain members of our staff. To the extent that it forms part of material that you have submitted to be published, it may also be viewable by members of the public.</li>
								</ul>
							</li>
							<li class="mb-4"><p>Holding of information - Personal information that you provide will be held by TAG The Agency.</p></li>
							<li class="mb-4">
								<p>Use of personal information - We will only use personal information provided to us for the following purposes: </p>
								<ul class="pl-5 pl-md-4 mt-2">
									<li class="mb-3">To provide services offered by this Site</li>
									<li class="mb-3">To enable users to collaborate and share information</li>
									<li class="mb-3">To administer and evaluate this Site</li>
									<li class="mb-3">To communicate with users of the Site</li>
								</ul>
							</li>
						</ol>
					</div>
					<hr class="my-5">
					<div>
						<h3 class="black mb-3">Statistical Information and Cookies</h3>
						<ol class="pl-3" start="5">
							<li class="mb-4"><p>Statistical information
We may collect statistical information about your visit to help us analyse usage of, and improve, the Site. This information includes:</p>
								<ul class="pl-5 pl-md-4 mt-2">
									<li class="mb-3">Users’ IP addresses</li>
									<li class="mb-3">Users’ search terms</li>
									<li class="mb-3">Pages accessed on the Site</li>
									<li class="mb-3">Links that are clicked on</li>
									<li class="mb-3">Date and time of Site visits</li>
									<li class="mb-3">Users’ operating systems</li>
									<li class="mb-3">Browsers used when accessing the Site</li>
								</ul>
							</li>
							<li class="mb-4"><p>This Site generates cookies and pixels for logged in users. The cookies, which can be found on your computer, are named Facebook Pixel</p></li>
							<li class="mb-4">
								<p>Your rights - You have the right to access and to request correction of any of your personal information provided to us in connection with your use of this Site. If you would like to see the personal information relating to you that we have stored, or to request correction of such personal information, or if you have any concerns regarding your privacy, please contact us by any of the means set out below. We may require proof of your identity before being able to provide you with any personal information.</p>
								<br>
								<a href="mailto:privacy@TAGTheAgency.com" target="_blank">TAG The Agency – privacy@TAGTheAgency.com</a>
							</li>
							<li class="mb-4">
								<p>
									Privacy Commissioner - If you are not satisfied with our response to any privacy-related concern you may have, you can contact the Privacy Commissioner:
								</p>
								<br>
								<p>
									Office of the Privacy Commissioner
									PO Box 10-094
									Wellington, New Zealand
									Phone: +64-4-474 7590
								</p>
							</li>
						</ol>
						<hr class="my-5">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require("../resources/popups/whatpopups.php"); ?>
<?php require_once(TEMPLATES_PATH . "/footer.php"); ?>
