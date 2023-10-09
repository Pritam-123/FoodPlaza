<?php include("db.php"); ?>
<?php
	$rid=$_POST['rid'];
	$mname=$_POST['mname'];
	$mprice=$_POST['mprice'];
	$description=$_POST['description'];
	$img=$_FILES['img']['name'];

	$img_new=rand().'_'.$img;

	$mimg="product/".$img_new;

	if($_FILES['img']['type']=="image/jpg" || $_FILES['img']['type']=="image/jpeg" || $_FILES['img']['type']=="image/gif" || $_FILES['img']['type']=="image/png")
		{
			move_uploaded_file($_FILES['img']['tmp_name'],$mimg);
		
			$sql="INSERT INTO `menu_item`(`rid`, `mimg`, `mname`, `mprice`, `description`) VALUES
		('$rid', '$mimg', '$mname', '$mprice', '$description')";
		
			mysqli_query($con, $sql);
		
			echo "<script>alert('Menu Added Successfully....');location.href='add_item.php'; </script>";
			exit;
		}
		else
		{
			echo "<script>alert('Please Select image Format File'); location.href='add_item.php'; </script>";
			exit;
		}

?>