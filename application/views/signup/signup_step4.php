<!DOCTYPE html>
<html>
	<head>
		<title>Signup_Step4</title>
		<link rel="stylesheet" type="text/css" href="/Project/assets/css/styles/signup_step4.css">
		<script type="text/javascript" src="/Project/assets/js/signup_step4.js" ></script>
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

						<div class = "alert-success" id = "alert" style="display: none;">
							<p>
								<strong>One invitation has been sent.</strong>
							</p>
							<button class = "dismiss" onclick = "close();"></button>
						</div>

						<div class = "heading">
							<h1>
								Why not invite some people?
							</h1>

							<!-- <div class = "progress"> -->
								
								<div class = "progress-meter">
									<span class = "has-progress"></span>
								</div>

								<div class = "summ">
									Step <strong>2</strong> of <strong>7</strong>
								</div>
							<!-- </div> -->
						</div>

						<h2 class = "h2">Stay in touch with your contacts who aren't on LinkedIn yet. Invite them to connect with you.</h2>

						<form>
							<div class = "header">
								<p class = "select-all">
									<input type = "checkbox" checked = "checked">
									<label>Select All</label>
								</p>
								<p class = "num-selected"><span>2 </span>Selected</p>
							</div>

							<div class = "contacts">
								<div class = "temppp">
									<ul class = "list">
										<li class = "item">
											<label>
												<input type = "checkbox" checked = "checked">
												<span class = "email">blueflame896@gmail.com</span>
											</label>
										</li>
										<li class = "item">
											<label>
												<input type = "checkbox" checked = "checked">
												<span class = "email">redflame556@gmail.com</span>
											</label>
										</li>
									</ul>
								</div>
							</div>

							<div class = "li_but">
								<input type = "submit" value = "Add Connection(s)">
								<span>or<a href = "<?php echo base_url();?>index.php/signup/signup/callStep5">Skip this step</a><p>&raquo</p></span>
							</div>

						</form>

						
						<!-- <div class = "skip">
							
							<p>&raquo</p>
							<a href = "#">Skip this step</a>
						</div> -->
						
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