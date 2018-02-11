<html>
<?php
include 'classes/user.class.php';
include 'classes/registered_user.class.php';
include 'classes/admin_user.class.php';
?>
<head>
</head>
<body>
	<?php
	$regUser = new registered_user("newuser", "regular");
	
	$regUser->set_fname($_POST["fname"]);
	$regUser->set_lname($_POST["lname"]);
	$regUser->set_email($_POST["email"]);
	
	if($regUser->get_user_type() == 1)
	{
		echo "Registered First Name: " . $regUser->get_fname() . "<br>";
		echo "Registered Last Name: " . $regUser->get_lname() . "<br>";
		echo "Registered Email: " . $regUser->get_email() . "<hr/>";
		echo "Processing complete.";
	}
	else
	{
		echo "Page failed to register user.";
	}
	?>
</body>
<footer>
</footer>
</html>