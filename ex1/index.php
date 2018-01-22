<html>
<body>
	<?php include 'includes/header.php';?>
	
	<?php $noah = array("Noah", "Red", "Walk the Line", "A Song of Ice and Fire series", "YouTube");?>

	<h1><?php echo $noah[0];?></h1>

	<ul>
	<?php
		for($x=1; $x<5; $x++)
		{?><li><?php echo $noah[$x];?></li><?php ;}
	?>
	</ul>

	<?php include 'includes/footer.php';?>
</body>
</html>