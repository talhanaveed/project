<!DOCTYPE html>
<html>
	<head>
		<title>Signup_Step3</title>
		<link rel="stylesheet" type="text/css" href="/Project/assets/css/styles/signup_step3.css">
		<!-- <script type="text/javascript" src="/Project/assets/js/signup/step1.js" ></script> -->
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
						<div class = "heading">
							<h1>
								Connect with people you know on LinkedIn
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

						<h2 class = "h2">We found <?php echo $count?> person you know on LinkedIn. Select the people you'd like to connect to.</h2>

						<form>
							<div class = "header">
								<p class = "select-all">
									<input type = "checkbox" checked = "checked" id="all" onclick="check();">
									<label>Select All</label>
								</p>
								<p class = "num-selected"><span id="num-selected"><?php echo $count?> </span>Selected</p>
							</div>

							<div class = "contacts">
								<div class = "temppp">
									<div class = "row">
										<?php foreach ($names as $i => $value) 
  								    {?>
										<div class = "person">
											<input type = "checkbox" checked = "checked" id="checkbox">
											<img src = "/Project/assets/img/images/person.png">
											<div class = "details">
												<label>
													<span class = "fn"><?php echo $names[$i]?></span>
													<!-- <span class = "ln">Naveed</span> -->
												</label>
												<p class = "mail"><?php echo $emails[$i]?></p>
												<p class = "title"><?php echo $company[$i]?></p>
											</div>
										</div>
										<?php }?>
									</div>
								</div>
							</div>

							<div class = "li_but">
								<input type = "submit" value = "Add Connection(s)">
								<span>or<a href = "<?php echo base_url();?>index.php/signup/signup/callStep4">Skip this step</a><p>&raquo</p></span>
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
<script type="text/javascript">

	function check()
	{
		var val=document.getElementById('all');
		if(val.checked)
		{
			document.getElementById('checkbox').checked='checked';
	
		}
	
	}

</script>
	</body>
</html
