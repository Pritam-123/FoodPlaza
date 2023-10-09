<?php include_once("db.php"); ?>
<?php
  $mid=$_GET['id'];
?>
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
  <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="css/style.css">
  <style type="text/css">
  	input.button {
    display: inline-block;
    border: 1px solid #E55451;
    border-radius: 30px;
    color: #222;
    font-weight: 500;
    padding: 12px 50px;
    background: #E55451;
    color: #fff;
    transition: all .4s ease;
    width: 200px;
    cursor: pointer;
		}
  </style>
</head>
<body>
	<!--================ Start Header Menu Area =================-->
	<?php include_once("header.php"); ?>
	<!--================ End Header Menu Area =================-->

  <!--================Single Product Area =================-->
  <?php
      $sql=mysqli_query($conn,"select * from `menu_item` where `mid`='$mid'");
      $row=mysqli_fetch_array($sql)
  ?>
	<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-4" style="border: 1px solid black; padding: 20px;">
					<div class="owl-carousel owl-theme s_Product_carousel">
						<div class="single-prd-item">
							<img class="img-fluid" src="<?php echo 'restaurant/'.$row['mimg']; ?>" alt="" style="height: 380px; max-width: 400px;">
						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3><?php echo $row['mname']; ?></h3>
						<h2>&#8377; <?php echo $row['mprice']; ?></h2>
						<ul class="list">
							<?php
									$rid=$row['rid'];
									$s=mysqli_query($conn,"select * from `restaurant` where `rid`='$rid'");
									$r=mysqli_fetch_array($s)
							?>
							<li><span>Restaurant Name</span> : <?php echo $r['rname']; ?></li>
							<li>&nbsp;</li>
							<li><span>Cuisine</span> : <?php echo $row['type']; ?></li>
							<li><span>Availibility</span> : 
								<?php
										if ($row['status']==1) {
											echo "In Stock";
											$action=" ";
										} else {
											echo "Out of Stock";
											$action="disabled style='cursor: not-allowed;'";
										}
								?>
							</li>
						</ul>
						<p><?php echo $row['description']; ?></p>
						<div class="product_count">
							<form action="add_cart.php" method="post">
            		<input type="hidden" name="rid" value="<?php echo $rid;?>">
            		<input type="hidden" name="mid" value="<?php echo $mid;?>">
              	<label for="qty">Quantity:</label>
              	<input type="number" name="qun" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
								<input class="button primary-btn" type="submit" name="add" value="Add to Cart" <?php echo $action;?> >
							</form>           
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================End Single Product Area =================-->

	<br/>
	<br/>
	<br/>
  <!--================ Start footer Area  =================-->	
	  <?php include_once("footer.php"); ?>
	<!--================ End footer Area  =================-->

  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/skrollr.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="vendors/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>