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

</head>
<body>
  <!--================ Start Header Menu Area =================--> 
    <?php include_once("header.php"); ?>
    <!--================ End Header Menu Area =================-->
<br><br>
  <div class="site-wrap">
		<div class="w3l_banner_nav_right">
			<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid">
				<div class="w3ls_w3l_banner_nav_right_grid1">
					<table class="table table-bordered table-hover table-striped" style="background-color: #fff;">
                                <thead>
                                    <tr>
                                    	<th>DATE</th>
                                        <th>ORDER ID</th>
                                        <th>NAME</th>
                                        <th>CONTACT NO</th>
                                        <th width="300px">ADDRESS</th>
                                        <th width="150px">PAYMENT MODE</th>                       
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $rid=$_SESSION['rinfo']['rid'];
                                    $sql=mysqli_query($con,"SELECT * FROM `order` WHERE `rid`='$rid' ORDER BY `sl` DESC");
                                    if(mysqli_num_rows($sql)>0) {
                                    while($row=mysqli_fetch_array($sql))
                                    {
                                ?>
                                    <tr>
                                    	<td><?php echo date('d-m-Y',strtotime($row['dt'])); ?></td>
                                        <td>
                                        	<a href="view.php?order_id=<?php echo $row['order_id']; ?>"><u><?php echo $row['order_id']; ?></u></a>
                                        </td>
                                        <td><?php echo strtoupper($row['fname']).' '.strtoupper($row['lname']); ?></td>
                                        <td><?php echo $row['phone']; ?></td>
                                        <td>
                                        	<?php echo $row['addr']; ?>
                                        	<br>
                                        	<?php echo "City : ".$row['city']; ?>
                                        	<br>
                                        	<?php echo "Landmark : ".$row['landmark']; ?>
                                        	<br>
                                        	<?php echo "Pin Code : ".$row['pin']; ?>
                                        </td>
                                        <td><?php echo $row['pay']; ?></td>
                                    </tr>
                                <?php }
                                    } else {
                                ?>
                                    <tr><td colspan="6">No Record Found.</td></tr>
                                <?php } ?>
                                </tbody>
                            </table>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
  </div>

  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/skrollr.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="vendors/jquery.form.js"></script>
  <script src="vendors/jquery.validate.min.js"></script>
  <script src="vendors/contact.js"></script>
  <script src="vendors/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/mail-script.js"></script>
  <script src="js/main.js"></script>

</body>
</html>