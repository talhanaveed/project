<!DOCTYPE html>
<html>
	<head>
	    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>
	    <script src="http://cdn.embed.ly/jquery.embedly-3.1.1.min.js" type="text/javascript"></script>
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/mytest.css">
		<!-- <script type="text/javascript" src="<?php //echo base_url();?>/assets/js/myttt/jquery-1.2.6.min.js" ></script> -->

	</head>
		
	<body>
		<div id = "input">
			<?php echo $id?>
			<!-- <h2>! .. Congradulations .. !</h2>
			<input type = "text" value = "http://www.cnn.com" id = "mine">
			<button id = "btn">Parse</button> -->
		</div>
		
		<div id = "content">
			<a id = "a" href = ""></a>
		</div>
	</body>

	<script>

		//$('#content a').embedly({key: 'ceacc377e4664cdfa0f5a359be04a26e'});
		
		// $.embedly.extract('http://edition.cnn.com/').progress(function(data){
		// 	//alert(data.title);
		// 	//alert(data.description);
		// 	alert(data.html);
		// });
		$.embedly.defaults.key = 'ceacc377e4664cdfa0f5a359be04a26e';
		$('#btn').click(function(){
			var x = document.getElementById('mine').value;
			document.getElementById('a').href = x;

			var y = document.getElementById('a').href;
			$('#content').css('display', 'block');
			$('#a').embedly();
		});

		
		//$('a').embedly({query: {maxwidth: 600}, 'method':'after'});
	</script>

</html>