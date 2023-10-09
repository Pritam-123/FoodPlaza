<?php include_once("db.php"); ?>
<?php
        if(!empty($_SESSION['einfo']))
        {
            
        }
        else
        {
            header('location:index.php');
        }
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
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="css/style.css">
  <link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
  
</head>
<body>
  <!--================ Start Header Menu Area =================--> 
  <?php include_once("header.php"); ?>
  <!--================ End Header Menu Area =================-->

  <div class="site-wrap">
		<div class="w3l_banner_nav_right" style="margin-top: 6%;">
			<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid">
				<div class="form-style-5">
					<form action="delete.php" method="post" enctype="multipart/form-data">
						<fieldset>
                                <label>Select Restaurant</label>
                                <select name="cname" style="height: 60px;" required>
                                	<option value="">--select--</option>
                                	<?php
										$a="SELECT * FROM `restaurant`";
										$b=mysqli_query($con, $a);
										while($r=mysqli_fetch_array($b))
										{
									?>
									<option value="<?php echo $r['rid']; ?>"><?php echo $r['rname']; ?></option>
            						<?php } ?>
 								</select>                                
                            <br><br>
							<input type="submit" value="Delete Restaurant" name="delete" style="cursor: pointer;" />
						</fieldset>
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
  </div>

  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/skrollr.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/jquery.form.js"></script>
  <script src="vendors/jquery.validate.min.js"></script>
  <script src="vendors/contact.js"></script>
  <script src="vendors/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/mail-script.js"></script>
  <script src="js/main.js"></script>

</body>
</html>