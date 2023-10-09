<?php include_once("db.php"); ?>
<?php
        if(!empty($_SESSION['rinfo']))
        {
            
        }
        else
        {
            header('location:index.php');
        }
?>
<?php $order_id=$_GET['order_id']; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>🅵🅾🅾🅳 🅿🅻🅰🆉🅰</title>
    <link rel="icon" href="img/Fevicon.png" type="image/png">
    
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!--================ Start Header Menu Area =================--> 
    <?php include_once("header.php"); ?>
    <!--================ End Header Menu Area =================-->
<br><br>
  <div class="site-wrap">
		<div class="w3l_banner_nav_right">
			<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid">
				<div class="w3ls_w3l_banner_nav_right_grid1">
					<table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>RESTAURANT NAME</th>
                                        <th>MENU ITEM NAME</th>
                                        <th>PRICE</th>
                                        <th>QUANTITY</th>                                        
                                        <th>TOTAL PRICE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                	$pay=0;
                                    $sql=mysqli_query($con, "SELECT * FROM `order_item` WHERE `order_id`='$order_id'");
                                    while($row=mysqli_fetch_array($sql))
                                    {
                                      $pro_id=$row['pro_id'];

                                      $s=mysqli_query($con, "SELECT * FROM `menu_item` WHERE `mid`='$pro_id'");
                                      $r=mysqli_fetch_array($s);
                                      $total=$r['mprice']*$row['quan'];

                                      $rid=$r['rid'];

                                      $c=mysqli_query($con, "SELECT * FROM `restaurant` WHERE `rid`='$rid'");
                                      $cat=mysqli_fetch_array($c);
                                ?>
                                    <tr>
                                        <td><?php echo $cat['rname']; ?></td>          
                                        <td><?php echo $r['mname']; ?></td>
                                        <td><?php echo $r['mprice']; ?></td>
                                        <td><?php echo $row['quan']; ?></td>
                                        <td><?php echo $total; ?></td>
                                    </tr>
                                <?php 
                                		$pay=$pay+$total;
                            		}
                            	?>
                                	<tr>
                                		<td colspan="4" style="text-align: right;"><b>Total Payable Amount</b></td>
                                		<td><b><?php echo $pay; ?></b></td>
                                	</tr>
                                </tbody>
                            </table>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>

  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/skrollr.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="vendors/jquery.form.js"></script>
  <script src="vendors/jquery.validate.min.js"></script>
  <script src="vendors/contact.js"></script>
  <script src="vendors/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/mail-script.js"></script>
  <script src="js/main.js"></script>

</body>
</html>