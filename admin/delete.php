<?php include_once('db.php'); ?>

<?php
	$rid=$_POST['rname'];

	$s=mysqli_query($con, "DELETE FROM `restaurant` WHERE `rid`='$rid'");
	if($s){
			$sql=mysqli_query($con, "DELETE FROM `menu_item` WHERE `rid`='$rid'");
			if ($sql) {
				echo "<script>alert('Deleted Successfully!!!'); location.href='delete_restaurant.php';</script>";
				exit;
			} else {
				echo "<script>alert('Error occured'); location.href='delete.php';</script>";
				exit;
			}
	} else {
				echo "<script>alert('Error occured'); location.href='delete.php';</script>";
				exit;
			}
?>