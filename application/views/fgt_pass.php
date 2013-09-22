<html>
	<head>
		<title>Password Change | LinkedIn</title>

		<link rel="stylesheet" type="text/css" href="/Project/styles/fgt_pass.css">
	</head>

	<body>


		<div class = "toop"></div> <!--  virtual box  body to make (Footer n Header) separate  -->

		<!-- *************  	-	 MID 	-	**************** -->

		<div id = "body">
			<div class = "wrapper">
				   <div id="alert">
							 <div class="alert2">
							 <p><strong>Please correct the marked field(s) below.</strong></p>
							 </div>
							</div>
				<form>
					<h1 class = "mid_heading">Changing your password is simple</h1>
					<p>Please enter your email address to get instructions.</p>
					<div class = "text_box">
						<span class = "error" id="error1">Please enter a valid email address.</span>
						<input type="text" id="text1">
					</div>
					
					<p class = "cont_but">
						<input type = "submit" value = "Continue" class = "in_but" onclick="return validateInput()">
					</p>
				</form>
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
<script type="text/javascript">

	function validateInput()
	{
		var val=document.getElementById('text1').value;
		if(val.length<3)
		{
			document.getElementById('error1').style.display='block';
			document.getElementById('alert').style.display='block';
			return false;
		}
		return true;
	}

</script>
	</body>
</html>