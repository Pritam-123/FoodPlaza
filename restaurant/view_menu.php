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
  <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="vendors/nouislider/nouislider.min.css">

  <link rel="stylesheet" href="css/style.css">

</head>
<body>
  <!--================ Start Header Menu Area =================-->
	<?php include_once("header.php"); ?>
	<!--================ End Header Menu Area =================-->
<br>

	<!-- ================ category section start ================= -->		  
  <section class="section-margin--small mb-5">
    <div class="container">
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
          <!-- Start Best Seller -->
          <section class="lattest-product-area pb-40 category-list">
            <div class="row">
              <?php
                  $rid=$_SESSION['rinfo']['rid'];
                  $sql=mysqli_query($con,"select * from `menu_item` where `rid`='$rid'");
                  if(mysqli_num_rows($sql)>0) {
                  while ($row=mysqli_fetch_array($sql)) {
              ?>
                <div class="col-md-3 col-lg-3 col-sm-6">
                  <div class="card text-center card-product">
                    <div class="card-product__img">
                      <img class="card-img" src="<?php echo $row['mimg']; ?>" alt="" style="height: 210px; width: 230px;">
                      <ul class="card-product__imgOverlay">
                        <li><a href="update.php?id=<?php echo $row['mid']; ?>"><button style="background-color: #15317E;"><i class="ti-pencil"></i></button></a></li>
                        <li><a href="delete.php?id=<?php echo $row['mid']; ?>"><button style="background-color: #E3242B;"><i class="ti-trash"></i></button></a></li>
                      </ul>
                    </div>
                    <div class="card-body">
                      <h4 class="card-product__title"><?php echo $row['mname']; ?></h4>
                      <p class="card-product__price">&#8377; <?php echo $row['mprice']; ?></p>
                    </div>
                  </div>
                </div>
              <?php } } else {echo "<center style='padding-left:45%;'>No Record Found.</center>";} ?>
            </div>
          </section>
          <!-- End Best Seller -->
        </div>
      </div>
    </div>
  </section>
	<!-- ================ category section end ================= -->

  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/skrollr.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/nouislider/nouislider.min.js"></script>
  <script src="vendors/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>