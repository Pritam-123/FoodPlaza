<?php
include_once("db.php");
?>

<?php

if(isset($_POST['ok']))
	
	{
		$name=$_POST['Name'];
		$phno=$_POST['Ph_no'];
		$email=$_POST['Email'];
		$password=$_POST['Password'];
		$repassword=$_POST['Re_Password'];
		
			if($password==$repassword)
				{
					$data=mysqli_query($conn,"insert into `user`(`name`, `email`, `pwd`, `ph_no`) values ('$name','$email', '$password','$phno')");
					
						if($data==1)
							{
								echo"<script>alert('Account Created'); location.href='index.php';</script>";
							}
						else{
								echo "Error occured!!! Try Again".$data.error(); }
				}
			else{
				echo"<script>alert('Password miss matched'); location.href='register.php';</script>";
			}
					
		}
				
?>