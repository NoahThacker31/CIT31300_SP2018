<?php include('elements/header.php');?>
<div class="container">
	<div class="page-header">
   <h1>Login</h1>
   <h4>Log In</h4>
   <?php echo $numbers ?>
   <form action="<?php echo BASE_URL; ?>login/do_login" method="POST">
       <table>
            <tr>
                <td>Username/E-mail Address: </td>
			</tr>
			<tr>
				<td><input name="username" type="text" /></td>
			</tr>
			<tr>
                <td>Password: </td>
			</tr>
			<tr>
				<td><input name="password" type="password" /></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Log In" /></td>
            </tr>
        </table>
    </form>
  </div>
</div>
<?php include('elements/footer.php');?>