<html>
<?php
include 'classes/user.class.php';
include 'classes/registered_user.class.php';
include 'classes/admin_user.class.php';
?>
<head></head>
<body>
<?php
	$regUser = new registered_user("Regular User", "crdillon");
	$adminUser = new admin_user("Administrator", "dldillon");
	
	echo "Before You Fill Out This Form, Let's Do Some Math!: " . registered_user::mathmaticEquation(5,3) . "<br>" . "<br>";
?>
	
<form action="results.php" method="post">
	First Name:     <input type="text" name="fname"><br><br>
	Last Name:      <input type="text" name="lname"><br><br>
	E-mail:         <input type="text" name="email"><br><br>
	<input type="submit">
</form>
	
</body>
<footer></footer>
</html>