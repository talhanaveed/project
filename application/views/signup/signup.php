<html>
	<head>
		<title>LinkedIn | Signup</title>

		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/styles/signup.css">
		<script type="text/javascript" src="<?php echo base_url();?>/assets/js/common/main_screen.js" ></script>
	</head>

	<body>

		<!-- ************ MID ************ -->
		<div id="top-header">
			<div class="wrapper">

				<div class="logo" id="logo-linkedin">
				 <img src="<?php echo base_url()?>assets/img/images/head_logo.png" >
				 </div>
				 <p id="message">
                                Already on LinkedIn? <a href="<?php echo base_url();?>index.php/login/login">Sign in</a>
                </p>
			</div>
		</div>

		<div id = "body">
			<div class = "wrapper2">
						<?php if($msg){?>
                    <div id="msg">
                        <p><?php echo $msg ?></p>
                    </div>
               <?php } ?>
				<div id = "main">
					        <div id="alert">
							 <div class="alert2">
							 <p><strong>There were one or more errors in your submission. Please correct the marked field(s) below.</strong></p>
							 </div>
							</div>
					<div class = "intro">
						<h1>To join LinkedIn, sign up below...it's free!</h1>
					</div>
					<div id = "content">
						<div class = "temp">
						<div class = "container">

							 <form  action="<?php echo base_url();?>index.php/signup/signup/save_info" method="POST" id="signup-form" name="signup-form" onsubmit="return validateForm();" >
								 <input type="hidden" name="isJsEnabled" value="true">    
								<ul>
									<li>
										<label>First Name:</label>
										<div class = "field">
											<span class = "error" id="firstname-error">Please enter a first name.</span>
											   <?php if (@$user_profile): ?>
											<input type = "text" class = "focus" name="firstname" value="<?= $user_profile['first_name']?>">
										
											<?php else:?>
											 <input type = "text" class = "focus" name="firstname" >
											<?php endif?>
										
									
										</div>
									</li>
									<li>
										<label>Last Name:</label>
										<div class = "field">
											<span class = "error" id="lastname-error">Please enter a last name.</span>
											  <?php if (@$user_profile): ?>
											<input type = "text" class = "focus" name="lastname" value="<?= $user_profile['last_name']?>">


											<?php else:?>
											 <input type = "text" class = "focus" name="lastname" >
											<?php endif?>
										</div>
									</li>
									<li>
										<label>Email:</label>
										<div class = "field">
											<span class = "error" id="email-error">Please enter a valid email address.</span>
											<span class = "error" id="email-error2">The text you provided is too short (the minimum length is 3 characters, your text contains 1 characters).</span>
											
  											<?php if (@$user_profile): ?>
											<input type = "text" class = "focus" name="email-field" value="<?= $user_profile['email']?>">

											<?php else:?>
											 <input type = "text" class = "focus" name="email-field" >
											<?php endif?>
										</div>
									</li>
									<li>
										<label>New Password:</label>
										<div class = "field">

											<span class = "error" id="pass-error">Please enter a password.</span>
                 						 <span class = "error" id="pass-error2">The password you provided must have at least 6 characters.</span>
											<input type = "password" class = "focus" name="pass-field">
										</div>
										<p class = "note">6 or more characters</p>
									</li>
								</ul>

								<p class="actions">
				                
				                <input type="submit" name="" value="Join LinkedIn" id="btn" class="btn-tertiary" > <a>*</a>
				        			
				              </p>

				              <p id="register-custom-nav" class="key">
                                Already on LinkedIn? <a href="<?php echo base_url();?>index.php/login/login">Sign in</a>
               				 </p>
						
						</div>
						</div>
						   <?php if (@$login_url): ?>
					       
					            
						<div id="fb-sec">

							<div class="sign-in">
								<p class="handwritten">Save time by using your Facebook account to sign up for LinkedIn.</p>
							</div>
							<p class="actions2">
							<a class="fb_button" href="<?= $login_url ?>" id="yui-gen3"><span class="fb_button_text">Sign up with Facebook</span></a>
							</p>
						</div>
						<?php endif; ?>


					</div>
						<p id="agreement">
					            * By joining LinkedIn, you agree to LinkedIn's <a  href="<?php echo base_url();?>index.php/main/userAgreement">User Agreement</a>, <a  href="<?php echo base_url();?>index.php/main/viewPolicy">Privacy Policy</a> and <a target="_blank" href="<?php echo base_url();?>index.php/main/viewTemp">Cookie Policy</a>
					  </p>
				</div>
			</div>
		</div>
		<div id="footer">
 		
 			<div id="legal">
 			<p id="copyright">LinkedIn Corporation 2013</p>
			 <p id="terms-of-use">
 			Commercial use of this site without express authorization is prohibited.
			</p>
 	
 			</div>
		</div>




	</body>
</html>