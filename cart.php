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
	<link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="vendors/nouislider/nouislider.min.css">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/cart_style.css">

  <style type="text/css">
    .update {
      background: none!important;
      border: none;
      padding: 0!important;
      color: #069;
      text-decoration: underline;
      cursor: pointer;
    }
  </style>

  <script type="text/javascript">
    function increment_quantity(cart_id) {
        var inputQuantityElement = $("#input-quantity-"+cart_id);
        var newQuantity = parseInt($(inputQuantityElement).val())+1;
        save_to_db(cart_id, newQuantity);
    }

    function decrement_quantity(cart_id) {
        var inputQuantityElement = $("#input-quantity-"+cart_id);
        if($(inputQuantityElement).val() > 1) 
        {
        var newQuantity = parseInt($(inputQuantityElement).val()) - 1;
        save_to_db(cart_id, newQuantity);
        }
    }

    function save_to_db(cart_id, new_quantity) {
      var inputQuantityElement = $("#input-quantity-"+cart_id);
        $.ajax({
        url : "update.php",
        data : "id="+cart_id+"&quantity="+new_quantity,
        type : 'post',
        success : function(response) {
          $(inputQuantityElement).val(new_quantity);
         $( "#price-"+cart_id ).load(window.location.href + " #price-"+cart_id );
         $( "#qua" ).load(window.location.href + " #qua" );
         $( "#total" ).load(window.location.href + " #total" );
        }
      });
    }
  </script>

</head>
<body>
  <!--================ Start Header Menu Area =================-->
	<?php include_once("header.php"); ?>
	<!--================ End Header Menu Area =================-->  

  <!--================Cart Area =================-->
  <section class="cart_area">
      <div class="container">
          <div class="cart_inner">
              <div class="table-responsive">
                  <table class="table">
                      <thead>
                          <tr>
                              <th scope="col">Food Items</th>
                              <th scope="col">Price</th>
                              <th scope="col">Quantity</th>
                              <th scope="col" width="100px">Total</th>
                              <th scope="col">&nbsp;</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php
                            $total=0;
                            $len=count($_SESSION['order']);

                            //echo $_SESSION['order'][0][0]." ".$_SESSION['order'][0][1]." ".$_SESSION['order'][1][0]." ".$_SESSION['order'][1][1];

                            if($_SESSION['cart']>0) {
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
                                  <div class="media">
                                      <div class="d-flex">
                                          <a href="menu_item.php?id=<?php echo $row['mid'];?>"><img src="<?php echo 'restaurant/'.$row['mimg'];?>" alt="Image" width="200px"></a>
                                      </div>
                                      <div class="media-body">
                                          <p><?php echo $row['mname'];?></p>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <h5>&#8377; <?php echo $row['mprice'];?></h5>
                              </td>
                              <td>
                                <div class="cart-info quantity">
                                    <div style="margin-left: -10px;" class="btn-increment-decrement" onClick="decrement_quantity(<?php echo $i; ?>)">-</div>
                                    <input class="input-quantity" id="input-quantity-<?php echo $i; ?>" value="<?php echo $quan; ?>">
                                    <div class="btn-increment-decrement" onclick="increment_quantity(<?php echo $i; ?>)">+</div>
                                </div>
                              </td>
                              <td>
                                <h5 id="price-<?php echo $i; ?>">&#8377; <?php echo ($row['mprice']*$quan);?></h5>
                              </td>
                              <td>
                                <div class="cart-info action">
                                  <a href="delete.php?id=<?php echo $i; ?>" class="btnRemoveAction"><img src="img/icon-delete.png" alt="icon-delete" title="Remove Item" /></a>
                                </div>
                              </td>
                          </tr>
                          <?php } } } else { ?>
                          <tr><td colspan="6"><center>Your Cart is Empty.</center></td></tr>
                          <?php } ?>
                          <tr class="bottom_button">
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                                  <h5>Subtotal</h5>
                              </td>
                              <td>
                                <h5 id="total">&#8377; <?php echo $total; ?></h5>
                              </td>
                              <td></td>
                          </tr>                          
                          <tr class="out_button_area">
                              <td class="d-none-l">
                              </td>
                              <td class="">
                              </td>
                              <td>
                              </td>
                              <td colspan="2">
                                  <div class="checkout_btn_inner d-flex align-items-center">
                                      <a class="gray_btn" href="restaurant.php">Explore Menu</a>
                                      <a class="primary-btn ml-2" href="checkout.php">Proceed to checkout</a>
                                  </div>
                              </td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </section>
  <!--================End Cart Area =================-->



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