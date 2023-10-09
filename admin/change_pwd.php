<?php
include('db.php');

if(isset($_POST['change']))
{
	$pwd=$_POST['pwd'];
	$c_pwd=$_POST['c_pwd'];
	$email=$_SESSION['einfo']['email'];

	if ($_SESSION['einfo']['pwd']==$pwd) {
		$sql = "UPDATE `employee` SET `pwd`='$c_pwd' WHERE `email`='$email'";
		if(mysqli_query($con, $sql)) {
			$_SESSION['einfo']['pwd']=$c_pwd;
			echo "<script>alert('Password Changed Succesfully.'); location.href='setting.php';</script>";
		} else{
			echo "<script>alert('No Such User Is There.'); location.href='setting.php';</script>";
		}		
	} else{
		echo "<script>alert('Worng Password'); location.href='setting.php';</script>";
	}	
} else{
	header('location:setting.php');
}

?>