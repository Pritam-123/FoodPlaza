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
<?php $mid=$_GET['id']; ?>
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
					<form action="update_code.php" method="post" enctype="multipart/form-data">
						<fieldset>
              
                <?php
                    $rid=$_SESSION['rinfo']['rid'];
                    $sql=mysqli_query($con,"select * from `menu_item` where `mid`='$mid'");
                    $c=mysqli_fetch_array($sql);
                ?>         
              
              <input type="hidden" name="mid" value="<?php echo $mid; ?>">
							<input type="text" name="mname" placeholder="Enter Menu Item Name" readonly value="<?php echo $c['mname']; ?>">

              <select name="type" style="height: 50px;" required>
                <option>Select Food Type</option>
                <option value="Veg">Veg</option>
                <option value="Non Veg">Non Veg</option>
              </select>

              <select name="status" style="height: 50px;" required>
                <option>Select Availibility</option>
							  <option value="1">Available</option>
                <option value="0">Not Available</option>
              </select>

              <select name="trend" style="height: 50px;" required>
                <option>Select Popularity</option>
                <option value="1">Trending</option>
                <option value="0">Not Trending</option>
              </select>

							<input type="submit" value="Update" name="update" style="cursor: pointer;" />
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