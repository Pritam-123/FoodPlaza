<?php include_once("db.php"); ?>
<?php
  if($_SESSION['cart']==0)
  {
    header("location:restaurant.php");
  }
?>
<?php
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $addr=$_POST['addr'];
    $landmark=$_POST['landmark'];
    $city=$_POST['city'];
    $pin=$_POST['pin'];

    $total=$_POST['total'];

    $payment=$_POST['payment'];

    $dt=date('Y-m-d');

    $order_id=rand();

    if ($payment==1) {
      $pay='cash on delivery';
    } elseif ($payment==2) {
      $pay='paid by debit/credit card';
    } elseif ($payment==3) {
      $pay='paid by net banking';
    }

    $rid=$_SESSION['r_id'];

    $sql="insert into `order` (`order_id`, `fname`, `lname`, `email`, `phone`, `addr`, `landmark`, `city`, `pin`, `pay`, `status`, `dt`, `rid`) values('$order_id', '$fname', '$lname', '$email', '$phone', '$addr', '$landmark', '$city', '$pin', '$pay', 1, '$dt', '$rid')";

    if(mysqli_query($conn,$sql)) {
      $len=count($_SESSION['order']);
      for ($i=0; $i < $len; $i++) { 
                $pro_id=$_SESSION['order'][$i][0];
                $quan=$_SESSION['order'][$i][1];

                mysqli_query($conn,"INSERT INTO `order_item` (`order_id`, `pro_id`, `quan`) VALUES('$order_id', '$pro_id', '$quan')");
      }
      $_SESSION['cart']=0;
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
  
  <!--================Order Details Area =================-->
  <section class="order_details section-margin--small">
    <div class="container">
      <center><img src="img/tick.png" width="100" height="100"></center>
      <p class="text-center billing-alert">Thank you. Your order has been placed. <a href="restaurant.php" style="text-decoration: underline; font-size: 12px; ">Explore Menu</a></p>
      <div class="row mb-5">
        <div class="col-md-6 col-xl-4 mb-4 mb-xl-0">
          <div class="confirmation-card">
            <h3 class="billing-title">Order Info</h3>
            <table class="order-rable">
              <tr>
                <td>Order number</td>
                <td>: <?php echo $order_id; ?></td>
              </tr>
              <tr>
                <td>Date</td>
                <td>: <?php echo date("d M, Y",strtotime($dt)); ?></td>
              </tr>
              <tr>
                <td>Payment method</td>
                <td>: <?php echo ucfirst($pay); ?></td>
              </tr>
            </table>
          </div>
        </div>
        <div class="col-md-6 col-xl-4 mb-4 mb-xl-0">
          <div class="confirmation-card">
            <h3 class="billing-title">User Details</h3>
            <table class="order-rable">
              <tr>
                <td>Name</td>
                <td>: <?php echo ucfirst($fname)." ".ucfirst($lname); ?></td>
              </tr>
              <tr>
                <td>Phone #</td>
                <td>: <?php echo $phone; ?></td>
              </tr>
              <tr>
                <td>Email</td>
                <td>: <?php echo $email; ?></td>
              </tr>
            </table>
          </div>
        </div>
        <div class="col-md-6 col-xl-4 mb-4 mb-xl-0">
          <div class="confirmation-card">
            <h3 class="billing-title">Billing Address</h3>
            <table class="order-rable">
              <tr>
                <td>Address</td>
                <td>: <?php echo ucfirst($addr); ?></td>
              </tr>
              <tr>
                <td>Landmark</td>
                <td>: <?php echo ucfirst($landmark); ?></td>
              </tr>
              <tr>
                <td>City</td>
                <td>: <?php echo ucfirst($city)." - ".$pin; ?></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <div class="order_details_table">
        <h2>Order Details</h2>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Product</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
              </tr>
            </thead>
            <tbody>
              <?php
                            $total=0;
                            $len=count($_SESSION['order']);

                              for ($i=0; $i < $len; $i++) { 
                                $id=$_SESSION['order'][$i][0];
                                $quan=$_SESSION['order'][$i][1];


                                if($id!=0 && $quan!=0) {

                                  $sql=mysqli_query($conn,"SELECT * FROM `menu_item` WHERE `mid`='$id'");
                                  $row=mysqli_fetch_array($sql);

                                  $total=$total+($row['mprice']*$quan);
              ?>
              <tr>
                <td>
                  <p><?php echo $row['mname'];?></p>
                </td>
                <td>
                  <h5>&nbsp;&nbsp;x <?php echo $quan; ?></h5>
                </td>
                <td>
                  <p>&#8377; <?php echo ($row['mprice']*$quan);?></p>
                </td>
              </tr>
              <?php } } ?>
              <tr>
                <td>
                  <h4>Subtotal</h4>
                </td>
                <td>
                  <h5></h5>
                </td>
                <td>
                  <p>&#8377; <?php echo $total; ?></p>
                </td>
              </tr>
              <tr>
                <td>
                  <h4>Shipping</h4>
                </td>
                <td>
                  <h5></h5>
                </td>
                <td>
                  <p>&nbsp;&nbsp;&nbsp;Free</p>
                </td>
              </tr>
              <tr>
                <td>
                  <h4>Total</h4>
                </td>
                <td>
                  <h5></h5>
                </td>
                <td>
                  <h4>&#8377; <?php echo $total; ?></h4>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
  <!--================End Order Details Area =================-->



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
<?php
     //session_destroy();
      unset($_SESSION['order']);
      unset($_SESSION['r_id']);
    } else {
      echo "<script>alter('Try after some time.');</script>";
    }
?>