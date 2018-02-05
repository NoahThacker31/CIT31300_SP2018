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
	
	//$userLevel = "Regular User";
	//$userId = "crdillon";
	
	//$userLevel = "Administrator";
	//$userId = "dldillon";

	echo "User Level: " . $regUser->get_user_level() . "<br>";
	echo "Registered User ID: " . $regUser->get_user_id() . "<br>";
	echo "Registered User Type: " . $regUser->get_user_type() . "<br>";
	echo "Registered First Name: " . $regUser->get_fname() . "<br>";
	echo "Registered Last Name: " . $regUser->get_lname() . "<br>";
	echo "Registered Email: " . $regUser->get_email() . "<br>" . "<br>";
	
	echo "User Level: " . $adminUser->get_user_level() . "<br>";
	echo "Admin User ID: " . $adminUser->get_user_id() . "<br>";
	echo "Admin User Type: " . $adminUser->get_user_type() . "<br>";
	echo "Admin First Name: " . $adminUser->get_fname() . "<br>";
	echo "Admin Last Name: " . $adminUser->get_lname() . "<br>";
	echo "Admin Email: " . $adminUser->get_email();
?>
</body>

<footer></footer>