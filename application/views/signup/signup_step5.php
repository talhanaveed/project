<!DOCTYPE html>
<html>
	<head>
		<title>Signup_Step5</title>
		<link rel="stylesheet" type="text/css" href="/Project/assets/css/styles/signup_step5.css">

	</head>

	<body>
		<div id="header">
			<div class="temp">
				<div class="logo" id="logo-linkedin">
				<img src="/Project/assets/img/images/head_logo.png" >
				</div>
			</div>
		</div>

		<!-- ************* - BODY - *************** -->

		<div id = "body">
			<div class = "wrapper">
				<div class = "ex">
					<div id = "main">

						<div class = "alert-success" id = "alert" style="display:none;">
							<p>
								<strong>N invitations have been sent.</strong>
							</p>
							<button class = "dismiss" onclick = "close();"></button>
						</div>

						<div class = "heading">
							<h1>
								Congratulations! You've just created your professional profile.
							</h1>

							<!-- <div class = "progress"> -->
								
								<div class = "progress-meter">
									<span class = "has-progress"></span>
								</div>

								<div class = "summ">
									Step <strong>4</strong> of <strong>7</strong>
								</div>
							<!-- </div> -->
						</div>

						<div class = "mini">
							<h1>Ahsan Ellahi</h1>
							<p class = "title">DaMoN</p>
							<label>
								<span>Pakistan</span>
								<span class = "last">Gaming</span>
							</label>
						</div>

						<form>
							<div class = "message">
								<textarea class = "area">I just joined LinkedIn and created my professional profile. Join my network. http://lnkd.in/bwzn-Zh</textarea>
								<p class = "count">Count: 107</p>
								<p class = "url">Your profile URL: http://lnkd.in/bwzn-Zh</p>
							</div>
						</form>

						<div class = "bot">
							<button class = "btn-ico"><span>Share on Facebook</span></button>
							<button class = "btn-icon"><span>Share on Twitter</span></button>
							<!-- <p>&raquo</p> -->
							<a href = "<?php echo base_url();?>index.php/upload">Skip this step &raquo</a>
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