<?php include("db.php"); ?>
<?php
	$mid=$_POST['mid'];
	$type=$_POST['type'];
	$status=$_POST['status'];
	$trend=$_POST['trend'];

	$sql="UPDATE `menu_item` SET `type`='$type', `status`='$status', `trend`='$trend' WHERE `mid`='$mid'";
		
			mysqli_query($con, $sql);
		
			echo "<script>alert('Menu Updated Successfully....');location.href='view_menu.php'; </script>";
			exit;
?>