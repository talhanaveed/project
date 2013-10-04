<html>
<head>
</head>

<body>

<form method="POST" action="<?php echo base_url();?>index.php/gmailFetch/import" name="gmail">
<label>email-address</label>
<input type="text" name="g-email" value="<?php echo $email;?>">

<label>password</label>
<input type="password" name="g-pass">

<input type="submit">
</body>
</html>