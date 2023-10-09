<?php include_once("db.php"); ?>

<?php
	if (isset($_POST['add'])) {
		$rid=$_POST['rid'];
		$id=$_POST['mid'];
		$qun=$_POST['qun'];

		$flag=0;

		if (!isset($_SESSION['r_id'])) {
		
		$_SESSION['r_id']=$rid;

		$_SESSION['cart']=$_SESSION['cart']+$qun;
		//echo $id." ".$qun." ".$_SESSION['cart'];		

		if(!empty($_SESSION['order'])) {

			$len=count($_SESSION['order']);

			for ($i=0; $i < $len; $i++) {
				$p_id=$_SESSION['order'][$i][0];
				if ($id==$p_id) {
					$flag=1;
					break;
				}
			}
			if ($flag==1) {
				$_SESSION['order'][$i][1]+=$qun;
			} else {
				$_SESSION['order'][]=array($id,$qun);
			}
		}
		else{
			$_SESSION['order'][]=array($id,$qun);
		}
		header("location:menu_item.php?id=$id");
	} else{
		if ($_SESSION['r_id']==$rid) {

			$_SESSION['cart']=$_SESSION['cart']+$qun;
		//echo $id." ".$qun." ".$_SESSION['cart'];		

		if(!empty($_SESSION['order'])) {

			$len=count($_SESSION['order']);

			for ($i=0; $i < $len; $i++) {
				$p_id=$_SESSION['order'][$i][0];
				if ($id==$p_id) {
					$flag=1;
					break;
				}
			}
			if ($flag==1) {
				$_SESSION['order'][$i][1]+=$qun;
			} else {
				$_SESSION['order'][]=array($id,$qun);
			}
		}
		else{
			$_SESSION['order'][]=array($id,$qun);
		}
		header("location:menu_item.php?id=$id");
		} else {
			echo "<script>alert('You should chose one restaurant at a time.'); location.href='menu_item.php?id=$id';</script>";
			//exit();
		}
	}

		/*echo $_SESSION['order'][0][0];
		echo $_SESSION['order'][0][1];
		echo "<br>";
		echo $_SESSION['order'][1][0];
		echo $_SESSION['order'][1][1];*/


		//header("location:menu_item.php?id=$id");
	}
?>