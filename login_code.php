<?php
include_once("db.php");
?>

<?php
if(isset($_POST['login']))
	
	{
		$log_id=$_POST['log_id'];
		$password=$_POST['pwd'];

		echo $log_id." ".$password;
		
			$data=mysqli_query($conn,"select * from `user` where `email`='$log_id' or `ph_no`='$log_id' and `pwd`='$password'") or die(mysqli_error($conn));
				
				if(mysqli_num_rows($data))
					{
						$row=mysqli_fetch_array($data);
						$_SESSION['uinfo']=$row;
						header('location: restaurant.php');
						exit;
					}
				else{
						echo "<script>alert('Login Error'); location.href='login.php';</script>";
						exit;
					
					}
	}
?>
