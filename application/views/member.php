<?php
$data = $data[0];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome <?php echo $data->name; ?></title>
	<!-- <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script> -->
	<script src="<?php echo base_url("assets/Javascript/Jquery/jquery.js");?>"></script>
	<script>
			// $(document).ready(function(){
			// 	$("#link_logout").on('click',function(){
			// 		if(confirm("Are sure to logout "+ '<?php echo $data->name; ?>'+"?"))
			// 		{
			// 			$.ajax({
			// 				url: '<?php echo base_url('login/logout_member'); ?>',
			// 				type: 'POST',
			// 				dataType: 'text',
			// 				success:function()
			// 				{
			// 					window.location.href = '<?php echo base_url('login'); ?>';
			// 				}
			// 				});
			// 		}
			// 		});
			// 	});
	</script>
	</head>
<body>
	
Hello <?php echo $data->name; ?><br>
<a id="link_logout" href="<?php echo base_url('login/logout_member'); ?>">LogOut</a><br>
Visits <?php echo $hit_count; ?>
</body>
</html>
