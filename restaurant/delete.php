<?php include_once('db.php'); ?>

<?php
	$mid=$_GET['id'];

	$sql=mysqli_query($con, "DELETE FROM `menu_item` WHERE `mid`='$mid'");
	if ($sql) {
		echo "<script>alert('Item Deleted Successfully!!!'); location.href='view_menu.php';</script>";
		exit;
	} else{
		echo "<script>alert('Error occured'); location.href='view_menu.php';</script>";
		exit;
	}
?>