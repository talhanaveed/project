<html>
	<head>
		<title>Sign In | LinkedIn</title>
	
		<link rel="stylesheet" type="text/css" href="/Project/styles/login.css">
		<script type="text/javascript" src="/Project/assets/js/common/login.js" ></script>
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
					<form id = "sign" name="signin-form" method="POST" onclick="return validateForm()">
						<ul>
							<li class = "text_list">
								<label for = "email">Email address:</label>
								<div class = "sign_field">
									<span class = "error" id="email-error">Please enter a valid email address.</span>
									 <span class = "error" id="email-error2">The text you provided is too short (the minimum length is 3 characters, your text contains 1 characters).</span>
										
									<input class = "innn" name="email-field">
								</div>
							</li>

							<li class = "text_list">
								<label for = "pass">Password:</label>
								<div class = "sign_field">
									<span class = "error" id="pass-error">Please enter a password.</span>
									<span class = "error" id="pass-error2">The password you provided must have at least 6 characters.</span>
									<input class = "innn" name="pass-field">

									<a href = "forgotPassword" class = "sign_link">Forgot password?</a>
								</div>
							</li>

							<li class = "li_but">
								<input type = "submit" value = "Sign In">
								<span>or<a href = "joinToday" class = "sign_link">Join LinkedIn</a></span>
								
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
					<li><a href = "userAgreement">User Agreement</a></li>
					<li><a href = "viewPolicy">Privacy Policy</a></li>
					<li><a href = "viewTemp">Community Guidelines</a></li>
					<li><a href = "viewTemp">Cookie Policy</a></li>
					<li class = "last"><a href = "viewTemp">Copyright Policy</a></li>
				</ul>
				
			</div>
		</div>

	</body>
</html>