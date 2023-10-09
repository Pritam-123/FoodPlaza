<?php include_once("db.php"); ?>
<?php

	//if (isset($_POST['update'])) {
		$quantity=$_POST['quantity'];
		$id=$_POST['id'];

		$p_qn=$_SESSION['order'][$id][1];

		$_SESSION['cart']=($_SESSION['cart']+$quantity)-$p_qn;
		$_SESSION['order'][$id][1]=$quantity;

		header("location:cart.php");
	//}

		//$i=$_GET['id'];
		

		//$_SESSION['order'][$id][1]=$quantity;

		//header("location:cart.php");
?>