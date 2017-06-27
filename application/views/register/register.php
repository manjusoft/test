<html>
	<head>
		<script>
		</script>
	</head>
	<body>
		<?php
foreach ($res as $v){
    $id=$v['id'];
    
} ?>
		<form method="post" action="<?php echo base_url();?>Welcome/registerSave">
		<?php if($id==''){ ?>
		<input type="hidden" name="id" value="0">
		<table border="1">
			<tr>
					<td>Name</td>
					<td><input type="text" name="name" value=""></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value=""></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="pwd" value=""></td>
				</tr>
				<tr>
					<td>Mobile</td>
					<td><input type="text" name="mobile" value=""></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="Save"></td>
				</tr>
			</table>
		<?php }else{
foreach ($res as $v){
    $id=$v['id'];
    $name=$v['name'];
	$email=$v['email'];
	$password=$v['password'];
	$mobile=$v['mobile'];
}

		?>
		<input type="hidden" name="id" value="<?php echo $id;?>">
			<table border="1">
			<tr>
					<td>Name</td>
					<td><input type="text" name="name" value="<?php echo $name;?>"></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="<?php echo $email;?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="pwd" value="<?php echo $password;?>"></td>
				</tr>
				<tr>
					<td>Mobile</td>
					<td><input type="text" name="mobile" value="<?php echo $mobile;?>"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="Save"></td>
				</tr>
			</table>
		<?php } ?>
		</form>
	</body>
</html>