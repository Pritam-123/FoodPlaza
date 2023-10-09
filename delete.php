<?php include_once("db.php"); ?>
<?php
	 $id=$_GET['id'];

	 $qun=$_SESSION['order'][$id][1];

	 $len=count($_SESSION['order']);
	 
	 for ($i=$id; $i < $len-1; $i++) { 
	 	$_SESSION['order'][$i]=$_SESSION['order'][$i+1];
	 }

	 unset($_SESSION['order'][$i]);

	 $_SESSION['cart']=$_SESSION['cart']-$qun;

	 header("location:cart.php");
?>