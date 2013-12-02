<html>
	<head>
		<title>Sign In | LinkedIn</title>
	
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/styles/login.css">
		<script type="text/javascript" src="<?php echo base_url();?>/assets/js/common/login.js" ></script>
		<script src="<?php echo base_url()?>assets/js/jquery-2.0.3.js"></script>
	</head>

	<body>



		<div class = "toop"></div> <!--  virtual box  body to make (Footer n Header) separate  -->

		<!-- *************	 -	 MID	-	**************** -->
	
		<div id = "body">
			<div class = "page_title">
				<h1>Sign in to LinkedIn</h1>
			</div>

			<div class = "body_wrapper">
			    <div id="alert">
							 <div class="alert2">
							 <p><strong>There were one or more errors in your submission. Please correct the marked field(s) below.</strong></p>
							 </div>
							</div>
				<div class = "body_main">
					
					<form id = "sign" action="<?php echo base_url();?>index.php/login/login/process" name="signin-form" method="POST" onsubmit="return validateForm()">
						<ul>
							<?php if(! is_null($msg)) echo $msg;?>
							<li class = "text_list">
								<label for = "email">Email address:</label>
								<div class = "sign_field">
									<span class = "error" id="email-error">Please enter a valid email address.</span>
									 <span class = "error" id="email-error2">The text you provided is too short (the minimum length is 3 characters, your text contains 1 characters).</span>
										
									<input class = "innn" name="email-field" type="text">
								</div>
							</li>

							<li class = "text_list">
								<label for = "pass">Password:</label>
								<div class = "sign_field">
									<span class = "error" id="pass-error">Please enter a password.</span>
									<span class = "error" id="pass-error2">The password you provided must have at least 6 characters.</span>
									<input type="password" class = "innn" name="pass-field">

									<a href = "<?php echo base_url();?>index.php/main/forgotPassword" class = "sign_link">Forgot password?</a>
								</div>
							</li>

							<li class = "li_but">
								<input type = "submit" value = "Sign In">
								<span>or<a href = "<?php echo base_url();?>index.php/signup/signup" class = "sign_link">Join LinkedIn</a></span>
								
							</li>

						</ul>
				
				</div>
			</div>
		</div>

		<!-- ***** - Footer - ***** -->

		<div id = "footer">
			<div class = "wrapper">
				<p id = "bot_logo">
					<span>LinkedIn zzzzzzzz</span>&copy 2013
				</p>

				<ul class = "legal">
					<li><a href = "<?php echo base_url();?>index.php/main/userAgreement">User Agreement</a></li>
					<li><a href = "<?php echo base_url();?>index.php/main/viewPolicy">Privacy Policy</a></li>
					<li><a href = "<?php echo base_url();?>index.php/main/viewTemp">Community Guidelines</a></li>
					<li><a href = "<?php echo base_url();?>index.php/main/viewTemp">Cookie Policy</a></li>
					<li class = "last"><a href = "<?php echo base_url();?>index.php/main/viewTemp">Copyright Policy</a></li>
				</ul>
				
			</div>
		</div>

	</body>
	<script>
		// $('.innn').focus(function(){
		// 	$(this).css('border', '1px solid #069');
		// });
	</script>
</html>