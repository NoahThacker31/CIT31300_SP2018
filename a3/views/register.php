<?php include('elements/header.php'); ?>
<div class="container">
	<div class="page-header">
	<h1>Register</h1>
	<h4>Register Today</h4>
	<?php echo $numbers ?>
	<form action="<?php echo BASE_URL; ?>register/add" method="POST">
		<table>
			<?php if($message) {
				echo '<tr><td colspan="2"><div class="alert alert-success"
				>'.$message.'</div></td></tr>';
			}?>
			<tr>
				<td>First Name: </td>
			</tr>
			<tr>
				<td><input name="first_name" type="text" /></td>
			</tr>
			<tr>
				<td>Last Name: </td>
			</tr>
			<tr>
				<td><input name="last_name" type="text" /></td>
			</tr>
			<tr>
				<td>Email: </td>
			</tr>
			<tr>
				<td><input name="email" type="text" /></td>
			</tr>
			<tr>
				<td>Password: </td>
			</tr>
			<tr>
				<td><input name="password" type="password" /></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="Register Today!" /></td>
			</tr>
		</table>
	</form>
	</div>
</div>
<?php include('elements/footer.php');?>