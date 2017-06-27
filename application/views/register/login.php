<html>
	<head>
		<script>
		</script>
	</head>
	<body>
		<form method="post" action="<?php echo base_url();?>Welcome/loginVerify">
			<table border="1">
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value=""></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="pwd" value=""></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="Login"></td>
				</tr>
			</table>
		</form>
	</body>
</html>