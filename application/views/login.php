<?php 

?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $form_name; ?></title>
</head>
<body>
	<form method="POST" enctype="multipart/form-data" action="<?php echo base_url();?>login/user">
		<input type="text" name="username" placeholder="Username"><br>
		<input type="password" name="password" placeholder="Password"><br>
		<input type="submit" name="login">
	</form>
	<br>
	You Visited <?php echo $hit_count; ?>
</body>
</html>