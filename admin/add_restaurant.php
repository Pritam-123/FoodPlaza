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
		<div class="w3l_banner_nav_right" style="margin-top: 3%;">
			<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid">
				<div class="form-style-5">
					<form action="" method="post" enctype="multipart/form-data">
						<fieldset>              
							<input type="text" name="rname" placeholder="Restaurant Name" required="required">	
              <input type="text" name="email" placeholder="Restaurant Email Id">
              <input type="text" name="ph" placeholder="Restaurant Phone No">
              <textarea name="addr" placeholder="Restaurant Address"></textarea>	
							<img src="" id="pic">
							<input id="fileUpload" type="file" multiple="multiple" name="img" placeholder="Product Image">
							
							<input type="submit" value="Add Restaurant" name="save" style="cursor: pointer;" />
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

<?php
if (isset($_POST['save'])) {

  $rname=$_POST['rname'];
  $email=$_POST['email'];
  $ph=$_POST['ph'];
  $addr=$_POST['addr'];
  $img=$_FILES['img']['name'];

  $img_new=rand().'_'.$img;

  $rimg="restaurant/".$img_new;

  if($_FILES['img']['type']=="image/jpg" || $_FILES['img']['type']=="image/jpeg" || $_FILES['img']['type']=="image/gif" || $_FILES['img']['type']=="image/png")
    {
      move_uploaded_file($_FILES['img']['tmp_name'],$rimg);
    
      $sql="INSERT INTO `restaurant`(`rname`, `email`, `ph`, `addr`, `pwd`, `rimg`) VALUES
    ('$rname', '$email', '$ph', '$addr', '54321', '$rimg')";
    
      mysqli_query($con, $sql);
    
      echo "<script>alert('Data Inserted Successfully....');location.href='add_restaurant.php'; </script>";
      exit;
    }
    else
    {
      echo "<script>alert('Please Select image Format File'); location.href='add_restaurant.php'; </script>";
      exit;
    }
}
?>