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
		<div class="w3l_banner_nav_right" style="margin-top: 3%;">
			<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid">
				<div class="form-style-5">
					<form action="item_code.php" method="post" enctype="multipart/form-data">
						<fieldset>
              <select name="rid" style="height: 50px;">
                <option>Select Restaurant Name</option>
                <?php
                    $rid=$_SESSION['rinfo']['rid'];
                    $sql=mysqli_query($con, "SELECT * FROM `restaurant` WHERE `rid`='$rid'");
                    $c=mysqli_fetch_array($sql);
                ?>
                <option value="<?php echo $c['rid']; ?>"><?php echo $c['rname']; ?></option>
              </select>
							<input type="text" name="mname" placeholder="Enter Menu Item Name" required="required">
							<input type="text" name="mprice" placeholder="Price" required="required">
							<textarea name="description" rows="5" placeholder="Description" required="required"></textarea>
							<img src="" id="pic">
							<input id="fileUpload" type="file" multiple="multiple" name="img" placeholder="Product Image" required="required">
							
							<input type="submit" value="Add New Menu Item" name="save" style="cursor: pointer;" />
						</fieldset>
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
  </div>

  <br>

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