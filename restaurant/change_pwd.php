<?php
include('db.php');

if(isset($_POST['change']))
{
	$pwd=$_POST['pwd'];
	$c_pwd=$_POST['c_pwd'];
	$email=$_SESSION['rinfo']['email'];

	//echo $email." ".$pwd." ".$_SESSION['rinfo']['pwd'];

	if ($_SESSION['rinfo']['pwd']==$pwd) {
		$sql = "UPDATE `restaurant` SET `pwd`='$c_pwd' WHERE `email`='$email'";
		if(mysqli_query($con, $sql)) {
			$_SESSION['rinfo']['pwd']=$c_pwd;
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