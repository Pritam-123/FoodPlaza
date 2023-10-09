<?php include_once("db.php"); ?>
<?php
        if(!empty($_SESSION['uinfo']))
        {
            
        }
        else
        {
          echo"<script>alert('You have to login, to checkout.'); location.href='login.php';</script>";
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


    <?php
        $c_name=$_SESSION['uinfo']['name'];
        $name=explode(" ", $c_name);
    ?>
  
  <!--================Checkout Area =================-->
  <section class="checkout_area section-margin--small">
    <div class="container">
        <div class="billing_details">
            <div class="row">
                <div class="col-lg-8 order_box">
                    <h3>Billing Details</h3>
                    <form class="row contact_form" action="confirmation.php" method="post">
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="first" name="fname" placeholder="First name" value="<?php echo $name[0];?>" required>
                            <span class="placeholder" data-placeholder="First name"></span>
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="last" name="lname" placeholder="Last name" value="<?php //echo $name[1];?>" required>
                            <span class="placeholder" data-placeholder="Last name"></span>
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" value="<?php echo $_SESSION['uinfo']['email'];?>" required>
                            <span class="placeholder" data-placeholder="Email Address"></span>
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="number" name="phone" placeholder="Phone number" value="<?php echo $_SESSION['uinfo']['ph_no'];?>" required>
                            <span class="placeholder" data-placeholder="Phone number"></span>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="add1" name="addr" placeholder="Address" required>
                            <span class="placeholder" data-placeholder="Address"></span>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="landmark" name="landmark" placeholder="Landmark" required>
                            <span class="placeholder" data-placeholder="Landmark"></span>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="city" name="city" placeholder="Town/City" required>
                            <span class="placeholder" data-placeholder="Town/City"></span>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="zip" name="pin" placeholder="Pin code" required>
                        </div>
                        <input type="hidden" name="total" value="<?php echo $total; ?>">
                        <div class="col-md-12" style="margin-top: 25px;">
                        <h3>Payment Modes</h3>
                        <div class="payment_item" active style="margin-top: -25px;">
                            <div class="radion_btn">
                                <input type="radio" id="f-option1" name="payment" value="1" checked>
                                <label for="f-option5">Cash on delivery (COD)</label>
                                <div class="check"></div>
                            </div>
                        </div>
                        <div class="payment_item" active>
                            <div class="radion_btn">
                                <input type="radio" id="f-option2" name="payment" value="2" disabled>
                                <label for="f-option6">Credit / Debit Card</label>
                                <div class="check"></div>
                            </div>
                        </div>
                        <div class="payment_item">
                            <div class="radion_btn">
                                <input type="radio" id="f-option3" name="payment" value="3" disabled>
                                <label for="f-option7">Netbanking</label>
                                <div class="check"></div>
                            </div>
                        </div>
                        <div class="text-center" align="center">
                          <button class="button button-paypal" type="submit" name="deli" style="width:50%;">Place Order</button>
                        </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="order_box">
                        <h2>Order Summary</h2>
                        <ul class="list">
                            <li><a><h4>Product <span>Total</span></h4></a></li>
                            <?php
                            $total=0;
                            $len=count($_SESSION['order']);

                            if($_SESSION['cart']>0) {
                              for ($i=0; $i < $len; $i++) { 
                                $id=$_SESSION['order'][$i][0];
                                $quan=$_SESSION['order'][$i][1];


                                if($id!=0 && $quan!=0) {

                                  $sql=mysqli_query($conn,"SELECT * FROM `menu_item` WHERE `mid`='$id'");
                                  $row=mysqli_fetch_array($sql);

                                  $total=$total+($row['mprice']*$quan);
                            ?>
                            <li><a><?php echo $row['mname'];?> x <?php echo $quan; ?> <span class="last">&#8377; <?php echo ($row['mprice']*$quan);?></span></a></li>
                            <?php } } } ?>
                            </ul>
                            <hr>
                        <ul class="list list_2">
                            <li><a>Subtotal <span>&#8377; <?php echo $total; ?></span></a></li>
                            <li><a>Shipping <span>Free</span></a></li>
                            <hr>
                            <li><a>Total <span>&#8377; <?php echo $total; ?></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
  <!--================End Checkout Area =================-->

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