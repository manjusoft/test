<html>
	<body>
		<form>
			<table border="1">
				<tr>
					<td>Name</td>
					<td>Email</td>
					<td>Password</td>
					<td>Mobile</td>
					<td>Action</td>
				</tr>
				<?php
				//echo $res;
				foreach($res as $r){
				?>
				<tr>
					<td><?php echo $r->name; ?></td>
					<td><?php echo $r->email; ?></td>
					<td><?php echo $r->password; ?></td>
					<td><?php echo $r->mobile; ?></td>
					<td><a href='<?php echo base_url();?>Welcome/editRegData?id=<?php echo $r->id; ?>'>Edit</a> | <a href='<?php echo base_url();?>Welcome/deleteRegData?id=<?php echo $r->id; ?>'>Delete</a></td>
				</tr>
				<?php	
				}
				?>
			</table>
		</form>
	</body>
</html>