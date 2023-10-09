<?php
include_once("db.php");
?>

<?php
if(isset($_POST['login']))
	
	{
		$email=$_POST['email'];
		$password=$_POST['pwd'];
		
			$data=mysqli_query($con, "select * from `employee` where `email`='$email' and `pwd`='$password'");
				
				if(mysqli_num_rows($data))
					{
						$row=mysqli_fetch_array($data);
						$_SESSION['einfo']=$row;
						header('location: dashboard.php');
						exit;
					}
				else{
						echo "Login Error";
					
					}
				}
	?>
