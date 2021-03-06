<!DOCTYPE html>
<html>
	<head>
		<title>LinkedIn | Signup Step 2</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/styles/signup_step2.css">
		<!-- <script type="text/javascript" src="<?php echo base_url()?>assets/js/signup/step1.js" ></script> -->
	</head>

	<body>
		<div id="header">
			<div class="temp">
				<div class="logo" id="logo-linkedin">
				<img src="<?php echo base_url()?>/assets/img/images/head_logo.png" >
				</div>
			</div>
		</div>

		<!-- ************* - BODY - *************** -->

		<div id = "body">
			<div class = "wrapper">
				<div class = "ex">
					<div id = "main">
						<div class = "heading">
							<h1>
								Grow your network on LinkedIn
							</h1>

				<!-- 			<div class = "progress"> -->
								
								<div class = "progress-meter">
									<span class = "has-progress"></span>
								</div>

								<div class = "summ">
									Step <strong>2</strong> of <strong>7</strong>
								</div>
						<!-- 	</div> -->
						</div>

						<div class = "cover">
							<div class = "content">
								<p class = "intro">Get started by adding your email address.</p>
								<form action="<?php echo base_url();?>index.php/signup/signup/processAgain" method="POST" id="e-form" name="e-form">
									<ul>
										<li>
											<label>Your Email:</label>
											<div class = "fieldgroup">
												<input type = "email" name="user-email" value="<?php echo $email;?>">
											</div>
										</li>
									</ul>

									<div class = "btn">
										<input type = "submit" value = "Continue">
									</div>

									<p class = "note">We will not store your password or email anyone without your permission.</p>
							
							</div>
						</div>

						<div class = "skip">
							
							<p>&raquo</p>
							<a href = "<?php echo base_url();?>index.php/signup/signup/callStep5">Skip this step</a>
						</div>
						
					</div>
				</div>
			</div>
		</div>

		<div id="footer">
 			<div id="legal">
	 			<p id="copyright">LinkedIn Corporation &copy 2013</p>
				<p id="terms-of-use">
	 			Commercial use of this site without express authorization is prohibited.
				</p>
 			</div>
		</div>

	</body>
</html>