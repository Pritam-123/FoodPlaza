<?php include_once("db.php"); ?>
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
  <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="css/style.css">
  <style type="text/css">

  </style>
</head>
<body>
  <!--================ Start Header Menu Area =================-->
	<?php include_once("header.php"); ?>
	<!--================ End Header Menu Area =================-->

  <main class="site-main">
    <!-- ================ offer section start ================= -->
    <section class="offer" id="parallax-1" data-anchor-target="#parallax-1">
      <div class="container">
        <div class="row">
          <div class="col-xl-5">
            <div class="offer__content text-center" style="height: 600px;">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ offer section end ================= -->

    <!-- ================ Trending Product carousel start ================= -->
    <section class="section-margin calc-60px">
      <div class="container">
        <div class="section-intro pb-60px">
          <h2><span class="section-intro__style">Trending Foods</span></h2>
        </div>
        <div class="owl-carousel owl-theme" id="bestSellerCarousel">
              <?php
                  $sql=mysqli_query($conn,"select * from `menu_item` where `trend`=1");
                  while ($row=mysqli_fetch_array($sql)) {
              ?>
          <div class="card text-center card-product">
            <div class="card-product__img">
              <img class="img-fluid" src="<?php echo 'restaurant/'.$row['mimg']; ?>" alt="" style="height:210px; width:223px;">
              <ul class="card-product__imgOverlay">
                <li><a href="menu_item.php?id=<?php echo $row['mid']; ?>"><button><i class="ti-shopping-cart"></i></button></a></li>
              </ul>
            </div>
            <div class="card-body">
              <h4 class="card-product__title"><a href="menu_item.php?id=<?php echo $row['mid']; ?>"><?php echo $row['mname']; ?></a></h4>
              <p class="card-product__price">&#8377; <?php echo $row['mprice']; ?></p>
            </div>
          </div>
               <?php } ?>
        </div>
      </div>
    </section>
    <!-- ================ Trending Product carousel end ================= -->

    

  </main>


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